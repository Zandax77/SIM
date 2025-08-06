@extends('pages-blank')
@section('isi')
<div class="container">
    <h3>Rekapitulasi Kehadiran Siswa {{date('d/m/Y')}}</h3>

    <h4>Tingkat</h4>
    <!-- Default Tabs -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Kelas X</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Kelas XI</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Kelas XII</button>
        </li>
      </ul>
      <div class="tab-content pt-2" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <!-- Pie Chart -->
          <canvas id="pieChart" style="max-height: 300px;"><h4>RPL</h4></canvas>
          <script>
            document.addEventListener("DOMContentLoaded", () => {
              new Chart(document.querySelector('#pieChart'), {
                type: 'pie',
                data: {
                  labels: [
                    'Hadir',
                    'Absen'
                  ],
                  datasets: [{
                    label: 'My First Dataset',
                    data: [300, 50],
                    backgroundColor: [
                      'rgb(255, 99, 132)',
                      'rgb(54, 162, 235)'
                    ],
                    hoverOffset: 4
                  }]
                }
              });
            });
          </script>
          <!-- End Pie CHart -->

        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          Nesciunt totam et. Consequuntur magnam aliquid eos nulla dolor iure eos quia. Accusantium distinctio omnis et atque fugiat. Itaque doloremque aliquid sint quasi quia distinctio similique. Voluptate nihil recusandae mollitia dolores. Ut laboriosam voluptatum dicta.
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque. Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis accusamus impedit molestias nostrum veniam. Qui amet ipsum iure. Dignissimos fuga tempore dolor.
        </div>
      </div><!-- End Default Tabs -->
</div>
@endsection
