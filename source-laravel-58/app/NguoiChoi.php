<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\LichSuMuaCredit;
use App\LuotChoi;
class NguoiChoi extends Model
{
	use SoftDeletes;
    //
    protected $table='nguoi_choi';
    public function lsMuaCredit()
    {
    	return $this->hasMany('App\LichSuMuaCredit','nguoi_choi_id','id');
    }
    public function luotChoi()
    {
    	return $this->hasMany('App\LuotChoi');
    }
}
