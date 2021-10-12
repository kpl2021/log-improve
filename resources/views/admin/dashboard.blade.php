@extends('layouts.header-admin')

@section('title', 'Dashboard Admin')

@section('content')

<div class="wrapper">
    @extends('layouts.sidebar-admin')

    <div class="main-panel">
    @include('layouts.navbar-admin')


        <!--   konten   -->
        <div class="content">
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card bg-secondary shadow">
                            <div class="card-body">
                                <img src="{{ asset ('assets/img/balai2-editz.png') }}" class="card-img-top" alt="...">
                                <div class="header">
                                    <h4 class="title text-center" style="padding-bottom :15px">Selamat datang!</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer-admin')

        
