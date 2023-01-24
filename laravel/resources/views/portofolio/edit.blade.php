@extends('layouts.master')

@section('content')









<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-12">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{url('/')}}"> Home </a></li>
					<li class="breadcrumb-item active"> Edit Data Portofolio </li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Notifikasi ------------------------------------------------- -->
@if(session('sukses'))
<div class="alert alert-success" role="alert">
	{{session('sukses')}}
</div>
@endif

<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<div class="row">

			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="card card-primary">

					<div class="card-header">
						<h3 class="card-title"> Edit Data Portofolio </h3>
					</div>

					<!-- form start -->
					<form action="{{ url('portofolio') }}/{{$portofolio->id}}/{{('update')}}" method="POST" enctype="multharga_awalart/form-data" >
						{{csrf_field()}}
						<div class="card-body">

							<!-- __________________________________________________________________________________ -->
							<!-- kategori -->                        
							<div class="form-group row">
								<div class="col-md-6">
									<label for="#">kategori</label>
									<input id="kategori" type="text" class="form-control @error('kategori') is-invalid @enderror" name="kategori" value="{{ $portofolio->kategori}}" placeholder="" required autocomplete="kategori" autofocus>
									@error('kategori')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								<!-- foto -->                        
								<div class="col-md-6">
									<label for="#">foto</label>
									<input id="foto" type="text" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ $portofolio->foto}}" placeholder="" required autocomplete="foto" autofocus>
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
									<label for="#">harga_awal</label>
									<input id="harga_awal" type="number" class="form-control @error('harga_awal') is-invalid @enderror" name="harga_awal" value="{{ $portofolio->harga_awal}}" placeholder="" required autocomplete="harga_awal" autofocus>
									@error('harga_awal')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								<!-- harga_deal -->                        
								<div class="col-md-6">
									<label for="#">harga_deal</label>
									<input id="harga_deal" type="text" class="form-control @error('harga_deal') is-invalid @enderror" name="harga_deal" value="{{ $portofolio->harga_deal}}" placeholder="" required autocomplete="harga_deal" autofocus>
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
									<label for="#">keterangan</label>
									<input id="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ $portofolio->keterangan}}" placeholder="" required autocomplete="keterangan" autofocus>
									@error('keterangan')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								<br><br><br>
								<!-- Tombol -->
								<div class="col-md-6">
									<br><br>
									<button type="submit" class="btn btn-primary">
										Update
									</button>
								</div>


							</form>

						</div>
						<!-- /.card -->






					</div>
					<!-- /.row -->
				</div><!-- /.container-fluid -->
			</section>
			<!-- /.content -->




















			@stop