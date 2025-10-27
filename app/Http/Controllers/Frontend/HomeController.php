<?php

namespace App\Http\Controllers\Frontend;
use App\Mail\Thankyou;
use App\Mail\ContactMail;
use App\Models\Blog;
use App\Models\BlogVisitor;
use App\Rules\CustomCaptcha;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use App\Models\Enquiry;

class HomeController extends Controller
{


    public function ContactEnquiryStore(Request $request)
{
    $rules = [
        'full_name' => 'required',
        'subject' => 'required',
        'email' => 'required|email',
        'mobile' => 'required|digits:10',
    ];

    $messages = [
        'full_name.required' => 'Your Full Name is required',
        'subject.required' => 'Your Subject is required',
        'email.required' => 'Email is required',
        'email.email' => 'Email should be a valid email',
        'mobile.required' => 'mobile number field is required.',
        'mobile.digits' => 'mobile number must be exactly 10 digits.',
    ];

    $request->validate($rules, $messages);

    $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        'secret' => env('RECAPTCHA_SECRET_KEY'),
        'response' => $request->input('g-recaptcha-response'),
        'remoteip' => $request->ip(),
    ]);

    $responseBody = $response->json();

    if (!isset($responseBody['success']) || !$responseBody['success']) {
        return response()->json([
            'status' => 'error',
            'message' => 'Captcha verification failed. Please try again.'
        ], 422);
    }


    // Save enquiry as before...
    $enquiry = new Enquiry();
    $enquiry->full_name = $request->full_name;
    $enquiry->subject = $request->subject;
    $enquiry->mobile = $request->mobile;
    $enquiry->email = $request->email;
    $enquiry->message = $request->message;
    $enquiry->save();

    Mail::to('siddhesh.sonavane024@gmail.com')->send(new ContactMail($enquiry));
    Mail::to($request->email)->send(new Thankyou($enquiry));

    return response()->json(['status' => 'success', 'message' => 'Enquiry Sent Successfully']);
}

}
