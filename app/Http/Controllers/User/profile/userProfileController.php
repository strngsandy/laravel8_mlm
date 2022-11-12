<?php

namespace App\Http\Controllers\user\profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userProfileController extends Controller
{
    public function index()
    {
        return view('user.dashboard.profile');
    }
}
