<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'user_id';
    //黑名单
    protected $guarded = [];
//    自动时间撮字段
    protected $dateFormat = 'U';
}
