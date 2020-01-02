<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

class NguoiChoi extends Authenticatable implements JWTSubject
{
    use SoftDeletes;
    protected $table = 'nguoi_choi';
    protected $hidden = ['mat_khau'];
    public function luotchoi(){
        return $this->hasMany('App\LuotChoi');
    }
    
     public function getPasswordAttribute()
    {
        return $this->mat_khau;
    }

    public function goicredit(){
        return $this->belongstoMany('App\GoiCredit');
    }

    public function getJWTIdentifier()
    {
    	return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
    	return [];
    }
}
