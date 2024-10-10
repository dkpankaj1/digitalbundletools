<?php

namespace App\Services;

use PhonePe\Env;
use PhonePe\payments\v1\models\request\builders\InstrumentBuilder;
use PhonePe\payments\v1\models\request\builders\PgPayRequestBuilder;
use PhonePe\payments\v1\models\request\builders\PgRefundRequestBuilder;
use PhonePe\payments\v1\PhonePePaymentClient;
use PhonePe\payments\v1\models\response\PgRefundResponse;
use PhonePe\payments\v1\models\response\PgCheckStatusResponse;
use Exception;
use Log;

class PhonePePaymentService
{
    private PhonePePaymentClient $phonePePaymentsClient;

    public function __construct()
    {
        $merchantId = env('PHONEPE_MERCHANT_ID');
        $saltKey = env('PHONEPE_SALT_KEY');
        $saltIndex = env('PHONEPE_SALT_INDEX');
        $env = env('PHONEPE_ENV') === 'production' ? Env::PRODUCTION : Env::UAT;
        $shouldPublishEvents = env('PHONEPE_PUBLISH_EVENTS', true);

        $this->phonePePaymentsClient = new PhonePePaymentClient(
            $merchantId,
            $saltKey,
            $saltIndex,
            $env,
            $shouldPublishEvents
        );
    }


    public function initiatePayment(string $merchantTransactionId, int $amount, string $redirectUrl, string $callbackUrl): string
    {

        $request = PgPayRequestBuilder::builder()
            ->merchantId(env('PHONEPE_MERCHANT_ID'))
            ->amount($amount)
            ->merchantTransactionId($merchantTransactionId)
            ->redirectUrl($redirectUrl)
            ->redirectMode("REDIRECT")
            ->callbackUrl($callbackUrl)
            ->paymentInstrument(InstrumentBuilder::buildPayPageInstrument())
            ->build();

        $response = $this->phonePePaymentsClient->pay($request);
        return $response->getInstrumentResponse()->getRedirectInfo()->getUrl();
    }

    /**
     * Check the status of a transaction.
     *
     * @param string $merchantTransactionId Unique transaction ID to check.
     * @return PgCheckStatusResponse The response containing transaction status.
     */
    public function checkStatus(string $merchantTransactionId): PgCheckStatusResponse
    {
        return $this->phonePePaymentsClient->statusCheck($merchantTransactionId);
    }

    /**
     * Initiate a refund request.
     *
     * @param string $originalTransactionId The transaction ID to be reversed.
     * @param string $merchantTransactionId Unique refund transaction ID.
     * @param int $amount Refund amount in paise.
     * @param string|null $callbackUrl URL to receive callback notifications.
     * @return PgRefundResponse|null The response containing refund status or null on failure.
     */
    public function initiateRefund(string $originalTransactionId, string $merchantTransactionId, int $amount, ?string $callbackUrl = null): ?PgRefundResponse
    {
        $pgRefundRequest = PgRefundRequestBuilder::builder()
            ->originalTransactionId($originalTransactionId)
            ->merchantId(env('PHONEPE_MERCHANT_ID'))
            ->merchantTransactionId($merchantTransactionId)
            ->callbackUrl($callbackUrl)
            ->amount($amount)
            ->build();

        try {
            return $this->phonePePaymentsClient->refund($pgRefundRequest);
        } catch (Exception $e) {
            Log::error('Error initiating refund with PhonePe:', [
                'message' => $e->getMessage(),
                'originalTransactionId' => $originalTransactionId,
                'merchantTransactionId' => $merchantTransactionId,
                'amount' => $amount,
            ]);
            return null; // Return null to indicate failure
        }
    }

    /**
     * Verify the callback from PhonePe.
     *
     * @param string $responseBody The body of the callback response.
     * @param string $xVerify The x_verify header from the callback response.
     * @return bool True if the callback is valid; otherwise, false.
     */
    public function verifyCallback(string $responseBody, string $xVerify): bool
    {
        return $this->phonePePaymentsClient->verifyCallback($responseBody, $xVerify);
    }
}
