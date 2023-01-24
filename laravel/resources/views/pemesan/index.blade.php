@extends('layouts.master')

@section('content')

<!-- Main content -->
<section class="content">

	<div class="row">
		<div class="col-lg-12 col-xs-12">
			<!-- small box -->
			<div class="small-box bg-primary">
				<div class="inner">
					<h1 align="center"> <b> Jasa Desain Vektor Wajah Kartun </b>  </h1>
				</div>
			</div>
		</div>
	</div>

	<div class="row">

		<!-- ambil data di database-->
		@foreach($data_portofolio as $portofolio)
		<div class="col-lg-3 col-xs-12">
			<!-- small box -->
			<div class="small-box bg-green">
				<div class="inner">
					<h4> <b> {{ $portofolio->kategori}} </b> </h4>

					<p>
						<img src="{{asset('images/'.$portofolio->foto)}}" width="100%">
					</p>
				</div>

				<p class="small-box-footer"> Harga Awal : Rp. {{ number_format ($portofolio->harga_awal) }} </p>
				<p class="small-box-footer"> Harga Deal : Rp. - </p>
				<p class="small-box-footer">  {{ $portofolio->keterangan }} </p>
				<hr>
				<p align="center" >
					<a href="{{url('portofolio')}}/{{$portofolio->id}}/{{('customer')}}" class="btn btn-primary"> Pesan </a>
				</p>
				
				

			</div>




		</div>

		<!-- ./col -->
		@endforeach

	</div>

</section>
<!-- /.content -->

@endsection