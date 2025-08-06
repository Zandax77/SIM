<?php error_reporting(E_ALL && ~E_NOTICE); ?>
@extends('pages-blank')
@section('isi')
<div class="container">

<style>

th {
    text-align: right;
    max-width: 300px;
    min-width: 10px;
    word-wrap: break-word;
}
td {
    max-width: 200px;
    min-width: 10px;
	word-wrap: break-word;
}

</style>

    <div class="card">
        <p align="right"><a href="logout" class="btn btn-danger">Logout</a></p>
        <div class="card-body">
          <h5 class="card-title">Selamat datang <b>{{session()->get('opr')}}</b> Operator Dokumen Sarana</h5>


              <h2>
                <button class="btn btn-info" data-bs-target="#tambah" data-bs-toggle="modal">Tambah</button>
                Dokumen Sarana
              </h2>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Unggah</th>
                        <th>Kegiatan</th>
                        <th>Tautan kegiatan</th>
                        <th>Dokumen kegiatan</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; ?>
                    @foreach ($data as $isi)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$isi->created_at}}</td>
                        <td>{{$isi->judul}}</td>
                        <td><a href="{{$isi->link}}" target="isi">{{$isi->link}}</a></td>
                        <td><a href="{{asset('dokumen/'.$isi->dokumen)}}" target="isi">{{$isi->dokumen}}</a></td>
                        <td>{{$isi->keterangan}}</td>
                        <td>
                            <a href="hapusDokumenSarana/{{$isi->id}}" class="btn btn-danger">
                                Hapus
                            </a>
                            <a href="ubahDokumenSarana/{{$isi->id}}" class="btn btn-warning">
                                Ubah
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="modal fade" id="tambah" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3>Tambah dokumen kegiatan</h3>
                            </div>
                            <form action="simpanDokumenSarana" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                @csrf
                                <div class="form-group">
                                    Kegiatan :
                                    <input type="text" name="kegiatan" class="form-control">
                                </div>
                                <div class="form-group">
                                    Tautan dokumentasi :
                                    <input type="text" name="tautan" class="form-control">
                                </div>
                                <div class="form-group">
                                    file dokumentasi :
                                    <input type="file" name="file" class="form-control">
                                </div>
                                <div class="form-group">
                                    Keterangan :
                                    <input type="text" name="keterangan" class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit">Unggah</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

          <center><iframe src="" frameborder="0" name="isi" width="85%" height="850"></iframe></center>
        </div>

      </div>

</div>
@endsection
