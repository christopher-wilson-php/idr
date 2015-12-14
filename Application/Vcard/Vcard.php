<?php
/**
 * Created by PhpStorm.
 * User: Christopher
 * Date: 11/20/2015
 * Time: 7:49 AM
 */

namespace cwilson\Vcard;


class Vcard implements VcardInterface{

	private $data = [];

	public function __construct(array $array) {
		$this->data = $array;
		var_dump($array);
	}

	public function validateData() {
		var_dump($this->data);
	}
}