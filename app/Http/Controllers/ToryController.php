<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToryController extends Controller
{
    public function supplier()
    {
        echo "供应商管理";
    }
    public function contacts()
    {
        echo "供应商联系人";
    }
    public function offer()
    {
        echo "供应商报价";
    }
}
