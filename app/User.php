<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
   	protected $table = 'users';
	protected $primaryKey = "id";
	public $timestamps = false;

	const CREATED_AT = "created_at";
	const UPDATED_AT = "last_update";
}
