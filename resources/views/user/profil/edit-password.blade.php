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
          <h2> Edit Password</h2>
          <ol>
            <li><a href="/detailKaryawan">Profil</a></li>
            <li>Edit Password</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <div class="card bg-secondary shadow">
          <div class="card-header bg-white border-1">
            <div class="card">
              <h3 class="card-header">Edit Password</h3>
                <div class="card-body">
                <form method="POST" autocomplete="on" action = "/posteditpass">
                  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                  @csrf
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    <div class="form-group">
                      <label for="pw">Password Lama</label>
                      <input type="password" class="form-control" id="pwl" name="pwl" placeholder="Password Lama">
                        <div class="error"><?php if(isset($error)) echo $error;?>
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="pw">Password Baru</label>
                      <input type="password" class="form-control" id="pw" name="pw" placeholder="Password Baru">
                        <div class="error"><?php if(isset($error)) echo $error;?>
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="cpw">Ulangi Password Baru</label>
                      <input type="password" class="form-control" id="cpw" name="cpw" placeholder="Ulangi Password Baru">
                        <div class="error"><?php if(isset($error)) echo $error;?>
                        </div>
                    </div>
                    <br>
                    <a href="/detailKaryawan" class="btn btn-danger btn-md">Batal</a>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                  </form>
                </div>
              </div>
            </div>
          </div>     
        </div>
      </section>
    </main><!-- End #main -->
    @include('layouts.footer-user')