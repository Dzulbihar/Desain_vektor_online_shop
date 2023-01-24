@extends('layouts.master')

@section('content')




    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profile </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img src="{{asset('adminlte/profile/dzul1.jpg')}}"  width="100%" >

              <h3 class="profile-username text-center"> Ahmad Dzul Bihar </h3>

              <p class="text-muted text-center"> Mahasiswa </p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Programmer</b> 
                </li>
                <li class="list-group-item">
                  <b>Desainer</b> 
                </li>
                <li class="list-group-item">
                  <b>Santri</b> 
                </li>
              </ul>

              <a href="https://bit.ly/dzulbihar_fer27" class="btn btn-primary btn-block"><b>Whats App</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->


        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#datadiri" data-toggle="tab"> Data diri </a></li>
              <li><a href="#pendidikan" data-toggle="tab"> Pendidikan </a></li>
              <li><a href="#foto" data-toggle="tab"> Foto </a></li>
            </ul>

            <div class="tab-content">

<div class="tab-pane active" id="datadiri">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          Data diri
                        </span>
                  </li>
                  <!-- /.timeline-label -->

                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header no-border"><a href="#">Nama Lengkap : </a> Ahmad Dzul Bihar </h3>
                    </div>
                    <div class="timeline-item">
                      <h3 class="timeline-header no-border"><a href="#">Tempat Lahir : </a> Demak </h3>
                    </div>
                    <div class="timeline-item">
                      <h3 class="timeline-header no-border"><a href="#">Tanggal Lahir : </a> 28 Oktober 1998 </h3>
                    </div>
                    <div class="timeline-item">
                      <h3 class="timeline-header no-border"><a href="#">Alamat : </a> Morodemak, Bonang, Demak </h3>
                    </div>
                    <div class="timeline-item">
                      <h3 class="timeline-header no-border"><a href="#">Email : </a> ahmaddzulbihar69@gmail.com </h3>
                    </div>
                    <div class="timeline-item">
                      <h3 class="timeline-header no-border"><a href="#">Nomor WA : </a> 0858-4257-9073 </h3>
                    </div>
                    <div class="timeline-item">
                      <h3 class="timeline-header no-border"><a href="#">Santri : </a> Pondok Pesantren Askhabul Kahfi Semarang </h3>
                    </div>
                    <div class="timeline-item">
                      <h3 class="timeline-header no-border"><a href="#">Mahasiswa : </a> Universitas Wahid Hasyim Semarang </h3>
                    </div>
                  </li>
                  <!-- END timeline item -->

                </ul>

              </div>
              <!-- /.tab-pane -->

<div class="tab-pane" id="pendidikan">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          Pendidikan
                        </span>
                  </li>
                  <!-- /.timeline-label -->

                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header no-border"><a href="#"> 2005 - 2011 : </a> MI Bustanul Huda Morodemak </h3>
                    </div><br>
                    <div class="timeline-item">
                      <h3 class="timeline-header no-border"><a href="#"> 2011 - 2014 : </a> MTs Sunan Barmawi Morodemak </h3>
                    </div><br>
                    <div class="timeline-item">
                      <h3 class="timeline-header no-border"><a href="#"> 2014 - 2017 : </a> SMK Askhabul Kahfi Semarang </h3>
                    </div><br>
                    <div class="timeline-item">
                      <h3 class="timeline-header no-border"><a href="#"> 2018 - Sekarang : </a> Universitas Wahid Hasyim Semarang </h3>
                    </div>

                  </li>
                  <!-- END timeline item -->

                </ul>

              </div>
              <!-- /.tab-pane -->


<div class="tab-pane" id="foto">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">

                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">
                          Foto Kuliah
                        </span>
                  </li>
                  <!-- /.timeline-label -->

                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-camera bg-purple"></i>

                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#"> Teknik Informatika </a> </h3>

                      <div class="timeline-body">
                      	<img src="{{asset('adminlte/profile/1.jpg')}}" width="100%" class="margin">
                      	<img src="{{asset('adminlte/profile/2.jpg')}}" width="100%" class="margin">
                      	<img src="{{asset('adminlte/profile/3.jpg')}}" width="100%" class="margin">
                      	<img src="{{asset('adminlte/profile/4.jpg')}}" width="100%" class="margin">
                      	<img src="{{asset('adminlte/profile/5.jpg')}}" width="100%" class="margin">
                      	<img src="{{asset('adminlte/profile/6.jpeg')}}" width="100%" class="margin">
                      	<img src="{{asset('adminlte/profile/7.jpg')}}" width="100%" class="margin">
                      	<img src="{{asset('adminlte/profile/8.jpg')}}" width="100%" class="margin">
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->

                </ul>

              </div>
              <!-- /.tab-pane -->


            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->

 


@endsection