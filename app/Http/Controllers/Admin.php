<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index(){
        return view('/admin/index');
    }
//    中间
    public function main(){
        return view('/admin/main');
    }

//    头部
    public function head(){
        return view('/admin/head');
    }

//        左边
    public function left(){
        return view('/admin/left');
    }
}
