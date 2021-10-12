@extends('layouts.header-log-user')

@section('title', 'Log Harian Karyawan')

@section('content')

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <div class="logo mr-auto">
        <a href="/karyawan"><img src="{{ asset ('assets/img/logobalai.png') }}" alt="" class="img-fluid"></a>
      </div>
      <!-- .nav-menu -->
      @include('layouts.navbar-user')
      <!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- Konten -->
  <main id="main">
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Log Harian Karyawan</h2>
          <ol>
            <li><a href="/karyawan">Home</a></li>
            <li>Log Harian Karyawan</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-1">
              <form method="POST" action="/logharian/store">
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
                <div class="form-group row">
                  <label for="date"  class="col-sm-2 col-form-label" >Tanggal:</label>
                    <div class="col-sm-3">
                    <input  class="form-control" id="date" name="date">
                    </div>
                </div>

                <div class="form-group row">
                  <label for="uraian" class="col-sm-2 col-form-label" >Uraian Kegiatan:</label>
                  <div class="col-sm-10">
                  <textarea class="form-control" id="uraian" name="uraian" rows="3"></textarea>
                  </div>
                </div>

              <div class="form-group row">
                  <label for="jumlah" class="col-sm-2 col-form-label" >Jumlah:</label>
                  <div class="col-sm-1">
                  <input type="number" min="0" class="form-control" id="jumlah" name="jumlah">
                  </div>
                </div>

              <div class="form-group row">
                  <label for="jenis" class="col-sm-2 col-form-label" >Jenis:</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="jenis" name="jenis">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="saran" class="col-sm-2 col-form-label" >Keterangan:</label>
                  <div class="col-sm-10">
                  <textarea class="form-control" id="saran" rows="3" name="keterangan"></textarea>
                  </div>
                </div>
              
      
                <div class="col-12 text-center mt-4">
                  <a href="/logharian" class="btn btn-danger btn-md">Batal</a>
                  <button type="submit" class="btn btn-primary btn-md">Simpan</button>
                </div>
            </form>  
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->
  @include('layouts.footer-user')