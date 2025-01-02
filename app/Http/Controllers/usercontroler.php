<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroler extends Controller
{
    public function landingpage()
   {
    return view('ecommerce.landingpage');
   }  
}
