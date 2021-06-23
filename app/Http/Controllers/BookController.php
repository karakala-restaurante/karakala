<?php

namespace App\Http\Controllers;

use App;
use App\Mail\BookingMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
	private $sendTo = ['karakala.restaurante@gmail.com', 'booking@karakala.com'];

	public function send(Request $request)
	{
		if (strpos($request->path(), 'ca') !== false) {
			App::setLocale('ca');
		}

		$this->validate($request, [
			'date' => 'required',
			'hour' => 'required',
			'persons' => 'required',
			'full_name' => 'required',
			'email' => 'required',
			'phone' => 'required',
            'g-recaptcha-response' => 'required|recaptchav3:secure_book,0.5'
		]);

        Storage::disk('local')->append('booking.txt', implode(',', $request->toArray()));

        Mail::to($this->sendTo)->send(new BookingMail($request->all()));

		return view('confirm');
	}
}