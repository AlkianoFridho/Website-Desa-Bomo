<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class OnboardingController extends Controller
{

    public function show()
    {
        return view('onboarding.welcome');
    }

    public function showTutorial()
    {
        return view('onboarding.tutorial');
    }

    public function showCompletion()
    {
        return view('onboarding.completion');
    }
}