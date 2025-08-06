@extends('pages-blank')
@section('isi')
<div class="container">

    <div class="row" align="center">

    <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Status Guru</h5>

            <!-- Pie Chart -->
            <canvas id="pieChart1" style="max-height: 400px;"></canvas>
            <script>
              document.addEventListener("DOMContentLoaded", () => {
                new Chart(document.querySelector('#pieChart1'), {
                  type: 'pie',
                  data: {
                    labels: [
                      'PNS',
                      'PPPK',
                      'GTT'
                    ],
                    datasets: [{
                      label: 'Status guru',
                      data: [
                        {{$pns}},{{$pppk}},{{$gtt}}
                      ],
                      backgroundColor: [
                        'rgb(255, 205, 86)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 99, 132)'
                      ],
                      hoverOffset: 4
                    }]
                  }
                });
              });
            </script>
            <!-- End Pie CHart -->

          </div>
        </div>
      </div>

    <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Pendidikan terakhir</h5>

            <!-- Pie Chart -->
            <canvas id="pieChart" style="max-height: 400px;"></canvas>
            <script>
              document.addEventListener("DOMContentLoaded", () => {
                new Chart(document.querySelector('#pieChart'), {
                  type: 'pie',
                  data: {
                    labels: [
                      'S3',
                      'S2',
                      'S1',
                      'D3'
                    ],
                    datasets: [{
                      label: 'pendidikan',
                      data: [
                        {{$s3}},{{$s2}},{{$s1}},{{$d3}}
                      ],
                      backgroundColor: [
                        'rgb(255, 205, 86)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 99, 132)',
                        'rgb(55, 100, 200)'
                      ],
                      hoverOffset: 4
                    }]
                  }
                });
              });
            </script>
            <!-- End Pie CHart -->
          </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Sertifikasi Guru</h5>

            <!-- Pie Chart -->
            <canvas id="pieChart2" style="max-height: 400px;"></canvas>
            <script>
              document.addEventListener("DOMContentLoaded", () => {
                new Chart(document.querySelector('#pieChart2'), {
                  type: 'pie',
                  data: {
                    labels: [
                      'Sudah Sertifikasi',
                      'Belum Sertifikasi'

                    ],
                    datasets: [{
                      label: 'sertifikasi',
                      data: [
                        {{$x}},{{$y}}
                      ],
                      backgroundColor: [
                        'rgb(255, 205, 86)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 99, 132)'
                      ],
                      hoverOffset: 4
                    }]
                  }
                });
              });
            </script>
            <!-- End Pie CHart -->
          </div>
        </div>
    </div>
    <h3>Data Guru</h3>
        <table class="table table-bordered table-hover datatable" id="guru">
        <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama</th>
            <th scope="col">Status</th>
            <th scope="col">Pendidikan</th>
            <th scope="col">Sertifikasi</th>
            <th scope="col">Foto</th>
        </tr>
        </thead>
        <?php $no=1; ?>
        @foreach ($data as $isi)
        <tbody>
        <tr>
            <td>{{$no++}}</td>
            <td>{{$isi->nama}}</td>
            <td>{{$isi->status}}</td>
            <td>{{$isi->pend." ".$isi->jurusan}}</td>
            <td>
                @if ($isi->sert=="Sertifikasi")
                    <a href="{{asset('dokumen/'.$isi->doksert)}}"><i class="bi bi-award-fill">{{$isi->sert}}</i></a>
                    @else <i class="bi bi-award">{{$isi->sert}}</i>
                @endif
            </td>
            <td align="center">
                <a href="biodata/{{$isi->id}}">
                    <img src="{{asset('images/'.$isi->foto)}}" width="50" height="50" title="Detail" class="rounded-circle">
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
        </table>
</div>
@endsection
