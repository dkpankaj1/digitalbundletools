<?php

namespace App\Services;

use PhonePe\Env;
use PhonePe\payments\v1\models\request\builders\InstrumentBuilder;
use PhonePe\payments\v1\models\request\builders\PgPayRequestBuilder;
use PhonePe\payments\v1\PhonePePaymentClient;
use PhonePe\payments\v1\models\response\PgCheckStatusResponse;
use Exception;
use Log;

class PhonePePaymentService
{
    private PhonePePaymentClient $phonePePaymentsClient;

    public function __construct()
    {
        $merchantId = "M22ADDTSFTLJC";
        $saltKey = "379b43e1-ee42-490f-bb72-14122ed01488";
        $saltIndex = 1;
        $env = "PRODUCTION";
        $shouldPublishEvents = true;

        $this->phonePePaymentsClient = new PhonePePaymentClient(
            $merchantId,
            $saltKey,
            $saltIndex,
            $env,
            $shouldPublishEvents
        );
    }
    public function initiatePayment(string $transactionId, int $amount, string $redirectUrl, string $callbackUrl): string
    {
        $request = PgPayRequestBuilder::builder()
            ->merchantId(env('PHONEPE_MERCHANT_ID'))
            ->amount($amount)
            ->merchantTransactionId($transactionId)
            ->redirectUrl($redirectUrl)
            ->redirectMode("REDIRECT")
            ->callbackUrl($callbackUrl)
            ->paymentInstrument(InstrumentBuilder::buildPayPageInstrument())
            ->build();
        $response = $this->phonePePaymentsClient->pay($request);
        return $response->getInstrumentResponse()->getRedirectInfo()->getUrl();
    }
    public function checkStatus(string $merchantTransactionId): PgCheckStatusResponse
    {
        return $this->phonePePaymentsClient->statusCheck($merchantTransactionId);
    }
    public function verifyCallback(string $responseBody, string $xVerify): bool
    {
        return $this->phonePePaymentsClient->verifyCallback($responseBody, $xVerify);
    }
}
