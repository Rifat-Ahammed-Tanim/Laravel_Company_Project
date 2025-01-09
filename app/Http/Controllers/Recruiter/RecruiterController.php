<?php

namespace App\Http\Controllers\Recruiter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecruiterController extends Controller
{
    public function RecruiterAccount()
    {
        return view('frontend.recruiter.recruiter_account');
    }
}
