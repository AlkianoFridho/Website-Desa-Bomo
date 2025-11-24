<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnboardingController extends Controller
{
    public function show()
    {
        return view('onboarding.welcome');
    }
}