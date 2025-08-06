@extends('pages-blank')
@section('isi')
<div class="container">
<div class="row">

    <div class="col-lg-5">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Status Tendik</h5>

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
                      'PTT'
                    ],
                    datasets: [{
                      label: 'Status Tendik',
                      data: [
                        {{$pns}},{{$pppk}},{{$ptt}}
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

      <div class="col-lg-5">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Pendidikan Tendik</h5>

            <!-- Pie Chart -->
            <canvas id="pieChart2" style="max-height: 400px;"></canvas>
            <script>
              document.addEventListener("DOMContentLoaded", () => {
                new Chart(document.querySelector('#pieChart2'), {
                  type: 'pie',
                  data: {
                    labels: [
                      'S2',
                      'S1',
                      'D3',
                      'SMA'
                    ],
                    datasets: [{
                      label: 'Status guru',
                      data: [
                        {{$s2}},{{$s1}},{{$d3}},{{$sma}}
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

    </div>

    <h3>Data Tenaga Kependidikan</h3>
        <table class="table table-bordered table-hover datatable" id="tendik">
        <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama</th>
            <th scope="col">Status</th>
            <th scope="col">Pendidikan</th>
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
            <td align="center">
                <a href="biodataTendik/{{$isi->id}}">
                    <img src="{{asset('images/'.$isi->foto)}}" width="50" height="50" title="Detail" class="rounded-circle">
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
        </table>
</div>
@endsection
