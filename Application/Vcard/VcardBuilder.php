<?php
/**
 * Created by PhpStorm.
 * User: Christopher
 * Date: 11/20/2015
 * Time: 7:52 AM
 */

namespace Vcard;


class VcardBuilder implements VcardBuilderInterface {

	private $first_name,
			$last_name,
			$employer,
			$work_phone,
			$home_phone,
			$cell_phone,
			$fax_number,
			$work_address,
			$home_address,
			$notes,
			$phone_numbers = [],
			$addresses     = [];

	private $vcard;

	public function validate() {
		// Loop through all private members and check if they are set;
	}

	public function build() {
		if ( $this->validate() ) {
			return new Vcard();
		}
	}


}