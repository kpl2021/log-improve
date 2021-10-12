@include('layouts.header-login')

@section('title', 'Login')

@section('content')


<div class="container px-4 py-5 mx-auto">
    <div class="card card0">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-1">
              <div class="d-flex flex-lg-row flex-column-reverse">
                <div class="card card1">
                  <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-10 my-5">
                      <div class="row justify-content-center px-3 mb-3"> <img src="{{ asset ('assets/img/logo-kemdikbud.png') }}">
                      </div>
                      <h6 class="msg-info">
                        Silahkan masukkan NIK dan Password
                      </h6>
                      <div class="form-group"> <label class="form-control-label text-muted">NIK</label> 
                        <input type="text"id="nik"name="nik"class="form-control"> </div>
                      <div class="form-group"> <label class="form-control-label text-muted">Password</label> 
                        <input type="password" id="psw" name="psw" class="form-control"> </div>
                      <div class="bottom text-center">
                        <div class="row justify-content-center my-3 px-3"> 
                          <a href="index.html" class="btn-block btn-color">Masuk</a>
                        </div>
                      </div> 
                    </div>
                  </div>
                  <div class="bottom text-center mb-5">
                    <p href="#" class="sm-text mx-auto mb-3">Tidak punya akun?
                      <a href="daftar.html">Daftar sekarang</a></p>
                  </div>
                </div>
                <div class="card card2">
                  <div class="my-auto mx-md-2 px-md-5 right">
                    <h3 class="text-white">
                      Kementerian Pendidikan dan Kebudayaan <br> Direktorat Jenderal Kebudayaan <br> Balai Konservasi Borobudur</h3> 
                    <small class="text-white">Jl. Badrawati, Kw. Candi Borobudur, Borobudur, Kec. Borobudur, Magelang, Jawa Tengah 56553</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>

</html>