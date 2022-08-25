<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\admininfo_tbl;

class signupControllerForAdmin extends Controller
{
    public function index()
    {
        return view('admin.signup');
    }
    public function saveData(Request $req)
    {
        $data = new admininfo_tbl;

        $data->name     = $req['name'];
        $data->email    = $req['email'];
        $data->admin_id = Str::random(20);
        $data->password = $req['password']; 

        $data->save();

        if(!empty($data))
        {
            return redirect('/login');
        }
    }
}
