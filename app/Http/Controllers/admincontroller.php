<?php

namespace App\Http\Controllers;

use App\Models\Banner;
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
      $banner = Banner::query()->get();
      $data = [
         'banner' => $banner
      ];
    return view('admins.banner',$data);
   } 
   public function produk()
   {
    return view('admins.produk');
   } 
   public function adbanner()
   { 
    return view('admins.adbanner');
   } 
   public function adproduk()
   {
    return view('admins.adproduk');
   } 
   public function prosesadbanner(Request $request){
      $data =[
         'judul'=> $request->judul,
         'descripsi'=> $request->descripsi,
      ];
      
      $imagepath = null;
      if($request->hasfile('gambar')){
         $imagepath = $request->file('gambar')->store('image','public');
      }
      $data['gambar'] = $imagepath;

      Banner::query()->create($data);
      return redirect()->route('banner');

   }

}
