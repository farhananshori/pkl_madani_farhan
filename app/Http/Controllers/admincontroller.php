<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
   public function index()
   {
    return view('welcome');
   } 

   public function hello()
   {
    return view('admins.dasboatd');
   } 

   public function Banner()
   {
    return view('admins.banner');
   } 
   public function produc()
   {
    return view('admins.produc');
   } 
   public function adbanner()
   {
    return view('admins.adbanner');
   } 
}
