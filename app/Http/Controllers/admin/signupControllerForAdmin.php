<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        $data->admin_id = $req->mt_rand(0,99999999);
        $data->password = $req->md5(['password']); 

        $data->save();

        if(!empty($data))
        {
            return redirect('/login');
        }
    }
}
