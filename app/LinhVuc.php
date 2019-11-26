<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class LinhVuc extends Model
{
    use SoftDeletes;
    protected $table = 'linh_vuc';

    public function cauhoi(){
        return $this->hasMany('App\CauHoi');
    }
}
