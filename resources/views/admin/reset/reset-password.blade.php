@extends('layouts.header-admin')

@section('title', 'Reset Password Karyawan')

@section('content')

<div class="wrapper">
@include('layouts.sidebar-admin')

    <div class="main-panel">
    @include('layouts.navbar-admin')

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tabel Data Karyawan</h4>
        
                                <div class="row" style="margin-top: 10px">
                                    <div class="col-md-2">
                                        <label>Show</label>
                                        <select class="custom-select custom-select-sm form-control form-control-sm" name="table_member_length">
                                            <option value="10">10</option>
                                            <!-- <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="75">75</option>
                                            <option value="100">100</option>  -->
                                        </select>
                                        <label>Entries</label>
                                    </div>

                                    <form class="col-md-3" action="/admin/resetPassword" method="GET" role="search">
                                    {{ csrf_field() }}
                                    <!-- <div class="col-md-3"> -->
                                        <label>Cari</label>
                                        <input type="text" name="search" class="form-control form-control-sm"style="border-radius:5px"  placeholder="Cari di sini">
                                    <!-- </div> -->
                                    </form>
                                </div>
                            </div>
                            
                            <div class="content table-responsive table-full-width">
                            
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
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th class="text-center">No</th>
                                        <th class="text-center">NIK</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Aksi</th>
                                    </thead>
                                    <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach($karyawan as $k)
                                        <tr>
                                            <td align="center">{{ $no++ }}</td>
                                            <td>{{ $k->nik }}</td>
                                            <td>{{ $k->name }}</td>
                                            <td align="center">
                                                <a href="/admin/getresetPassword/{{ $k->id }}" onclick="return confirm('Apakah Anda yakin ingin mereset password pada data ini?')" class="btn btn-warning btn-sm"><span class="fa fa-pencil-square-o"></span> Reset Password</a></td>
                                        </tr> 
                                    @endforeach                                       
                                    </tbody>
                                </table>
                                
                            </div>
                        

                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <div id="table_member_pagenite" class="dataTables_pagenites paging_simple_numbers">
                                        <!-- <ul class="pagination">
                                            <li id="table_member_prev" class="pagenite_button page_item prev disabled">
                                                <a class="page-link" href="#" data-dt-idx="0" tabindex="0">Prev</a>
                                            </li>
                                            <li class="pagenite_button page-item active">
                                                <a class="page-link" href="#" data-dt-idx="1" tabindex="0">1</a>
                                            </li>
                                            <li id="table_member_next" class="pagenite_button page_item next disabled"> 
                                                <a class="page-link" href="#" data-dt-idx="2" tabindex="0">Next</a>
                                            </li>                                        
                                        </ul> -->
                                        <div class="card">
                                            <div class="d-flex justify-content-center">
                                            {!! $karyawan->links() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footer-admin')
