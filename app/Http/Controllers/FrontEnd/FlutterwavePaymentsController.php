<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use KingFlamez\Rave\Facades\Rave as Flutterwave;
use Illuminate\Http\Request;

class FlutterwavePaymentsController extends Controller
{
    // payments page
    public function payments_page(){
        return view("frontend.pages_frontend.payments.flutterwave.create");
    }
}
