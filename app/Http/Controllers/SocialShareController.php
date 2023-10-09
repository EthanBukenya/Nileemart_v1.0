<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Share;

class SocialShareController extends Controller
{
    public function index(){
        Share::page('https://smaster.live/');
    }
}
