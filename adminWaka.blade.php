@extends('pages-blank')
@section('isi')
<div class="container">
    <p align="right"><a href="logout" class="btn btn-danger">Logout</a></p>
    <h5 class="card-title">Selamat datang <b>{{session()->get('opr')}}</b> Operator Dokumen Kesiswaan</h5>
    <div class="nav">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="kurikulum" target="isi">Kurikulum</a></li>
            <li class="breadcrumb-item"><a href="kesiswaan" target="isi">Kesiswaan</a></li>
            <li class="breadcrumb-item"><a href="sarana" target="isi">Sarana</a></li>
            <li class="breadcrumb-item"><a href="humas" target="isi">Humas</a></li>
        </ol>
    </div>
    <center><iframe src="" frameborder="0" width="85%" height="850" name="isi"></iframe></center>
</div>
@endsection
