<?php

namespace App\Http\Controllers;
use App\Models\Subscriber;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class WebsiteController extends Controller
{
    public function index(Request $request)
    {
        $today = Carbon::now();
        $oneMonthAgo = $today->copy()->subMonth();

        $projects = [
            "Accounting-software (2)",
            "Appartment / Apartment (2)",
            "Bedesk (1)",
            "Blood-Bank-Management-System / Blood-Bank (4)",
            "cms / cms1 / cms4 (4)",
            "crmone / CRM / CRM_PRO (3)",
            "dating (2)",
            "Deepsound (1)",
            "Doctorin / doctor-management / Doctor-Appointment-System (4)",
            "ecommercemultivendor / Ecommerce / ecomsingle / Ecommerce2 (6)",
            "Edufirm (1)",
            "email / Mailer (2)",
            "erp / ERP (3)",
            "filesharing (2)",
            "Foodordering / Food-Ordering-System / Online-Food-Order (4)",
            "Forumlab (1)",
            "hosting (2)",
            "hrms / Human-Resource-Management-System (5)",
            "industry (1)",
            "institute (2)",
            "inventory / Stock-Management / Inventory_And_Monitoring_System (7)",
            "itest (1)",
            "Jobboard / jobportal / Jobportal (4)",
            "library / Library-Management-System (4)",
            "loan / Loan-Management-System (4)",
            "marketplace (2)",
            "matrimony / Matrimonial (2)",
            "mlm (3)",
            "Multihotelbooking (1)",
            "multiwebsite (2)",
            "Nft / Nftzai (2)",
            "pharmacy / Pharmacy-Management-System (4)",
            "Portfolio (1)",
            "projectmanagement / Project-Management-System / Ult-Projectms (4)",
            "Realstatepro / Real-Estate (2)",
            "Repair (1)",
            "Reserve (1)",
            "restaurant / Restaurant-Management / Online-Restarant-Order / Smart-Restaurant (7)",
            "Restrobooking (1)",
            "Restrosaas (1)",
            "resume (2)",
            "Retailstore (1)",
            "saloon (3)",
            "schoolone / schoolone1 / School_Fees_System (4)",
            "Shippingmaster (1)",
            "Supportdesk (1)",
            "Ticketsales (1)",
            "travel / Online-Travel-System / New Travel (4)",
            "Assessment-Management-System (1)",
            "Daily-Expense-Manager (1)",
            "Expense-Tracker (1)",
            "Farm-management-System (1)",
            "Gym-Management-System / GYM (3)",
            "Hospital-Information-System / Hospital-Management-System / Hospital (6)",
            "Hotel-Management-System / Hotel (3)",
            "Internship-Management-System (1)",
            "Interview-Management (1)",
            "LMS / Online-Course (2)",
            "Online-exam-system / ONLINE-EXAM-SYSTEM (5)",
            "Online-Job-Portal-System / Online_Job_Portal_System (4)",
            "Online-Library-Management-System (1)",
            "Online-Quiz / Quiz (4)",
            "Online-Voting-System (3)",
            "Patient-Record-Management-System (1)",
            "Point-of-Sale / POS (3)",
            "Record-Management-System (1)",
            "Smart-Parking-Management-System / Smart-parking (2)",
            "Student-Management-System / Student-Record-Management-System (6)",
            "Visitor-Management-System (1)",
            "attendance / Attendance (2)",
            "Bus-Booking / bus-booking-system-PHP (2)",
            "Cable-Management-System (1)",
            "Catering-Management-System (1)",
            "Clothstore-Management-System (1)",
            "Dignostic-Management-System (1)",
            "E-Bank-Management (1)",
            "easypos (1)",
            "Election (1)",
            "Fleet (1)",
            "Invoice (1)",
            "Jewellery-Store-System (1)",
            "Laundry-Management-System / Laundry (2)",
            "Loan-Management-System (2)",
            "Online-Ticket-Reservation-Project (1)",
            "Pharma (2)",
            "Photo-Studio-Management (1)",
            "Tailor (1)",
            "Tenant (1)"
        ];

        $testimonialsData = [
            [
                "name" => "Aman Singh",
                "rating" => 5,
                "review" => "The Ultimate Business Solutions Mega Bundle has transformed the way I manage my retail store. From inventory to billing, everything is so easy to control now. It saved me a lot of time and money. Highly recommended for any business owner!"
            ],
            [
                "name" => "Olivia Müller",
                "location" => "Germany",
                "rating" => 4,
                "review" => "This bundle exceeded my expectations! I've implemented the eCommerce platform and CRM in my online business, and the results are outstanding. The setup was straightforward, and it’s already increased my efficiency."
            ],
            [
                "name" => "Prabhakar Pratap",
                "rating" => 5,
                "review" => "I've been using the CRM and Project Management tools from this bundle for a few months, and the efficiency of my team has doubled. We’ve also implemented the ERP system, and it seamlessly integrates with our existing workflows. Best investment ever!"
            ],
            [
                "name" => "Rahul Kumar",
                "rating" => 4,
                "review" => "The variety of software in this bundle is incredible! I run a small restaurant, and the Restaurant Management System alone is worth the entire price. It's user-friendly, and my team loves it!"
            ],
            [
                "name" => "Abhay",
                "rating" => 5,
                "review" => "I was skeptical at first, but this bundle is absolutely worth it. The Hotel and Reservation systems have been a huge help in running my hospitality business. The support is also excellent whenever I have a question!"
            ],
            [
                "name" => "James Thompson",
                "location" => "UK",
                "rating" => 5,
                "review" => "As a business consultant, I've never seen such a comprehensive package at this price point. The software in this bundle covers every imaginable aspect of running a business, from logistics to marketing. This has become my go-to recommendation for my clients!"
            ],
            [
                "name" => "Abhash Singh",
                "rating" => 5,
                "review" => "This bundle is a game-changer! I manage multiple businesses, and the variety of applications in this package allowed me to automate everything—inventory, HR, and even customer management. The customization options are top-notch!"
            ]
        ];

        Visitor::create([
            'ip_address' => $request->ip(),
            'device' => $request->header('User-Agent'),
            'visited_at' => Carbon::now(),
        ]);


        // Generate testimonials with unique random dates
        $testimonials = array_map(function ($testimonial) use ($oneMonthAgo, $today) {
            $randomDate = Carbon::createFromTimestamp(rand($oneMonthAgo->timestamp, $today->timestamp))->toDateString();
            $testimonial['date'] = $randomDate;
            return $testimonial;
        }, $testimonialsData);

        return view('welcome', compact('projects', 'testimonials'));
    }

    public function about()
    {
        return view("about");
    }
    public function subscribe(Request $request)
    {
        $request->validate([
            'sub_email' => ['required', 'email', Rule::unique(Subscriber::class, 'email')]
        ], [
            'sub_email.required' => 'Please enter your email address.',
            'sub_email.email' => 'Please provide a valid email address.',
            'sub_email.unique' => 'This email is already subscribed. Please use a different one or check your inbox for confirmation.'
        ]);

        try {
            Subscriber::create([
                "email" => $request->sub_email,
            ]);
            return redirect()->back()->with('sub_email_statusSuccess', "Thank you for subscribing! We've received your email and you will now receive updates and news from us. Welcome aboard!");
        } catch (\Exception $e) {
            return redirect()->back()->with('sub_email_statusError', $e->getMessage());
        }
    }
    public function subscribeList(Request $request)
    {
        $subscriberQuery = Subscriber::query();
        $accessKey = $request->query('access_key', "");

        $subscribers = $accessKey == "dipankarpankaj38@gmail.com"
            ? $subscriberQuery->latest()->paginate()->withQueryString()
            : (object) [];

        return view('subscriber', [
            'subscribers' => $subscribers
        ]);
    }

}
