<?php
/**
 * Created by PhpStorm.
 * User: Christopher
 * Date: 11/30/2015
 * Time: 3:10 AM
 */

namespace tests\unit;

use App\Http\Controllers\MainController;
use App\Models\Email;

class FormTest extends \TestCase {

	public function testContactPageExists() {
		$this->visit('contact');
	}

	public function testFormHasCorrectFields() {
		$this->visit('contact')
			->see('First Name')
			->see('Last Name')
			->see('Phone Number')
			->see('E-Mail')
			->see('Subject')
			->see('Your Message')
			->see('Submit Email');
	}

	public function testFormHasCaptcha() {
		$this->visit('contact');
	}

	public function testThatFormDataSubmitsToLog() {
		$email_count = Email::count() + 1;

		$email = factory('App\Models\Email')->make();

		$this->visit('contact')
			 ->type($email->first_name, 'first_name')
			->type($email->last_name, 'last_name')
			->type($email->email, 'email')
			->type($email->subject, 'subject')
			->type($email->body, 'body')
			->type($email->phone_number, 'phone' )
			->press('Submit Email');

		$this->assertEquals($email_count, Email::count());
	}

	public function testThatEmailSubmitsToLog() {
		$email_count = Email::count() + 1;

		/** @type Email $email */
		$email = factory('App\Models\Email')->make();

		Email::create($email->toArray());

		$this->assertEquals($email_count, Email::count());
	}
}
