<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Produk;
use Illuminate\Http\Request;

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
   public function ditelproduk()
   {
    $produk = produk::query()->get();
         $data = [
            'produk' => $produk
         ];
    return view('ecommerce.ditelproduk',$data);
   } 

}
