@extends('layouts.header-index-user')

@section('title', 'Log Harian Karyawan')

@section('content')
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <div class="logo mr-auto">
        <a href="/karyawan"><img src="{{ asset ('assets/img/logobalai.png') }}" alt="" class="img-fluid"></a>
      </div>
      <!-- .nav-menu -->
      @include('layouts.navbar-index-user')
      <!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
        <div class="col-md-12" >
          <div class="hero-img">
          <img src="assets/img/balai2-edit.png">
          </div>
        </div>
  </section><!-- End Hero -->

  <!-- Bagian set taun -->
  <section id="clients" class="clients clients">
    <div class="container">
      <form>
        <div class="form-group row">
          <label for="date"  class="col-sm-9 col-form-label text-lg-right">Tahun:</label>
            <div class="col-sm-2">
            <select class="custom-select custom-select-sm form-control form-control-sm" name = "tahun" id="tahun">
              @foreach($tahun as $th)
              @if($th->year == $year)
              <option id="{{ $th->year }}" selected value="{{ $th->year }}">{{ $th->year }}</option> 
              @elseif($th->year != $year)
              <option id="{{ $th->year }}" value="{{ $th->year }}">{{ $th->year }}</option> 
              @endif
              @endforeach
            </select>
            </div>
            <button href="/karyawan" class="btn btn-md btn-primary">Set</button>
        </div>
      </form>
    </div>
  </section><!-- End Clients Section -->

  <script type="text/javascript">
 window.onload = function(){
   $("#tahun").change(function () {
     var ambiltahun = $("#th"+this.value).data('year');
     $("#year").val(ambiltahun);
   });
}
        </script>

  <!-- Konten -->
  <main id="main">
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

      @csrf
              @if (session('error'))
                      <div class="alert alert-danger">
                          {{ session('error') }}
                      </div>
                  @endif
                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                  @if (session('success'))
                      <div class="alert alert-success">
                          {{ session('success') }}
                      </div>
                  @endif

        <div class="section-title" data-aos="fade-up">
          <h2>Log Harian</h2>
          <p>Log harian karyawan berdasarkan bulan</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-toggle="modal" data-target="#classModal" action="/tablelogharian">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Januari</a></h4>
              <p class="description">Log harian karyawan bulan Januari</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-toggle="modal" data-target="#classModal2">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Februari</a></h4>
              <p class="description">Log harian karyawan bulan Februari</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-toggle="modal" data-target="#classModal3">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Maret</a></h4>
              <p class="description">Log harian karyawan bulan Maret</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-toggle="modal" data-target="#classModal4">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">April</a></h4>
              <p class="description">Log harian karyawan bulan April</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 mt-4" data-toggle="modal" data-target="#classModal5">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4 class="title"><a href="">Mei</a></h4>
                <p class="description">Log harian karyawan bulan Mei</p>
              </div>
            </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 mt-4" data-toggle="modal" data-target="#classModal6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Juni</a></h4>
              <p class="description">Log harian karyawan bulan Juni</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 mt-4" data-toggle="modal" data-target="#classModal7">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Juli</a></h4>
              <p class="description">Log harian karyawan bulan Juli</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 mt-4" data-toggle="modal" data-target="#classModal8">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Agustus</a></h4>
              <p class="description">Log harian karyawan bulan Agustus</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 mt-4" data-toggle="modal" data-target="#classModal9">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">September</a></h4>
              <p class="description">Log harian karyawan bulan September</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 mt-4" data-toggle="modal" data-target="#classModal10">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Oktober</a></h4>
              <p class="description">Log harian karyawan bulan Oktober</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 mt-4" data-toggle="modal" data-target="#classModal11">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">November</a></h4>
              <p class="description">Log harian karyawan bulan November</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 mt-4" data-toggle="modal" data-target="#classModal12">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Desember</a></h4>
              <p class="description">Log harian karyawan bulan Desember</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->
  </main><!-- End #main -->
  @include('user.log.site-show',  ['logharian' => $logharian])
  @include('user.log.site-show2',  ['logharian2' => $logharian2])
  @include('user.log.site-show3',  ['logharian3' => $logharian3])
  @include('user.log.site-show4',  ['logharian4' => $logharian4])
  @include('user.log.site-show5',  ['logharian5' => $logharian5])
  @include('user.log.site-show6',  ['logharian6' => $logharian6])
  @include('user.log.site-show7',  ['logharian7' => $logharian7])
  @include('user.log.site-show8',  ['logharian8' => $logharian8])
  @include('user.log.site-show9',  ['logharian9' => $logharian9])
  @include('user.log.site-show10',  ['logharian10' => $logharian10])
  @include('user.log.site-show11',  ['logharian11' => $logharian11])
  @include('user.log.site-show12',  ['logharian12' => $logharian12])
  
  @include('layouts.footer-index-user')

  