<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
     protected $table = "Goods";
    protected $primaryKey = 'goods_id';
    protected $fillable = [
       'updated_at',
       'created_at',
       'goods_name',
       'cate_id',
       'brand_id',
       'goods_sn',
       'shop_price',
       'market_price',
       'goods_img',
       'goods_thumb',
       'content',
       'goods_number',
       'is_new',
       'is_best',
       'is_hot',
       'is_on_sale',
       'keywords',
       'description',
   ];
    public function getIsNewAttribute($value){
      $a = [1=>'是',0=>'否'];
      return $a[$value];
   }

   public function getIsBestAttribute($value){
      $a = [1=>'是',0=>'否'];
      return $a[$value];
   }

   public function getIsHotAttribute($value){
      $a = [1=>'是',0=>'否'];
      return $a[$value];
   }

   public function getIsOnSaleAttribute($value){
      $a = [1=>'是',0=>'否'];
      return $a[$value];
   }

    public function getShopPriceAttribute($value){
      return $value.'元';
   }
}
