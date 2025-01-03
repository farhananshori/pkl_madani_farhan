<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Produk;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class usercontroler extends Controller
{
    public function landingpage()
   {
    $banner = Banner::query()->get();
    $produk = Produk::query()->get();
    $data = [
       'produk' => $produk,
       'banner' => $banner
    ];
    return view('ecommerce.landingpage',$data);
   }  
   public function ditelproduk(Request $request)
   {
   //ambil produk untuk di edit
   $produk_data = produk::where('id',$request->id)->first();
   //data tidak ada di database
   if($produk_data == null){
      Alert::error('Data tidak ditemukan');
      return redirect(route('produk'));
   }
   $data = [
      'produk' =>$produk_data
   ];
   Alert::success('Data ditemukan');
    return view('ecommerce.ditelproduk',$data);
   } 
  
   
  
}
