<?php

namespace App\Http\Controllers;

use App\Enums\PaymentStatus;
use App\Models\PurchaseOrder;
use App\Services\PhonePePaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PurchaseController extends Controller
{
    protected $phonePePaymentService;

    public function __construct(PhonePePaymentService $phonePePaymentService)
    {
        $this->phonePePaymentService = $phonePePaymentService;
    }
    public function create(Request $request)
    {
        return view('purchase.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'phone' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:10', 'max:15'],
            'pg' => ['required', 'in:rezorpe,phonepe'],
        ]);

        $amount = 99;

        $purchaseOrder = PurchaseOrder::create([
            'order_id' => md5(time()),
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            "vendor" => $request->pg,
            'amount' => $amount,
        ]);

        if ($request->pg === "rezorpe") {
            return redirect('https://rzp.io/l/TfUx10Ht');
        }

        if ($request->pg === "phonepe") {

            $redirectUrl = route('purchase.success');
            $callbackUrl = route('purchase.callback');

            $paymentRedirectUrl = $this->phonePePaymentService->initiatePayment(
                $purchaseOrder->order_id,
                $amount * 100,
                $redirectUrl,
                $callbackUrl
            );
            return redirect($paymentRedirectUrl);
        }
        abort(404);
    }

    public function success()
    {
        return view('purchase.success');
    }

    public function callback(Request $request)
    {
        $responseBody = $request->input('response');
        $xVerify = $request->header('x-verify');

        if ($this->phonePePaymentService->verifyCallback($responseBody, $xVerify)) {
            $data = $this->phonePePaymentService->decodePaymentResponse($responseBody);

            if ($data['responseCode'] === "SUCCESS") {
                $purchaseOrder = PurchaseOrder::where('order_id', $data['merchantTransactionId'])->first();

                if ($purchaseOrder) {
                    $purchaseOrder->update(['status' => PaymentStatus::COMPLETED]);
                }
            }
        }
    }

}
