<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function plan()
    {
        echo "付款计划";
    }
    public function record()
    {
        echo "付款记录";
    }
    public function srecord()
    {
        echo "收票记录";
    }
}
