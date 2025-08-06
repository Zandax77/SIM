@extends('pages-blank')
@section('isi')
<div class="container">
    <div class="card">
        <p align="right"><a href="logout" class="btn btn-danger">Logout</a></p>
        <div class="card-body">
          <h5 class="card-title">Selamat datang <b>{{session()->get('opr')}}</b> Operator Dokumen Rekayasa Perangkat Lunak</h5>

          <!-- Default Tabs -->
          <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
            <li class="nav-item flex-fill" role="presentation">
              <button class="nav-link w-100 active" id="profil" data-bs-toggle="tab" data-bs-target="#profil-justified" type="button" role="tab" aria-controls="home" aria-selected="true">Profil</button>
            </li>
            <li class="nav-item flex-fill" role="presentation">
              <button class="nav-link w-100" id="dokumen" data-bs-toggle="tab" data-bs-target="#dokumen-justified" type="button" role="tab" aria-controls="profile" aria-selected="false">Dokumen Jurusan</button>
            </li>
            <li class="nav-item flex-fill" role="presentation">
              <button class="nav-link w-100" id="dokumentasi" data-bs-toggle="tab" data-bs-target="#dokumentasi-justified" type="button" role="tab" aria-controls="contact" aria-selected="false">Dokumentasi</button>
            </li>
          </ul>
          <div class="tab-content pt-2" id="myTabjustifiedContent">
            <div class="tab-pane fade show active" id="profil-justified" role="tabpanel" aria-labelledby="Profil-tab">
              <form action="simpanRpl" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3>Unggah Profil jurusan</h3>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                Pilih dokumen html :
                                <input type="file" name="profil">
                                <button type="submit" class="btn btn-info">Unggah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <iframe src="{{asset('dokumen/rpl.html')}}" frameborder="0" width="100%" height="800"></iframe>
            </div>
            <div class="tab-pane fade" id="dokumen-justified" role="tabpanel" aria-labelledby="Dokumen-tab">

                <div class="modal fade" id="tambahProgram" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3>Unggah Dokumen</h3>
                            </div>
                            <div class="modal-body">
                                <form action="simpanDokumenJurusan" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        Link dokumen :
                                        <input type="text" name="proker" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        Dokumen :
                                        <input type="file" name="file" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        Keterangan :
                                        <input type="text" name="ket" class="form-control">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-success" type="submit">Unggah</button>
                            </div>
                            </form>
                        </div>
                      </div>
                </div>

              <h3>
                <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#tambahProgram">Tambahkan</button>
                Arsip Jurusan</h3>
              <table class="table table-hovered">
                <tr>
                    <th>No</th>
                    <th>Tanggal Unggah</th>
                    <th>Tanggal Ubah</th>
                    <th>Tautan dokumen</th>
                    <th>Salinan dokumen</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="" class="btn btn-warning">Ubah</a>
                        <a href="" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>

              </table>
            </div>
            <div class="tab-pane fade" id="dokumentasi-justified" role="tabpanel" aria-labelledby="dokumentasi-tab">
              <h2>
                <button class="btn btn-info" data-bs-target="#tambah" data-bs-toggle="modal">Tambah</button>
                Dokumentasi Kegiatan
              </h2>
                <table class="table table-hovered">
                    <tr>
                        <th>No</th>
                        <th>Tanggal Unggah</th>
                        <th>Kegiatan</th>
                        <th>Tautan kegiatan</th>
                        <th>Dokumen kegiatan</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="" class="btn btn-warning">Ubah</a>
                            <a href="" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                </table>

                <div class="modal fade" id="tambah" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3>Tambah dokumen kegiatan</h3>
                            </div>
                            <form action="simpanDokumenRpl" method="POST" enctype="multipart/form-data">
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
                            </div>
                            <div class="modal-footer">
                                <button type="submit">Unggah</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          </div><!-- End Default Tabs -->

        </div>
      </div>
</div>
@endsection
