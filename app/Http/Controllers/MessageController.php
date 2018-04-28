<?php

namespace App\Http\Controllers;

use Globe\Globe;
use Illuminate\Http\Request;

class MessageController extends Controller
{
	public function __construct()
	{
		$this->passphrase = env('GLOBE_PASSPHRASE');
		$this->app_id = env('GLOBE_APP_ID');
		$this->app_secret = env('GLOBE_APP_SECRET');
	}
    public function index()
    {
    	$number = '';
    	$message = '';
    	$message = Globe::send($number, $message, $this->passphrase, $this->app_id, $this->app_secret);
    }
}
