<?php

namespace App\Models;

use \Eloquent;

class Product extends Eloquent {


protected $fillable = [
		'name', 
		'description',
		'price'
	];


	protected $appends = ['url'];


	function getUrlAttribute( $url ) {

		return route('productDetail', $this->id);

	}


	


}