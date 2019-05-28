<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Brand;

class BrandsController extends Controller
{

    // 展示页面
    public function index(){
        $brand_model = new Brand;
        $brands = $brand_model->all();
        return  view('/Brands/index',['brands'=>$brands]);
    }

//    添加页面
    public function add(){
        return  view('/Brands/add');
    }

    public function addDO(Request $request){

        if ($request->hasFile('brand_img') ) {
            $this->upload('brand_img');
        }
        $post = $request->all();
        $brand_model = new Brand;
        foreach ($post as $k => $v) {
            $brand_model->$k = $v;
        }
        $brand_model->save();
        success('添加成功');

    }

    public  function upload($file){
        // 判断上传文件是否成功
        if (request()->file($file)->isValid()){
            $photo = request()->file($file);
//            获取文件后缀名
            $extension = $photo->extension($photo);
//            定义一个文件夹名称
            $file_name = date('Ymd');
            $store_result = $photo->store($file_name);
            $output = [
                'code'=>1,
                'extension' => $extension,
                'store_result' => $store_result,
                'font'=>'文件上传成功'

            ];
            return $output;
        }else{
            $output = [
                'code'=>0,
                'font' => '未获取到上传文件或上传过程出错',
            ];
            return $output;
        }
    }


}
