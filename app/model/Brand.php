<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = "brand";
    protected $primaryKey = 'brand_id';
    protected $fillable = [
       'brand_name',
       'updated_at',
       'created_at',
       'brand_url',
       'brand_logo',
       'brand_desc',
       'is_show',
   ];
   // public function getIsShowAttribute($value)
   //  {
   //      $a = [1=>'√',0=>'×'];
   //      return $a[$value];
   //  }
   //
   public function getIsShowAttribute($value){
      $a = [1=>'是',0=>'否'];
      return $a[$value];
   }

}
