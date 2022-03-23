<?php

namespace App;

use App\Models\Province;
use App\Models\Village;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'nik',
        'alamat',
        'level',
        'gambar',
        'no_telp', 
        'regency_id',
        'indoregion_provinces_id',
        'indoregion_districts_id', 
        'village_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function perjalanan()
    {
        return $this->hasMany('App\perjalanan');
    }

    public function kota()
    {
        return $this->belongsTo('App\kota');
    }
    
    public function gambar()
    {
    	if(!$this->gambar){
    		return asset('images/default.jpg');
    	}
    	return asset('images/'.$this->gambar);
    }

    public function villages()
    {
        return $this->belongsTo('App\Models\Village', 'indoregion_villages_id');
    }
    public function regencies()
    {
        return $this->belongsTo('App\Models\Regency', 'indoregion_regencies_id');
    }
    public function districts()
    {
        return $this->belongsTo('App\Models\District', 'indoregion_districts_id');
    }
    public function province()
    {
        return $this->belongsTo('App\Models\Province', 'indoregion_provinces_id');
    }

}
