<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Produk;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
         $produk = produk::query()->get();
         $data = [
            'produk' => $produk
         ];
    return view('admins.produk',$data);
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
      Alert::success('Data Berhasil Ditambahkan');
      return redirect()->route('banner');

   }
   public function prosesadproduk(Request $request){
      $data =[
         'judul'=> $request->judul,
         'deskripsi'=> $request->deskripsi,
         'harga'=>$request->harga,
         'stok'=>$request->stok,
      ];
      
      $imagepath = null;
      if($request->hasfile('gambar')){
         $imagepath = $request->file('gambar')->store('image','public');
      }
      $data['gambar'] = $imagepath;

      Produk::query()->create($data);
      Alert::success('Data Berhasil Ditambahkan');
      return redirect()->route('produk');

   }

}
