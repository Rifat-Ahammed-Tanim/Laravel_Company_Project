<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function CandidateAccount(){
        return view('frontend.candidate.candidate_account');
    }
}
