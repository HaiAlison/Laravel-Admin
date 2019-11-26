<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class NguoiChoi extends Model
{
    use SoftDeletes;
    protected $table = 'nguoi_choi';
    
    public function luotchoi(){
        return $this->hasMany('App\LuotChoi');
    }

    public function goicredit(){
        return $this->belongstoMany('App\GoiCredit');
    }
}
