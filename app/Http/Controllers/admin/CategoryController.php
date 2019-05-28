<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    // 展示页面
    public function index(){
//        $brand_model = new Brand;
//        $brands = $brand_model->all();
        return  view('/Brands/index',['brands'=>$brands=1]);
    }

//    添加页面
    public function add(){
        return  view('/Brands/add');
    }
}
