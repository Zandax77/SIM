@extends('pages-blank')
@section('isi')
<main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                <img src="{{asset('images/smk6 copy.png')}}" alt="" width="150" height="150">

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Buat Akun Pengguna</h5>
                    <p class="text-center small">Masukkan data personal anda untuk membuat akun pengguna</p>
                  </div>

                  <form class="row g-3 needs-validation" action="simpanOperator" method="POST" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="col-12">
                      <label for="yourName" class="form-label">Nama anda :</label>
                      <input type="text" name="nama" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Silahkan isikan nama lengkap anda!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">alamat Email :</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Masukkan alamat email aktif anda!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Kode pengguna :</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="kode" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Buat kode pengguna</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Sandi :</label>
                      <input type="password" name="sandi" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Buat kata sandi anda!</div>
                    </div>

                    <div class="col-12">
                        <label for="jabatan">Operator data :</label>
                        <select name="jabatan" id="" class="form-control">
                            <option value=""></option>
                            <option value="adm">Tata Administrasi</option>
                        	<option value="adminWaka">Admin Waka</option>
                            <option value="kurikulum">Kurikulum</option>
                            <option value="kesiswaan">Kesiswaan</option>
                            <option value="sarana">Sarana</option>
                            <option value="humas">Humas</option>
                            <option value="rpl">RPL</option>
                            <option value="dkv">DKV</option>
                            <option value="akl">AKL</option>
                            <option value="bdp">BDP</option>
                            <option value="mp">MP</option>
                            <option value="kkbt">KKBT</option>
                            <option value="pkl">PKL</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="foto" class="form-label">Foto :</label>
                        <input type="file" name="foto" class="form-control" id="fotomu" required>
                        <div class="invalid-feedback">Masukkan pasphoto anda!</div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Daftarkan Akun</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Sudah memiliki akun? <a href="login">Log in</a></p>
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
