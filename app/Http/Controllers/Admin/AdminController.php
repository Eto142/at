<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    // Show the admin dashboard
    public function index()
    {
        return view('admin1.home');  // Make sure this blade exists: resources/views/admin/dashboard.blade.php
    }
    
}
