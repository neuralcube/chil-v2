<?php

namespace App\Http\Controllers;

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

    public function privacyPolicy (): View {
        return view('pages.policies.privacy-policy');
    }

}

