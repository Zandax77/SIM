@extends('pages-blank')
@section('isi')
<main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center">
                <img src="{{asset('images/smk6 copy.png')}}" width="150" height="150">
              </div><!-- End Logo -->
              <h3>Master Data Manajemen</h3>

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Masuk dengan akun anda</h5>
                    <p class="text-center small">Masukkan kode pengguna dan kata sandi anda</p>
                  </div>

                  <form class="row g-3 needs-validation" action="prosesLogin" method="POST" novalidate>
                    @csrf
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Kode Pengguna : </label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="kode" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Silahkan ketik kode pengguna.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Sandi</label>
                      <input type="password" name="sandi" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Ketik kata sandi anda!</div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Belum memiliki akun? <a href="regOperator">Daftar sebagai Pengguna</a></p>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->
  @endsection
