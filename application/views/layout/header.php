<?php
// DETEKSI HALAMAN
$segmen1 = $this->uri->segment(1);
$segmen2 = $this->uri->segment(2);
$is_dashboard = ($segmen1 == '' || ($segmen1 == 'dashboard' && $segmen2 == ''));
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMA Negeri 1 Batangan</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Roboto', sans-serif; }

        /* NAVBAR */
        .navbar-custom {
            width: 100%;
            z-index: 9999;
            padding-top: 15px;
            padding-bottom: 15px;
            transition: all 0.4s ease;
            margin-bottom: 0 !important;
        }
        .navbar-custom .nav-link {
            color: #ffffff !important;
            font-size: 14px;
            font-weight: 500;
            text-transform: uppercase;
            padding: 10px 15px !important;
        }
        .navbar-custom .nav-link:hover { color: #ffc107 !important; }
        
        .navbar-brand img { width: 55px; height: auto; }
        .navbar-brand-text {
            font-weight: 700; 
            font-size: 24px; 
            letter-spacing: 1px;
            margin-left: 12px; 
            color: white; 
            position: relative; 
            /* Menaikkan posisi teks agar sejajar proporsional dengan logo */
            top: -15px; 
        }

        /* --- DROPDOWN UTAMA --- */
        .dropdown-menu {
            border-radius: 6px;
            border: none;
            margin-top: 15px !important;
            padding: 0;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15); 
        }

        /* Panah Kecil Pemanis (Hanya Desktop) */
        @media (min-width: 992px) {
            .dropdown-menu::before {
                content: '';
                position: absolute;
                top: -8px; left: 20px;
                border-left: 8px solid transparent;
                border-right: 8px solid transparent;
                border-bottom: 8px solid white;
            }
        }

        .dropdown-item {
            font-size: 14px; padding: 12px 20px; border-bottom: 1px solid #f8f9fa; color: #333;
            position: relative; 
        }
        .dropdown-item:hover {
            background-color: #f8f9fa; color: #102a43; font-weight: 600; padding-left: 25px; transition: 0.2s;
        }

        /* --- SUBMENU (NESTED DROPDOWN) --- */
        @media (min-width: 992px) {
            .dropdown-submenu .dropdown-menu {
                top: 0;
                left: 100%; 
                margin-top: -1px !important;
                display: none; 
            }
            .dropdown-submenu:hover > .dropdown-menu {
                display: block; 
            }
            
            .dropdown-submenu > a::after {
                content: "\F285"; /* Icon Chevron Right */
                font-family: "bootstrap-icons";
                float: right;
                font-size: 12px;
                margin-top: 4px;
                border: none !important;
            }
        }

        /* MOBILE VIEW */
        @media (max-width: 991px) {
            .navbar-collapse {
                background-color: #102a43; padding: 15px; border-radius: 8px; margin-top: 10px;
            }
            .dropdown-menu { margin-top: 0 !important; box-shadow: none; border: 1px solid rgba(255,255,255,0.1); }
            .dropdown-menu::before { display: none; }
            
            .dropdown-submenu .dropdown-menu {
                margin-left: 20px;
                border-left: 2px solid rgba(255,255,255,0.3);
            }
            .dropdown-submenu > a::after { border: none !important; } 
        }

        /* HEADER COLORS */
        .header-fixed {
            position: fixed; top: 0; left: 0; right: 0; background-color: transparent;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        .header-fixed.scrolled {
            background-color: #102a43 !important; padding-top: 5px; padding-bottom: 5px; border-bottom: none;
        }
        .header-sticky {
            position: sticky; top: 0; background-color: #102a43 !important;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom <?= $is_dashboard ? 'fixed-top header-fixed' : 'sticky-top header-sticky' ?>">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="<?= base_url() ?>">
        <img src="<?= base_url('assets/img/logosmaba.png') ?>" alt="Logo">
        <span class="navbar-brand-text">SMABA</span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-display="static">Profil Sekolah</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('dashboard/sambutan') ?>">Sambutan Kepala Sekolah</a></li>
            <li><a class="dropdown-item" href="<?= base_url('dashboard/sejarah') ?>">Sejarah Sekolah</a></li>
            <li><a class="dropdown-item" href="<?= base_url('dashboard/visimisi') ?>">Visi & Misi</a></li>
            <li><a class="dropdown-item" href="<?= base_url('dashboard/struktur') ?>">Struktur Organisasi</a></li>
            
            <li class="dropdown-submenu position-relative">
                <a class="dropdown-item dropdown-toggle" href="#">Guru & Staff</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?= base_url('dashboard/guru') ?>">Guru</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('dashboard/karyawan') ?>">Staff/Karyawan</a></li>
                </ul>
            </li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-display="static">Informasi Sekolah</a>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?= base_url('dashboard/berita') ?>">Berita Sekolah</a></li>
              <li><a class="dropdown-item" href="<?= base_url('dashboard/pengumuman') ?>">Pengumuman Kelulusan</a></li>
              <li><a class="dropdown-item" href="<?= base_url('dashboard/agenda') ?>">Agenda Akademik</a></li>
              <li><a class="dropdown-item" href="<?= base_url('#kontak') ?>">Kontak</a></li>
            </ul>
        </li>
        
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-display="static">Layanan</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?= base_url('dashboard/ekskul') ?>">Ekstrakurikuler</a></li>
                <li><a class="dropdown-item" href="<?= base_url('dashboard/fasilitas') ?>">Fasilitas Sekolah</a></li>
            </ul>
        </li>
        
        <li class="nav-item"><a class="nav-link" href="<?= base_url('dashboard/karya_murid') ?>">Karya Murid</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('dashboard/prestasi') ?>">Prestasi</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('dashboard/alumni') ?>">Alumni</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('dashboard/ppdb') ?>">PPDB</a></li>

      </ul>
    </div>
  </div>
</nav>

<?php if($is_dashboard): ?>
<script>
    window.onscroll = function() {
        var navbar = document.querySelector('.navbar-custom');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    };
</script>
<?php endif; ?>

<script>
document.addEventListener("DOMContentLoaded", function(){
    if (window.innerWidth < 992) {
        document.querySelectorAll('.dropdown-submenu .dropdown-toggle').forEach(function(element){
            element.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                let submenu = this.nextElementSibling;
                if(submenu.style.display == 'block'){
                    submenu.style.display = 'none';
                } else {
                    submenu.style.display = 'block';
                }
            });
        });
    }
});
</script>