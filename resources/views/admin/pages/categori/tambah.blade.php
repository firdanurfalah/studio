@extends('admin.layout.main')

@section('content')

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <form action="/categori" method="POST" enctype="multipart/form-data" style="width: 1340px; height: 2000px;">

            @csrf
           
            <div class="row">
               
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 ">
                    <h5 class= "font-weight-bold " style="color: blue;" >Categori </h5>
                    <div class="widget widget-content-area br-1"  style="height: 100%;">
                        
                        <div class="widget-two">
                            
                          
                            <div class="row m-2">
                                   
                                <div class="col-lg-6">
                                    <label for="form-control" style="color: black;">Nama</label>
                                    <input type="hidden" name="idcategori" value="">
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="" value="{{old('nama')}}">
                                    @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <label for="gambar" style="color: black;">Upload Foto</label>
                                    <input type="file" name="gambar" id="gambar" class="form-control @error('gambar') is-invalid @enderror" style="width: 50%; height: 50px;">
                                    @error('gambar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>  
                                    @enderror
                                  
                                </div>
                            </div>
                            
                            <div class="row m-2">
                                   
                                <div class="col-lg-6">
                                    <label for="form-control" style="color: black;">Harga</label>
                                    <input type="hidden" name="idcategori" value="">
                                    <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" placeholder="" value="{{old('harga')}}">
                                    @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-lg-12">
                                    <label for="form-control" style="color: black;"> Deskripsi</label>
                                    <input type="hidden" name="idcategori" value="">
                                    <textarea cols="30" rows="5" class="form-control  @error('deskripsi') is-invalid @enderror" name="deskripsi">{{old('deskripsi')}}</textarea>
                                    @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                             
                         
                            </div>

                         

                        </div>
                        
                        <div class="col-lg-12 mt-3 text-right"> <!-- Menggeser tombol ke kanan -->
                            <!-- Tombol Create ditempatkan di sini -->
                            <button class="btn btn-primary btn-sm" type="submit">SIMPAN & LANJUTKAN</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </form>




        <!-- CONTENT AREA -->

    </div>
</div>
<!--  END CONTENT AREA  -->
@endsection







