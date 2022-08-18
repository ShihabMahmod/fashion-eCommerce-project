<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class catagoryControllerForUser extends Controller
{
    public function index()
    {
        return view('user.shopbycatagory');
    }
}
