<?php

namespace App\Http\Controllers;

use Globe\Globe;
use Illuminate\Http\Request;

class MessageController extends Controller
{
	protected $passphrase, $app_id, $app_secret;
	
	public function __construct()
	{
		$passphrase = env('GLOBE_PASSPHRASE');
		$app_id = env('GLOBE_APP_ID');
		$app_secret = env('GLOBE_APP_SECRET');
	}

    public function index()
    {
    	$number = '';
    	$message = '';
    	$message = Globe::send($number, $message, $this->passphrase, $this->app_id, $this->app_secret);
    }
}
