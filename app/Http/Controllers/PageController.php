<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    //
    public function index(): View
    {
        return view('pages.index');
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function contact(): View
    {
        return view('pages.contact');
    }

    public function career(): View
    {
        return view('pages.career');
    }

    public function complexCare(): View
    {
        return view('pages.complex-care');
    }

    public function liveInCare(): View
    {
        return view('pages.live-in-care');
    }

    public function homeCare(): View
    {
        return view('pages.home-care');
    }

    public function privateCare(): View
    {
        return view('pages.private-care');
    }

    public function oneToOneCare(): View
    {
        return view('pages.one-to-one-care');
    }

    public function supportedLivingService(): View
    {
        return view('pages.supported-living-service');
    }

    public function privacyPolicy(): View
    {
        return view('pages.policies.privacy-policy');
    }

    public function contactStore()
    {
        // Validate the form data
        $validatedData = request()->validate([
            'firstname' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:20',
            'message' => 'required|string|max:5000',
        ]);

        // Prepare the details for the email
        $details = [
            'firstname' => $validatedData['firstname'],
            'surname' => $validatedData['surname'],
            'email' => $validatedData['email'],
            'telephone' => $validatedData['telephone'],
            'message' => $validatedData['message'],
        ];

        try {
            // Attempt to send the email
            Mail::to('hr@chil.care')->send(new ContactFormMail($details));

            // If successful, redirect with a success message
            return redirect('/')->with('status', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            // If there is an error, redirect with an error message
            return redirect('/contact')->with('status', 'Sorry, there was an error sending your message. Please try again later.');
        }
    }
}
