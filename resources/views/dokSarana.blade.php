@extends('pages-blank')
@section('isi')
<div class="container">
    <h3>Dokumen Urusan Sarana</h3>
    <table class="table table-bordered table-hovered datatable">
        <tr>
            <th>No</th>
            <th>Judul dokumen</th>
            <th>Dokumen</th>
            <th>Tgl Unggah</th>
        </tr>
        <?php $no=1;?>
        @foreach ($data as $isi)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$isi->judul}}</td>
            <td>
                @if ($isi->link!="")
                    <a href="{{$isi->link}}" target="isi">Link Dokumen</a>
                @endif
                @if ($isi->dokumen!="")
                    <a href="{{asset('dokumen/'.$isi->dokumen)}}" target="isi">File Dokumen</a>
                @endif

            </td>
            <td>{{$isi->created_at}}</td>
        </tr>
        @endforeach
    </table>
    <center><iframe src="" frameborder="0" name="isi" width="85%" height="850"></iframe></center>
</div>
@endsection
