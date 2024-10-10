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
            ->merchantId("M22ADDTSFTLJC")
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
    public function checkStatus(string $transactionId): PgCheckStatusResponse
    {
        return $this->phonePePaymentsClient->statusCheck($transactionId);
    }
    public function verifyCallback(string $responseBody, string $xVerify): bool
    {
        return $this->phonePePaymentsClient->verifyCallback($responseBody, $xVerify);
    }

    public function decodePaymentResponse(string $base64Response): array
    {
        $decodedResponse = base64_decode($base64Response);
        $responseData = json_decode($decodedResponse, true);
        
        return [
            'status' => $responseData['success'],
            'merchantTransactionId' => $responseData['data']['merchantTransactionId'] ?? null,
            'transactionId' => $responseData['data']['transactionId'] ?? null,
            'amount' => $responseData['data']['amount'] ?? null,
            'state' => $responseData['data']['state'] ?? null,
            'responseCode' => $responseData['data']['responseCode'] ?? null,
            'message' => $responseData['message'] ?? 'Payment successful',
            'paymentInstrument' => $responseData['data']['paymentInstrument'] ?? null,
        ];
    }
}
