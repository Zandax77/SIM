@extends('pages-blank')
@section('isi')
<div class="container">
    <h2>
        <button class="btn btn-info" bs-data-toggle="modal" bs-data-target="#tambah">Tambah</button>
        Data Guru
    </h2>
    <table class="table table-bordered table-hovered">
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Lahir</th>
            <th>Gelar</th>
            <th>Foto</th>
            <th>Status</th>
            <th>Serdik</th>
            <th>Aksi</th>
        </tr>
        <?php
            $no=1;
            @foreach ($data as $isi)
        ?>
        <tr>
            <td></td>
            <td>{{$isi->nip}}</td>
            <td>{{$isi->nama}}</td>
            <td>{{$isi->lahir}}</td>
            <td>{{$isi->agama}}</td>
            <td><img src="{{asset('images/'.$isi->foto)}}" width="50" height="60" alt=""></td>
            <td>{{$isi->status}}</td>
            <td>
                <a href="ubahGuru/{{$id}}" class="btn btn-warning">Ubah</a>
                <a href="hapusGuru/{{$id}}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

    <div class="modal fade" id="tambah" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Tambah Guru</h3>
                </div>
                <form action="simpanGuru" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="modal-body">
                    <div class="form-group">
                        NIP :
                        <input type="text" name="nip" class="form-control">
                    </div>
                    <div class="form-group">
                        Nama :
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        Tgl.Lahir :
                        <input type="date" name="lahir" class="form-control" required>
                    </div>
                    <div class="form-group">
                        Agama :
                        <select name="agama" id="" class="form-control" required>
                            <option value=""></option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                        </select>
                    </div>
                    <div class="form-group">
                        Foto :
                        <input type="file" name="foto" class="form-control">
                    </div>
                    <div class="form-group">
                        Status kepegawaian :
                        <select name="status" id="">
                            <option value=""></option>
                            <option value="PNS">PNS</option>
                            <option value="PPPK">PPPK</option>
                            <option value="GTT">GTT</option>
                        </select>
                    </div>
                    <div class="form-group">
                        Serdik :
                        <select name="serdik" id="">
                            <option value=""></option>
                            <option value="Sudah">Sudah</option>
                            <option value="Belum">Belum</option>
                        </select>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
