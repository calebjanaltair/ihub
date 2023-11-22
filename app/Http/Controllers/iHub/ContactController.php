<?php

namespace App\Http\Controllers\iHub;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Rules\ReCaptcha;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsMail;
use App\Mail\FeedbackMail;
use App\Jobs\SendContactUsEmail;
use App\Jobs\SendFeedbackEmail;


class ContactController extends Controller
{
    public function contactus(Request $request)
    {
        // dd($request->all());
        $request->validate([
            // 'g-recaptcha-response' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required|min:10'
        ]);
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;
        // Simple mail
        // Mail::to('arslanstack@gmail.com')->send(new ContactUsMail($name, $email, $subject, $message));

        // By Job
        SendContactUsEmail::dispatch($name, $email, $subject, $message);
        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
    public function feedbackmail(Request $request)
    {
        $request->validate([
            // 'g-recaptcha-response' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required|min:10'
        ]);

        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;

        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;
        // Simple mail
        // Mail::to('arslanstack@gmail.com')->send(new FeedbackMail($name, $email, $subject, $message));

        // By Job
        SendFeedbackEmail::dispatch($name, $email, $subject, $message);
        return redirect()->back()->with('success', 'Your message has been sent successfully.');

        dd($request->all());
    }
}
