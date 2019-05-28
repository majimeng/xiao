<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        echo "销售订单";
    }
    public function detail()
    {
        echo "订单明细";
    }
}
