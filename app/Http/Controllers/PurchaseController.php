<?php

namespace App\Http\Controllers;

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
            'name' => ['required', 'string', 'max:255'], // Name must be a string and not exceed 255 characters
            'email' => ['required', 'email', 'max:255', 'unique:users,email'], // Email must be valid, unique, and not exceed 255 characters
            'phone' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:10', 'max:15'], // Phone must be a valid number (supporting common formats) and have length between 10-15 digits
            'pg' => ['required', 'in:rezorpe,phonepe'],
        ]);

        $amount = 99;
        // Create the purchase order in the database
        $purchaseOrder = PurchaseOrder::create([
            'order_id' => md5(time()), // You might want to generate a more unique order_id
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'amount' => $amount, // Include amount in the order
        ]);
        
        if ($request->pg === "rezorpe") {
            return redirect('https://rzp.io/l/TfUx10Ht');
        }

        if ($request->pg === "phonepe") {

            $redirectUrl = route('purchase.success'); // URL to redirect after payment success
            $callbackUrl = route('purchase.callback'); // URL to receive callback notifications

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

    // Additional methods for success and callback handling
    public function success()
    {
        return view('purchase.success');
    }

    public function callback(Request $request)
    {
        // Handle the callback verification here
        $responseBody = $request->getContent();
        $xVerify = $request->header('x_verify');

        // Log the response body for debugging
        Log::info('PhonePe Callback Response:', ['response_body' => $responseBody]);

        if ($this->phonePePaymentService->verifyCallback($responseBody, $xVerify)) {
            // Handle success logic here, like updating the order status
            Log::info('Payment verification successful.');
            // You might want to update the order status in the database
            // For example:
            // $order = PurchaseOrder::where('order_id', $orderId)->first();
            // $order->update(['status' => 'paid']);
        } else {
            // Handle verification failure
            Log::warning('Payment verification failed.');
        }
    }
}
