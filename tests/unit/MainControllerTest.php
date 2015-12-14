<?php
/**
 * Created by PhpStorm.
 * User: Christopher
 * Date: 12/7/2015
 * Time: 2:57 AM
 */

namespace tests\unit;


class MainControllerTest extends \PHPUnit_Framework_TestCase {

	public function testThatResumeExists() {
		$file = __DIR__ . '/../../public/files/developer-christopherwilson.docx';

		$this->assertTrue(file_exists($file));
	}

	public function testThatAboutPageExists() {
		$this->visit('about');
	}
}
