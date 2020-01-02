<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class LuotChoi extends Model
{
    use SoftDeletes;
    protected $table = 'luot_choi';

    public function nguoichoi(){
        return $this->belongsto('App\NguoiChoi');
    }

    public function cauhoi(){
        return $this->belongstoMany('App\CauHoi');
    }
}
