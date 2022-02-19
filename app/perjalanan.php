<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perjalanan extends Model
{
    protected $table='perjalanan';
    protected $fillable = ['id','user_id','nama_perjalanan','tanggal','jam','lokasi','suhu_tubuh'];
    protected $primaryKey ='id';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
