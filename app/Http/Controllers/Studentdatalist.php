<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laravel_curd;

class Studentdatalist extends Controller
{
    //
    function List(){
        $data = Laravel_curd::paginate(4);
        return view('studentlist',['laravel_curds'=> $data]);
    }

    function delete($id){
       // echo $id; die('cool');
        $data = Laravel_curd::find($id);
        $data->delete();
        return redirect('listUser');
    }
    function edit($id){
        return Laravel_curd::find($id);
    }
}
