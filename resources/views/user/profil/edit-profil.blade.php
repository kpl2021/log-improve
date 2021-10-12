@extends('layouts.header-user')

@section('title', 'Log Harian Pegawai')

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
          <h2> Edit Profil</h2>
          <ol>
            <li><a href="/detailKaryawan">Profil</a></li>
            <li>Edit Profil</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <div class="col-xl-8 order-xl-1 center">
          <div class="card bg-secondary shadow">

          <form method="POST" class="md-form">
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
            <input type="hidden" name="id" id="input-first-name" class="form-control form-control-alternative" placeholder="" value="{{$data->id}}">

            <div class="card-header bg-white border-1">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Profil</h3>
                </div>

                <div class="col-4 text-right">
                  <a href="/detailKaryawan" class="btn btn-sm btn-danger">Batal</a>
                  <button  class="btn btn-sm btn-primary" type="submit">Simpan</button>
                </div>

              </div>
            </div>

            <div class="card-body bg-white border-0">
              <form>
                <!-- <div class="col-12 text-center">
                <img src="{{ asset ('assets/img/default-avatar.png') }}" alt="foto profil" width="100" height="100">        
                </div> -->
        
                <!-- <form class="md-form">
                  <div class="file-field">
                    <div class="mb-4">
                      <div class="flash-profile" data-flashdata="">
                      </div>
                    </div>
                    <div class="d-flex justify-content-center">
                      <div class="btn btn-mdb-color btn-rounded float-left">
                        <input type="file">
                      </div>
                    </div>
                  </div>
                </form> -->

                <h6 class="heading-small text-muted mb-4">Informasi Karyawan</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">Nama</label>
                        <input type="text" name="name" id="input-first-name" class="form-control form-control-alternative" placeholder="" value="{{$data->name}}">
                      </div>
                    </div>
                    
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-nik">NIK</label>
                        <input type="text" name="nik" id="input-nik" class="form-control form-control-alternative" placeholder="" value="{{$data->nik}}" readonly>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-notelp">No. Telp</label>
                        <input type="text" name="no_telp" id="input-notelp" class="form-control form-control-alternative" placeholder="" value="@php if ($data->no_telp == null){echo '0';} else {echo $data->no_telp;}@endphp">
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-alamat">Alamat</label>
                        <input type="text" name="address" id="input-alamat" class="form-control form-control-alternative" placeholder="" value="@php if ($data->address == null){echo 'TIDAK ADA DATA';} else {echo $data->address;}@endphp">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-jabatan">Jabatan</label>
                        <input type="text" name="position" id="input-jabatan" class="form-control form-control-alternative" placeholder="" value="@php if ($data->position == null){echo 'TIDAK ADA DATA';} else {echo $data->position;}@endphp" readonly>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-kerja">Unit Kerja</label>
                        <input type="text" name="unit" id="input-kerja" class="form-control form-control-alternative" placeholder="" value="@php if ($data->unit == null){echo 'TIDAK ADA DATA';} else {echo $data->unit;}@endphp" readonly>
                      </div>
                    </div>
                  </div>
                </div>  
              </form>
            </div>
            </form>
          </div>
        </div>  
      </div>
    </section>
  </main><!-- End #main -->
  @include('layouts.footer-user')