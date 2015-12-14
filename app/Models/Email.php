<?php
/**
 * Created by PhpStorm.
 * User: Christopher
 * Date: 11/27/2015
 * Time: 3:55 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model{

	/** @var string */
	protected $table = 'emails';
	protected $fillable = [
		'first_name',
		'last_name',
		'email',
		'subject',
		'body',
		'phone',
	];


}