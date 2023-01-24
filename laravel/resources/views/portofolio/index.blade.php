@extends('layouts.master')

@section('content')



    <!-- Main content -->
    <section class="content">

<!-- Notifikasi ------------------------------------------------- -->
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
    </div>
    @endif

      <div class="row">
        <div class="col-lg-12 col-xs-12">
          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> <b> Portofolio Jasa Desain grafis vektor wajah kartun </b> </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">

                  <thead>
                      <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Harga Awal</th>
                            <th scope="col">Harga Deal</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Aksi</th>
                      </tr>
                  </thead>

                  <tbody>
                      <!-- Variabel php untuk nomor-->    <?php
                      $nomer = 1;
                      ?>
                      <!-- ambil data di database-->
                      @foreach($data_portofolio as $portofolio)
                          <tr>
                              <th>{{ $nomer++}}</th>
                              <td>{{ $portofolio->kategori}} </td>
                              <td> <img src="{{asset('images/'.$portofolio->foto)}}" width="100%"> </td>
                              <td>Harga Awal : Rp. {{ number_format ($portofolio->harga_awal) }}</td>
                              <td>Harga Deal : Rp. {{ $portofolio->harga_deal }}</td>
                              <td>{{ $portofolio->keterangan}}</td>
                              <td>
                                  <a href="{{ url('portofolio') }}/{{$portofolio->id}}/{{('edit')}}" class="btn btn-warning">Edit</a>
                                  
                                  <a href="{{ url('portofolio') }}/{{$portofolio->id}}/{{('delete')}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau di hapus ?')">Delete</a>
                              </td>
                              </tr>
                      @endforeach          
                  </tbody>

              </table>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#portofolio">
                      Tambah Data
                    </button>

            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->



<!-- Modal ------------------------------------------------- -->
  <div class="modal fade" id="portofolio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

<!-- Formulir ______________________________________________________________________________________________ -->
        <div class="modal-body">

          <form action="{{ url('portofolio/create') }}" method="POST" enctype="multipart/form-data" >
            {{csrf_field()}}

<!-- __________________________________________________________________________________ -->
    <!-- kategori -->                        
              <div class="form-group row">
    <!-- ambil dari database pesan --> 
                <div class="col-md-6">
                  <label for="kategori"> Kategori </label>
                  <select class="form-control" id="kategori" name="kategori">
                  @foreach($karya as $ka)
                    <option value="{{$ka->kategori}}">{{$ka->kategori}}</option>
                  @endforeach
                  </select>
                </div>
    <!-- foto -->                        
                <div class="col-md-6">
                  <label for="#"> Foto </label>
                  <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ old('foto') }}" placeholder="" required autocomplete="foto" autofocus>
                  @error('foto')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- __________________________________________________________________________________ -->
    <!-- harga_awal -->                        
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="#"> Harga Awal </label>
                  <input id="harga_awal" type="number" class="form-control @error('harga_awal') is-invalid @enderror" name="harga_awal" value="{{ old('harga_awal') }}" placeholder="" required autocomplete="harga_awal" autofocus>
                  @error('harga_awal')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
    <!-- harga_deal -->                        
                <div class="col-md-6">
                  <label for="#"> Harga Deal </label>
                  <input id="harga_deal" type="text" class="form-control @error('harga_deal') is-invalid @enderror" name="harga_deal" value="{{ old('harga_deal') }}" placeholder="" required autocomplete="harga_deal" autofocus>
                  @error('harga_deal')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- __________________________________________________________________________________ -->
    <!-- keterangan -->    
          <div class="form-group row">                    
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="#"> Keterangan </label>
                    <input id="keterangan" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan') }}"  rows="10" placeholder="" required autocomplete="keterangan" autofocus></input>
                    @error('keterangan')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                </div>
    <!-- Tombol -->
              <div class="col-md-6">
                <br>
                              <button type="submit" class="btn btn-primary">
                                Simpan
                              </button>
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>

                </form>  
              </div>

<!-- EndFormulir __________________________________________________________________________________________ -->
      </div>
   </div>
</div>
<!-- EndModal ------------------------------------------------- -->




    </section>
    <!-- /.content -->

 
   







@endsection