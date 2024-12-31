<x-layoutcomponent>
     <!-- Table Start -->
     <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Tombol Tambah Data Banner </h6>
                            <div class="m-n2">
                                <a href="{{route('adbanner')}}"><button type="button" class="btn btn-primary m-2">Tambah data</button></a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Banner Table</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Gambar</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($banner as $urutan => $data)
                                        <tr>
                                            <th scope="row">{{$urutan+1}}</th>
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->descripsi}}</td>
                                            <td><img src="{{Storage::url($data->gambar)}}" alt= ""style="width : 200px;"></td>
                                            <td> <a href="{{ route('banner-edit',['id'=>$data->id])}}"><button type="button" class="btn btn-warning m-2">Edit</button></a>
                                            <a href="{{ route('banner-delete',['id'=>$data->id])}}"><button type="button" class="btn btn-danger m-2">Hapus</button></a> 
                                         </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->
</x-layoutcomponent>