<?php

namespace App\Mail;

use App\Token;

use Illuminate\Mail\Mailable;

class BookingMail extends Mailable
{
	/**
	 * @var data
	 */
	public $data;

	/**
	 * BookingMail constructor.
	 *
	 * @param $data
	 */
	public function __construct($data)
	{
		$this->data = $data;
	}

	/**
	 * Build the message.
	 *
	 * @return $this
	 */
	public function build()
	{
		return $this->view('mails.booking');
	}
}