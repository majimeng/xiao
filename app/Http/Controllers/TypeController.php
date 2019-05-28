<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function income()
    {
        echo "费用收入类型";
    }
    public function spending()
    {
        echo "费用开支类型";
    }
    public function bank()
    {
        echo "银行账号管理";
    }
}
