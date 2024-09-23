<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function termsCondition()
    {
        return view('term');
    }
    public function privacyPolicy()
    {
        return view('policy');
    }
    public function refundPolicy()
    {
        return view('refund');
    }
}
