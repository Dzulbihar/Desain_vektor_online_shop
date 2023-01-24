@extends('layouts.master')

@section('content')



<div class="pad margin no-print">
	<div class="callout callout-info" style="margin-bottom: 0!important;">
		<h4> Kategori Vektor :</h4>
		<h2 align="center">  <b> {{ $portofolio->kategori}}   </b>   </h2> 
		<h4 align="center">  <b> {{ $portofolio->keterangan}}   </b>   </h4>
	</div>
</div>

<!-- Notifikasi ------------------------------------------------- -->
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
    </div>
    @endif

<!-- Main content -->
<section class="invoice">

	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
		Pesan Sekarang
	</button>

	<br><br><br>
<div class="row">
	
	<div class="col-md-6">
		<img src="{{asset('images/'.$portofolio->foto)}}" width="100%">
	</div>

	<div class="col-md-6">
		<div class="card-body">
			<table id="example1" class="table table-bordered table-stralamated">
				<thead>
					<tr>
						<th> No </th>
						<th> Nama </th>
						<th> Alamat </th>
						<th> Nomor WA </th>
					</tr>
				</thead>
				<tbody>
					<!-- Variabel php untuk nomor-->    <?php
					$nomer = 1;
					?>
					<!-- ambil data di database-->
					@foreach($portofolio->customer as $customer)
					<tr>
						<th> {{ $nomer++}} </th>
						<td> {{$customer->pivot->nama}} </td>
						<td> {{$customer->pivot->alamat}} </td>
						<td> {{$customer->pivot->nomor_wa}} </td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>


<!-- Formulir ______________________________________________________________________________________________ -->
        <div class="modal-body">

          <form action="{{url('portofolio')}}/{{$portofolio->id}}/adddesain" method="POST" enctype="multipart/form-data" >
            {{csrf_field()}}

<!-- __________________________________________________________________________________ -->
<!-- ambil dari database pesan --> 
			<div class="form-group">
			  <label for="customer">Data</label>
			  <select class="form-control" id="customer" name="customer">
				@foreach($vektor as $art)
					<option value="{{$art->id}}">{{$art->pesan}}</option>
				@endforeach
			  </select>
			</div>

<!-- __________________________________________________________________________________ -->
    <!-- nama -->                        
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="#"> Nama </label>
                  <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="" required autocomplete="nama" autofocus>
                  @error('nama')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
    <!-- alamat -->                        
                <div class="col-md-6">
                  <label for="#"> Alamat </label>
                  <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" placeholder="" required autocomplete="alamat" autofocus>
                  @error('alamat')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
<!-- __________________________________________________________________________________ -->

    <!-- nomor_wa -->    
    		  <div class="form-group row">                    
                <div class="col-md-6">
                  <label for="#"> Nomor WA </label>
                  <input id="nomor_wa" type="text" class="form-control @error('nomor_wa') is-invalid @enderror" name="nomor_wa" value="{{ old('nomor_wa') }}" placeholder="" required autocomplete="nomor_wa" autofocus>
                  @error('nomor_wa')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
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


</section>
<!-- /.content -->




@endsection