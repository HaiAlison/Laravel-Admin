<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class GoiCredit extends Model
{
    use SoftDeletes;
    protected $table = 'goi_credit';

    public function nguoichoi(){
        return $this->belongstoMany('App\NguoiChoi');
    }
    
}
