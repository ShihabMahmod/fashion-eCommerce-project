<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class shopControllerForUser extends Controller
{
    public function index()
    {
        return view('user.shop');
    }
}
