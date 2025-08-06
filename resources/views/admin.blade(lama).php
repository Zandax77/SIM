@extends('pages-blank')
@section('isi')
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="" align-items-center">
            <img src="{{asset('images/energi.png')}}" width="95" height="95" alt="">
        </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">


        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{asset('images/admin.jpg')}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Admin</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="admin">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#kelembagaan-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-diagram-3-fill"></i><span>Lembaga</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="kelembagaan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="operator" target="isinya">
              <i class="bi bi-circle"></i><span>Data Pengguna</span>
            </a>
          </li>
          <li>
            <a href="grafikGuru" target="isinya">
                <i class="bi bi-circle"></i><span>Data Pendidik(Guru)</span>
            </a>
          </li>
          <li>
            <a href="grafikTendik" target="isinya">
                <i class="bi bi-circle"></i><span>Data Kependidikan</span>
            </a>
          </li>
          <li>
            <a href="">
                <i class="bi bi-circle"></i><span>Program Keahlian</span>
            </a>
          </li>
          <li>
            <a href="">
                <i class="bi bi-circle"></i><span>Kurikulum operasional di satuan pendidikan(KSOP)</span>
            </a>
          </li>
          <li>
            <a href="">
                <i class="bi bi-circle"></i><span>Siswa</span>
            </a>
          </li>
        </ul>
      </li><!-- End Kelembagaan Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#waka-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people-fill"></i><span>Wakil Kepala</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="waka-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="kurikulum" target="isinya">
              <i class="bi bi-circle"></i><span>Kurikulum</span>
            </a>
          </li>
          <li>
            <a href="kesiswaan" target="isinya">
                <i class="bi bi-circle"></i><span>Kesiswaan</span>
            </a>
          </li>
          <li>
            <a href="sarana" target="isinya">
                <i class="bi bi-circle"></i><span>Sarana</span>
            </a>
          </li>
          <li>
            <a href="humas" target="isinya">
                <i class="bi bi-circle"></i><span>Humas</span>
            </a>
          </li>
        </ul>
      </li><!-- End Waka Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#progli-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Program Keahlian</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="progli-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="dokRpl" target="isinya">
              <i class="bi bi-circle"></i><span>Rekayasa Perangkat Lunak</span>
            </a>
          </li>
          <li>
            <a href="dokDkv" target="isinya">
                <i class="bi bi-circle"></i><span>Desain Komunikasi Visual</span>
            </a>
          </li>
          <li>
            <a href="dokAkl" target="isinya">
                <i class="bi bi-circle"></i><span>Akuntansi Lembaga</span>
            </a>
          </li>
          <li>
            <a href="dokMp" target="isinya">
                <i class="bi bi-circle"></i><span>Manajemen Perkantoran</span>
            </a>
          </li>
          <li>
            <a href="dokBd" target="isinya">
                <i class="bi bi-circle"></i><span>Bisnis Daring dan Pemasaran</span>
            </a>
          </li>
          <li>
            <a href="dokKkbt" target="isinya">
                <i class="bi bi-circle"></i><span>Kriya Batik dan Textil</span>
            </a>
          </li>
        </ul>
      </li><!-- End Progli Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#kbm-nav" data-bs-toggle="collapse" href="">
            <i class="bi bi-journal-bookmark-fill"></i><span>Kegiatan Belajar dan Mengajar(KBM)</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="kbm-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
                <a href="https://presensisiswa.smkn6jember.net/public/rekapHarian" target="isinya">
                    <i class="bi bi-circle"></i><span>Kehadiran Siswa</span>
                </a>
				<a href="https://presensisiswa.smkn6jember.net/rekapAbsen/rekap.php" target="isinya">
					<i class="bi bi-circle"></i><span>Rekap Kehadiran Siswa</span>
				</a>
            </li>
            <li>
                <a href="https://jurnalguru.smkn6.com/" target="isinya">
                    <i class="bi bi-circle"></i><span>Jurnal Guru</span>
                </a>
            </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#pkl-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-graph-up"></i><span>Prakerin</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="pkl-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>Struktur</span>
            </a>
          </li>
          <li>
            <a href="">
                <i class="bi bi-circle"></i><span>Program kerja</span>
            </a>
          </li>
          <li>
            <a href="">
                <i class="bi bi-circle"></i><span>DUDI Mitra</span>
            </a>
          </li>
          <li>
            <a href="">
                <i class="bi bi-circle"></i><span>Dokumentasi</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#ekskul-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Ekstra Kurikuler</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="ekskul-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>Ekstra 1</span>
            </a>
          </li>
        </ul>
      </li><!-- End Ekskul Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#bk-nav" data-bs-toggle="collapse" href="">
            <i class="bi bi-person-check-fill"></i><span>BK</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="bk-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
                <a href="">
                    <i class="bi bi-circle"></i><span>Struktur</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="bi bi-circle"></i><span>Program kerja</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="bi bi-circle"></i><span>Laporan</span>
                </a>
            </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#ppdb-nav" data-bs-toggle="collapse" href="">
            <i class="bi bi-pencil-square"></i><span>PPDB</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="ppdb-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
                <a href="">
                    <i class="bi bi-circle"></i><span>Struktur</span>
                </a>
            </li>
            <li>
                <a href="{{asset('dokumen/LAPORAN_PPDB_SMKN_6_JEMBER_TP. 2023-2024.pdf')}}" target="isinya">
                    <i class="bi bi-circle"></i><span>Laporan</span>
                </a>
            </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#mpls-nav" data-bs-toggle="collapse" href="">
            <i class="bi bi-toggles2"></i><span>MPLS</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="mpls-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
                <a href="">
                    <i class="bi bi-circle"></i><span>Struktur</span>
                </a>
            </li>
            <li>
                <a href="{{asset('dokumen/LAPORAN_MPLS_SMKN_6_JEMBER_TP. 2023-2024.pdf')}}" target="isinya">
                    <i class="bi bi-circle"></i><span>Laporan</span>
                </a>
            </li>
        </ul>
      </li>

	  <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#portofolio-nav" data-bs-toggle="collapse" href="">
          <i class="bi bi-toggles2"></i><span>Portofolio Siswa</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="portofolio-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="http://siswa.smkn6jember.net" target="">
              <i class="bi bi-circle"></i><span>Rekayasa Perangkat Lunak</span>
            </a>
            <a href="https://s.id/PORTOFOLIODKV">
              <i class="bi bi-circle"></i><span>Desain Komunikasi Visual</span>
            </a>
            <a href="https://drive.google.com/drive/folders/1pE6LpiYfcogEzYqd1LzrtBZ8rqNPndMd">
              <i class="bi bi-circle"></i><span>Kriya Kreatif Batik dan Textil</span>
            </a>
            <a href="">
              <i class="bi bi-circle"></i><span>Akuntansi Lembaga</span>
            </a>
            <a href="">
              <i class="bi bi-circle"></i><span>Manajemen Perkantoran</span>
            </a>
            <a href="">
              <i class="bi bi-circle"></i><span>Bisnis Digital</span>
            </a>
          </li>
        </ul>
      </li>



      <!-- End Profile Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Selamat datang Admin</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="https://referensi.data.kemdikbud.go.id/tabs.php?npsn=20523849" target="isinya">Data Pendidikan</a></li>
          <li class="breadcrumb-item"><a href="https://sekolah.data.kemdikbud.go.id/index.php/Chome/profil/E0E83CD5-3ECD-4DE3-B2CD-FD28128E3327" target="isinya">Sekolah kita</a></li>
          <li class="breadcrumb-item"><a href="http://smkn6jember.sch.id" target="isinya">Web Sekolah</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <iframe src="https://referensi.data.kemdikbud.go.id/tabs.php?npsn=20523849" frameborder="0" width="100%" height="800" name="isinya"></iframe>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      © Copyright <strong><span>SMKN 6 JEMBER</span></strong>. All Rights Reserved
    </div>

  </footer><!-- End Footer -->

@endsection
