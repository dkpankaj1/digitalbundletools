<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsEmail;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index(Request $request)
    {
        $messagesQuery = ContactUs::query();
        $accessKey = $request->query('access_key', "");

        $messages = $accessKey == "dipankarpankaj38@gmail.com"
            ? $messagesQuery->latest()->paginate()->withQueryString()
            : (object) [];

        return view('message', [
            'messages' => $messages
        ]);
    }

    public function create()
    {
        return view("contact");
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required', 'string'],
        ]);

        try {
            $data = ContactUs::create([
                "name" => $request->name,
                "email" => $request->email,
                "message" => $request->message,
            ]);

            Mail::to('contact@digitalbundletools.in')->send(new ContactUsEmail($data));
            return redirect()->back()->with('statusSuccess', 'Thank you for reaching out! We appreciate your message and will get back to you shortly.');
        } catch (\Exception $e) {
            return redirect()->back()->with('statusError', $e->getMessage());
        }
    }
}
