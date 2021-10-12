@extends('layouts.header-admin')

@section('title', 'Edit Profil Admin')

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
                                <h4 class="title">Edit Profil</h4>
                            </div>
                            <div class="content">
                                <form method="POST">
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
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>NIK</label>
                                                <input type="text" name="nik" class="form-control" placeholder="" value="{{$data->nik}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No Telp</label>
                                                <input type="text" name="no_telp" class="form-control" placeholder="No Telp" value="{{$data->no_telp}}">
                                            </div>
                                        </div> 
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" name="name" class="form-control" placeholder="" value="{{$data->name}}">
                                            </div>
                                        </div>  
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" name="address" class="form-control" placeholder="Alamat" value="{{$data->address}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Pangkat/Golongan</label>
                                                <input type="text" name="golongan" class="form-control" placeholder="" value="{{$data->golongan}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Jabatan</label>
                                                <input type="text" name="position" class="form-control" placeholder="" value="{{$data->position}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Unit Kerja</label>
                                                <input type="text" name="unit" class="form-control" placeholder="" value="{{$data->unit}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 text-right">
                                    <a href="/admin/detailAdmin" class="btn btn-danger btn-md">Batal</a>
                                    <button type="submit" class="btn btn-primary btn-md">Simpan</button></div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footer-admin')
