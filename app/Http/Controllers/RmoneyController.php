<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RmoneyController extends Controller
{
    public function plan()
    {
        echo "回款计划";
    }
    public function record()
    {
        echo "回款记录";
    }
    public function srecord()
    {
        echo "开票记录";
    }

}
