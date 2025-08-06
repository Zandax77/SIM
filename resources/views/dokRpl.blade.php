@extends('pages-blank')
@section('isi')
<div class="container">
    <h3>Dokumen Rekayasa Perangkat Lunak (RPL)</h3>
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
                    <a href="{{$isi->link}}">Link</a>
                @endif
                @if ($isi->dokumen!="")
                    <a href="{{isi->dokumen}}">File</a>
                @endif

            </td>
            <td>{{$isi->created_at}}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
