<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class reservations extends Model {

	//
    protected $fillable = ['name', 'time', 'email', 'phone', 'proximity'];
}
