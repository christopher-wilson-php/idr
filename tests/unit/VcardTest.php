<?php
/**
 * Created by PhpStorm.
 * User: Christopher
 * Date: 12/7/2015
 * Time: 3:03 AM
 */

namespace tests\unit;

use cwilson\Vcard\Vcard;

class VcardTest extends \PHPUnit_Framework_TestCase {

	public function testThatVcardClassExists() {
		$this->assertTrue(class_exists('\\cwilson\\Vcard\\Vcard'));
	}

	public function testThatVcardFileExists() {
		$file = __DIR__ . '/../../Application/Vcard/Vcard.php';

		$this->assertTrue(file_exists($file));
	}

	public function testTrue() {
		$this->assertTrue(true);
	}
}
