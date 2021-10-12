
<!-- Modal perbulan -->
<div id="classModal6" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="classInfo" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="classModalLabel">Laporan Kinerja Harian</h3>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          ×
        </button>
      </div>
      
      <div class="modal-body">
        <small>
        <table id="classTable" class="table table-bordered" >
          <thead align="center">
            <tr>
              <td><b>No</td>
              <td><b>Tanggal</td>
              <td><b>Uraian Kegiatan</td>
              <td><b>Jumlah</td>
              <td><b>Jenis</td>
              <td><b>Keterangan</td>
              <td><b>Aksi</td>
            </tr>
          </thead>
          <tbody>
          @php
          $no = 1;
          @endphp
          @foreach($logharian6 as $lh)
            <tr>
              <td align="center">{{$no++}}</td>
              <td align="center">{{ $lh->date }}</td>
              <td>{!! nl2br ($lh->uraian) !!}</td>
              <td align="center">{{ $lh->jumlah }}</td>
              <td>{{ $lh->jenis }}</td>
              <td>{!! nl2br ($lh->keterangan) !!}</td>
              <td align="center">
                <a href="/logharian/edit/{{ $lh->id }}" class="btn btn-success btn-sm"><span class="fa fa-pencil-square-o"></span> Edit</a>
                <a href="/logharian/hapus/{{ $lh->id }}" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm"><span class="fa fa-trash-o"></span> Hapus</a>
              </td>
            </tr>
            
          @endforeach
          </tbody>
        </table>
        </small>
      </div>

      <div class="modal-footer">
        <a href="/logharian/print/{{6}}" class="btn btn-warning">
        <span class="fa fa-print"></span> Print 
        </a>
        <button type="button" class="btn btn-primary" data-dismiss="modal">
          Close
        </button>
      </div>

    </div>
  </div>
</div>
