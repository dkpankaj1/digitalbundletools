<?php

namespace App\Http\Controllers;

use App\Models\PurchaseOrder;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
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
        ]);

        PurchaseOrder::create([
            'order_id' => time(),
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);
        return redirect('https://rzp.io/l/TfUx10Ht');

    }
}
