@extends('layouts.header-admin')

@section('title', 'Edit Password Admin')

@section('content')

<div class="wrapper">
@include('layouts.sidebar-admin')

    <div class="main-panel">
    @include('layouts.navbar-admin')

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Password</h4>
                            </div>
                            <div class="content">
                                <div>
                                <form method="POST" autocomplete="on" action = "/admin/posteditpassAdmin">
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
                                            <input type="password" class="form-control" id="pwl" name="pwl" >
                                            <div class="error"><?php if(isset($error)) echo $error;?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="pw">Password Baru</label>
                                            <input type="password" class="form-control" id="pw" name="pw" >
                                            <div class="error"><?php if(isset($error)) echo $error;?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="pw">Ulangi Password Baru</label>
                                            <input type="password" class="form-control" id="cpw" name="cpw" >
                                            <div class="error"><?php if(isset($error)) echo $error;?></div>
                                        </div>
                                        
                                        <a href="/admin/detailAdmin" class="btn btn-danger btn-md" style="margin-top: 15px">Batal</a>
                                        <button type="submit" class="btn btn-primary" name="submit" value="submit" style="margin-top: 15px">Simpan</button>    
                                    </form>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>                
            </div>
        </div>

        @include('layouts.footer-admin')
