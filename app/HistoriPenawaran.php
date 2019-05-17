<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoriPenawaran extends Model
{
    protected $fillable = [
    	'user_id','lelang_id'
    ];

    public function User()
    {
    	return $this->belongsTo('App\User');
    }

    public function Lelang()
    {
    	return $this->belongsTo('App\Lelang');
    }
}
