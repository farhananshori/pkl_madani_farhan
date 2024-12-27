<x-layoutcomponent>
     <!-- Table Start -->
     <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Tombol Tambah Data Produk </h6>
                            <div class="m-n2">
                                <a href="{{route('adproduk')}}"><button type="button" class="btn btn-primary m-2">Tambah Produk</button></a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Produk</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Gambar</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Stok</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>jhon@email.com</td>
                                            <td>jhon@email.com</td>
                                            <td>jhon@email.com</td>
                                            <td> <a href="#"><button type="button" class="btn btn-warning m-2">Edit</button></a>
                                            <a href="#"><button type="button" class="btn btn-danger m-2">Hapus</button></a> 
                                         </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->
</x-layoutcomponent>