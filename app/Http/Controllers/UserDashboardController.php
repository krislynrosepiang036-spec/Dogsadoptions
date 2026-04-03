<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function home() {
        return view('landing-page.home');
    }

    public function dashboard() {
        return view('user-dashboard.dashboard');
    }

    public function myAdoptions() {
        return view('user-dashboard.my-adoptions');
    }

    public function community() {
        return view('user-dashboard.community');
    }

    public function dogAdoptions() {
        return view('user-dashboard.dogadoptions');
    }
}