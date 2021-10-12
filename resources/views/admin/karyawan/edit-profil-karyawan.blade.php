@extends('layouts.header-admin')

@section('title', 'Edit Profil Karyawan')

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
                                <h4 class="title">Edit Data Karyawan</h4>
                            </div>
                            <div class="content">
                            
                                <form method="post" action="/admin/karyawan/update/{{ $karyawan->id }}">
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
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>NIK</label>
                                                <input type="text" name="nik" class="form-control" placeholder="NIK" value="{{ $karyawan->nik }}">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No Telp</label>
                                                <input type="text" name="no_telp" class="form-control" placeholder="No Telp" value="{{ $karyawan->no_telp }}">
                                            </div>
                                        </div> 
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" name="name" placeholder="Nama" value="{{ $karyawan->name }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" class="form-control" name="address" placeholder="Alamat" value="{{ $karyawan->address }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Pangkat/Golongan</label>
                                                <input type="text" class="form-control" name="golongan" placeholder="Pangkat/Golongan" value="{{ $karyawan->golongan }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Jabatan</label>
                                                <input type="text" class="form-control" name="position" placeholder="Jabatan" value="{{ $karyawan->position }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Unit Kerja</label>
                                                <input type="text" class="form-control" name="unit" placeholder="Unit Kerja" value="{{ $karyawan->unit }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 text-right">
                                    <a href="/admin/tablekaryawan" class="btn btn-danger btn-md">Batal</a>
                                    <button class="btn btn-primary btn-md">Simpan</button></div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>

        @include('layouts.footer-admin')