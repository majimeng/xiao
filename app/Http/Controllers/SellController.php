<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellController extends Controller
{
    public function index()
    {
        echo "销售机会";
    }
    public function after()
    {
        echo "跟踪记录";
    }
    public function offer()
    {
        echo "产品报价";
    }
    public function report()
    {
        echo "项目报备";
    }
}
