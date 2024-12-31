<x-layoutcomponent>
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
               <div class="row g-4">
                   <div class="col-sm-12 col-xl-12">
                       <div class="bg-light rounded h-100 p-4">
                           <h6 class="mb-4"> Edit Produk</h6>
                           <form method="POST" action="{{route('produk-update',['id'=>$produk->id])}}" enctype="multipart/form-data">
                               @csrf
                               <div class="mb-3">
                                   <label for="exampleInputEmail1" class="form-label">Judul</label>
                                   <input type="hidden" name="id" value="{{$produk->id}}">
                                   <input type="Text" class="form-control" name="judul"id="exampleInputEmail1" value="{{ $produk->judul}}"
                                       aria-describedby="emailHelp">
                                   <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                   </div>
                               </div>
                               <div class="mb-3">
                                   <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                                   <input type="Text" class="form-control"  name="deskripsi" id="exampleInputPassword1" value="{{ $produk->deskripsi}}">
                               </div>
                               <div class="mb-3">
                                   <label for="exampleInputPassword1" class="form-label">Gambar</label>
                                   <img src="{{Storage::url($produk->gambar)}}" alt= ""style="width : 200px;" alt=""></td>
                                   <input type="file" class="form-control"  name="gambar" id="exampleInputPassword1">
                               </div>
                               <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Harga</label>
                                <input type="Text" class="form-control"  name="harga"id="exampleInputPassword1" value="{{ $produk->harga,0}}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Stok</label>
                                <input type="number" class="form-control"  name="stok" id="exampleInputPassword1" value="{{ $produk->stok,0}}">
                            </div>
                               <button type="submit" class="btn btn-primary">Simpan</button>
                           </form>
                       </div>
               </div>
           </div>
           <!-- Form End -->
</x-layoutcomponent>