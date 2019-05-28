<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function els()
    {
        echo "其他费用单";
    }
    public function cost(){
        echo "费用支出单";
    }
}
