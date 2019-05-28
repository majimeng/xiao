<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        echo '客户列表';
    }
    public function contacts()
    {
        echo "客户联系人";
    }
    public function serve()
    {
        echo "服务记录";
    }
}
