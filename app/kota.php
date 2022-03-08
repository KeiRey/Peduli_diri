<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kota extends Model
{
    protected $table = 'kota';
    protected $fillable = ['id', 'nama_kota'];
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->hasMany('App\User');
    }

}

