<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
public function AdminDashboard(){
    return view('admin.home.dashboard');
    // return view('admin.admin_master');
}
}
