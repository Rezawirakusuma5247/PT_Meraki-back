<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function dashboard_admin() {
        return view('admin.dashboard');
    }
}
