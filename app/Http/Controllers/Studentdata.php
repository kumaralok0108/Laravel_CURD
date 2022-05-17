<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laravel_curd;
class Studentdata extends Controller
{
    function Userdata(Request $req)
    {
        $laravel_curd = New Laravel_curd;
        $laravel_curd->student_name = $req->student_name;
        $laravel_curd->email = $req->email;
        $laravel_curd->phone_number = $req->phone_number;
        $laravel_curd->rollno = $req->rollno;
        $laravel_curd->id_no = $req->id_no;
        $laravel_curd->save();
        return redirect('listUser');
    }
}
