<?php

namespace App\Http\Controllers;

use App\Events\QuoteStarted;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function start()
    {
        $event = new QuoteStarted(uniqid());
        event($event);
    }
}
