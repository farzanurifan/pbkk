<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipeUser extends Model
{
    protected $primaryKey = 'id';
	public $incrementing = false;

	protected $fillable = [
	'tipe_user'
	];
}
