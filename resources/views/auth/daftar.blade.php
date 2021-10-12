@extends('layouts.header-daftar')

@section('title', 'Daftar')

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
                    </div>

                    <form  enctype="multipart/form-data" action = "postRegister" method = "Post" >
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
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
                      <div class="form-group">
                        <label for="inputNIK">NIK</label>
                        <input type="text" class="form-control" id="inputNIK" name="nik">
                      </div>
                      <div class="form-group">
                        <label for="inputNama">Nama</label>
                        <input type="text" class="form-control" id="inputNama" name="nama">
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="pw">Password</label>
                          <input type="password" class="form-control" id="pw" name="password">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputpw2">Ulangi Password</label>
                          <input type="password" class="form-control" id="inputpw2" name="conf_password">
                        </div>
                      </div>
                      <div class="bottom text-center">
                        <div class="row justify-content-center my-3 px-3">
                        <button class="btn-block btn-color" type="submit">Daftar</button>
                        </div>
                      </div>
                    </form>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>

</html>
