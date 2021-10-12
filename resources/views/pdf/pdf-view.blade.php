<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
	<style>
	table{
		border-collapse: collapse;
		}
	td, tr, th{
            border:1px solid #000000;
        }

	.{
		font-size:11;
	}
	</style>
	
</head>
<body>
 
	<center>
 
		<h3>LAPORAN KINERJA HARIAN</h3>
		<h4>Sasaran Kinerja Pegawai {{$tahun}}</h4>
		<h4>Bulan : {{$bulan}}</h4>
 
	</center>
 
	<table  style="width: 100%" align="center">
	
		<tr align="center">
			<th width="2%" align="center"> No</th>
			<th width="48%" align="center"> Pejabat Penilai</th>
			<th width="2%" align="center"> No</th>
			<th width="48%" align="center"> Pegawai Non PNS yang Dinilai</th>
		</tr>

		@php
		$no = 1;
		@endphp
		@foreach($karyawan as $k)

		<tr>
			<td align="center">1</td>
			<td> Nama &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: Khanifudin Malik, S. Si., M. A.</td>
			<td align="center">1</td>
			<td>Nama &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $k->name }}</td>
		</tr>
		
		<tr>
			<td align="center">2</td>
			<td> NIP&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 198101212009121001</td>
			<td align="center">2</td>
			<td> NIP&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: -</td>
		</tr>
		
		<tr>
			<td align="center">3</td>
			<td> Pangkat/Gol. Ruang 		: IV/a</td>
			<td align="center">3</td>
			<td> Pangkat/Gol. Ruang 		: -</td>
		</tr>
		
		<tr>
			<td align="center">4</td>
			<td> Jabatan &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: Kasubag Tata Usaha</td>
			<td align="center">4</td>
			<td> Jabatan &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $k->position }}</td>
		</tr>
		
		<tr>
			<td align="center">5</td>
			<td> Unit Kerja &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: Balai Konservasi Borobudur</td>
			<td align="center">5</td>
			<td> Unit Kerja &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $k->unit }}</td>
		</tr>
		@endforeach
	</table><br><br>
	
	<table style="width: 100%" align="center">
		<tr>
			<th  style="align:center"> No</th>
			<th  style="align:center"> Tanggal</th>
			<th  style="align:center"> Uraian Kegiatan</th>
			<th  style="align:center"> Jumlah</th>
			<th  style="align:center"> Jenis</th>
		</tr>

		@php
		$no = 1;
		@endphp
		@foreach($logharian as $lh)

		<tr>
			<td align="center">{{ $no++ }}</td>
			<td> {{ $lh->date }}</td>
			<td> {!! nl2br ($lh->uraian) !!}</td>
			<td align="center">{{ $lh->jumlah }}</td>
			<td>{{ $lh->jenis }}</td>
		</tr>
		@endforeach
	</table><br><br>
	
	<div class="container-fluid" style="width: 100%">
		<div class="row">
			<div class="col-md-6">
				<p>Pejabat Penilai,<br>
				Kasubag Tata Usaha  
				&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
				&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				
				Borobudur, {{$tanggal}}
				<br><br><br><br><br>
				<u>Khanifudin Malik, S. Si., M. A.</u>
				&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
				&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
				
				@foreach($karyawan as $k)
				{{$k->name}}
				@endforeach
				<br>
				NIP 198101212009121001
				</p><br/>
			</div>
			
			<!-- <div class="col-md-6">
				<br>
				<p>Borobudur, Date() <br>
				<br><br><br><br>
				@foreach($karyawan as $k)
				{{$k->name}}
				@endforeach
				</p>
			</div> -->
		</div>
	</div>
 
</body>
</html>
