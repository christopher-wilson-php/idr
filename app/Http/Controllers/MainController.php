<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View,
	App\Models\Email,
	Illuminate\Mail\Mailer as Mail;

class MainController extends Controller{

	private $resume_file = 'files/developer-christopherwilson.docx';

	/**
	 * Show About Page
	 *
	 * @return Response
	 */
	public function showAboutPage() {
		View::make('about');
	}


	/**
	 * Show Placeholder Page
	 *
	 * @return Response
	 */
	public function showPlaceholder() {
		return view('placeholder', ['title' => 'Placeholder']);
	}

	public function showPlaceholderPage() {
		$data = [
			'title' => 'Portolio Placeholder Page'
		];

		return view('placeholder', $data);
	}

	/**
	 * Show Resume
	 *
	 * @return Response
	 */
	public function showResume() {
		$file = 'files/developer-christopherwilson.docx';

		return response()->download($file);
	}

	/**
	 * Show Contact Page
	 *
	 * @return Response
	 */
	public function showContactPage() {
		return view('contact');
	}


	/**
	 * Submit Contact Form
	 *
	 * @var Request $request
	 * @return Response
	 */
	public function submitContactForm(Request $request) {
		$data = '';
		Mail::send(['text' => 'view'], $data, function ( $message ) {

		} );
		Email::create($request->all());
	}
}