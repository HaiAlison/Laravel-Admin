<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\ChiTietLuotChoi;
class CauHoi extends Model
{	
	use SoftDeletes;
	protected $table='cau_hoi';
   public function linhVuc()
   {
   	return $this->belongsTo('App\LinhVuc');
   }
   public function cauHoi()
    {
    	return $this->belongsToMany('App\ChiTietLuotChoi');
    }
}
