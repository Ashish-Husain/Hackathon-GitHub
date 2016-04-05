<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//this is a simple comment for the git hub version control
class MotherDisease extends Model
{
    protected $table = 'mother_disease';

	protected $fillable = [
		'mother_id',
		'disease_id',
		'situation',
		'date_diagnosed'
	];	
}
