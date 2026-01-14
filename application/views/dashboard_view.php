<div class="position-relative w-100">
    <img src="<?= base_url('assets/img/homedashboard.png') ?>" class="w-100" style="height: 100vh; object-fit: cover; filter: brightness(0.6);" alt="Gedung Sekolah">
    
    <div class="position-absolute top-50 start-50 translate-middle text-center text-white w-100 px-3">
        <h1 class="display-3 fw-bold" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.7);">SMA NEGERI 1 BATANGAN</h1>
    </div>
</div>

<div class="container" style="margin-top: 80px; margin-bottom: 80px;"> 
    <div class="row">
        
        <div class="col-lg-3 col-md-6 mb-4">
            <div id="posterCarousel" class="carousel slide shadow rounded overflow-hidden" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?= base_url('assets/img/poster1.jpg') ?>" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Poster PPDB">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url('assets/img/poster2.jpg') ?>" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Poster Kegiatan">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#posterCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#posterCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100 border-0 shadow-sm">
        <div class="card-header text-white fw-bold py-3" style="background-color: #102a43;">
            PENGUMUMAN
        </div>
        <div class="card-body">
            
            <div class="d-flex align-items-center mb-3 pb-3 border-bottom">
                <div class="flex-shrink-0 bg-light text-dark border text-center rounded d-flex flex-column justify-content-center" style="width: 60px; height: 60px;">
                    <span class="fw-bold fs-5">12</span>
                    <span style="font-size: 10px;">JAN</span>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0 fw-bold text-dark">Rapat Koordinasi Guru</h6>
                    <small class="text-muted">Aula Utama</small>
                </div>
            </div>

            <div class="d-flex align-items-center mb-3 pb-3 border-bottom">
                <div class="flex-shrink-0 bg-light text-dark border text-center rounded d-flex flex-column justify-content-center" style="width: 60px; height: 60px;">
                    <span class="fw-bold fs-5">24</span>
                    <span style="font-size: 10px;">JAN</span>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0 fw-bold text-dark">Ujian Praktik Seni</h6>
                    <small class="text-muted">Ruang Kesenian</small>
                </div>
            </div>

            <div class="d-flex align-items-center mb-3 pb-3 border-bottom">
                <div class="flex-shrink-0 bg-light text-dark border text-center rounded d-flex flex-column justify-content-center" style="width: 60px; height: 60px;">
                    <span class="fw-bold fs-5">05</span>
                    <span style="font-size: 10px;">FEB</span>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0 fw-bold text-dark">Peringatan Israk Mikraj</h6>
                    <small class="text-muted">Masjid Sekolah</small>
                </div>
            </div>

            <div class="d-flex align-items-center">
                <div class="flex-shrink-0 bg-light text-dark border text-center rounded d-flex flex-column justify-content-center" style="width: 60px; height: 60px;">
                    <span class="fw-bold fs-5">10</span>
                    <span style="font-size: 10px;">MAR</span>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0 fw-bold text-dark">Libur Awal Puasa</h6>
                    <small class="text-muted">Kalender Akademik</small>
                </div>
            </div>
            
        </div>
    </div>
</div>

        <div class="col-lg-5 col-md-12 mb-5">
            <h5 class="fw-bold mb-2 border-start border-4 border-warning ps-2" style="color: #102a43;">SAMBUTAN KEPALA SEKOLAH</h5>
            
            <div class="card border-0  p-3 shadow-sm ">
                <div class="mb-5 rounded overflow-hidden" style="height: 200px; width: 100%;">
                     <?php if(file_exists('assets/img/kepsek smaba.png')): ?>
                        <img src="<?= base_url('assets/img/kepsek smaba.png') ?>" class="w-100 h-150" style="object-fit: contain;" alt="Kepala Sekolah">
                     <?php else: ?>
                        <div class="d-flex align-items-center justify-content-center h-100 text-muted">FOTO KEPALA SEKOLAH</div>
                     <?php endif; ?>
                </div>

                <div class="card-body p-0">
                    <h6 class="fw-bold">Lasmin, S.Pd, M.Pd</h6>
                    <p class="text-muted small mb-2">Kepala Sekolah SMA Negeri 1 Batangan</p>
                    <p class="card-text text-dark" style="text-align: justify; font-size: 14px;">
                        Assalamualaikum Warahmatullahi Wabarakatuh. Selamat datang di website resmi SMA Negeri 1 Batangan. Kami berkomitmen untuk memberikan layanan pendidikan terbaik...
                     <a href="<?= base_url('dashboard/sambutan') ?>" class="text-warning fw-bold text-decoration-none">Lihat Detail >></a>
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="py-5" style="background-color: #102a43;">
    <div class="container">
        
        <div class="text-center mb-5">
            <h3 class="fw-bold text-white">BERITA TERBARU</h3>
            <div style="width: 60px; height: 3px; background-color: #ffc107; margin: 10px auto;"></div>
        </div>

        <div class="row">
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm rounded-3">
                    <div style="height: 220px; overflow: hidden;">
                        <img src="<?= base_url('assets/img/berita_hari_pertamamasuk.jpg') ?>" class="card-img-top w-100 h-100" style="object-fit: cover;" alt="Upacara Hari Pertama">
                    </div>
                    
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title fw-bold text-uppercase mb-3" style="font-size: 16px; line-height: 1.5;">
                            <a href="<?= base_url('dashboard/detail_berita/1') ?>" class="text-decoration-none" style="color: #102a43;">
                                UPACARA BENDERA HARI PERTAMA MASUK SEKOLAH
                            </a>
                        </h5>
                        
                        <p class="card-text text-dark small mb-4 flex-grow-1" style="line-height: 1.6;">
                            SMA Negeri 1 Batangan menggelar upacara bendera pada hari pertama masuk sekolah setelah libur semester sebagai awal semangat baru.
                        </p>
                        
                        <div class="text-muted small border-top pt-3 d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3 me-2" viewBox="0 0 16 16">
                              <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                              <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                            </svg>
                            5 Januari 2026
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm rounded-3">
                    <div style="height: 220px; overflow: hidden;">
                        <img src="<?= base_url('assets/img/berita1.png') ?>" class="card-img-top w-100 h-100" style="object-fit: cover;" alt="Sertijab Kepala Sekolah">
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title fw-bold text-uppercase mb-3" style="font-size: 16px; line-height: 1.5;">
                            <a href="<?= base_url('dashboard/detail_berita/2') ?>" class="text-decoration-none" style="color: #102a43;">
                                SERAH TERIMA JABATAN KEPALA SEKOLAH
                            </a>
                        </h5>
                        
                        <p class="card-text text-dark small mb-4 flex-grow-1" style="line-height: 1.6;">
                            Suasana haru dan khidmat menyelimuti acara pisah sambut sebagai tanda dimulainya kepemimpinan baru untuk SMABA yang lebih maju.
                        </p>
                        
                        <div class="text-muted small border-top pt-3 d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3 me-2" viewBox="0 0 16 16">
                              <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                              <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                            </svg>
                            13 November 2025
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm rounded-3">
                    <div style="height: 220px; overflow: hidden;">
                        <img src="<?= base_url('assets/img/berita_hari_pahlawan.jpeg') ?>" class="card-img-top w-100 h-100" style="object-fit: cover;" alt="Hari Pahlawan">
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title fw-bold text-uppercase mb-3" style="font-size: 16px; line-height: 1.5;">
                            <a href="<?= base_url('dashboard/detail_berita/3') ?>" class="text-decoration-none" style="color: #102a43;">
                                PERINGATAN HARI PAHLAWAN 2025
                            </a>
                        </h5>
                        
                        <p class="card-text text-dark small mb-4 flex-grow-1" style="line-height: 1.6;">
                            SMABA mengadakan kegiatan Lomba Peragaan Busana di Lapangan Upacara yang berlangsung dengan meriah serta penuh semangat nasionalisme.
                        </p>
                        
                        <div class="text-muted small border-top pt-3 d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3 me-2" viewBox="0 0 16 16">
                              <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                              <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                            </svg>
                            11 November 2025
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="text-center mt-5">
            <a href="<?= base_url('dashboard/berita') ?>"
             class="btn btn-light px-4 py-2 fw-bold shadow-sm" style="color: #102a43;">Tampilkan Semua Berita</a>
        </div>

    </div>
</div>

<div class="py-5 bg-white">
    <div class="container">
        
        <div class="text-center mb-5">
            <h3 class="fw-bold" style="color: #102a43;">PRESTASI TERBARU</h3>
            <div style="width: 60px; height: 3px; background-color: #ffc107; margin: 10px auto;"></div>
        </div>

        <div class="row">
            
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-lg h-100 overflow-hidden rounded-3">
                    <div class="row g-0 h-100">
                        <div class="col-md-5 position-relative">
                            <img src="<?= base_url('assets/img/rihana_amalia.jpg') ?>" class="img-fluid h-100 w-100" style="object-fit: cover; min-height: 250px;" alt="Juara Taekwondo">
                        </div>
                        
                        <div class="col-md-7">
                            <div class="card-body d-flex flex-column h-100 p-4 justify-content-center">
                                <span class="badge bg-success text-white mb-3 px-3 py-2 w-auto align-self-start rounded-pill">Tingkat Kabupaten</span>
                                
                                <h5 class="card-title fw-bold mb-3" style="color: #102a43; font-size: 1.25rem;">
                                    Juara 1 Taekwondo Under 55
                                </h5>
                                
                                <p class="card-text text-dark mb-4" style="font-size: 0.9rem; line-height: 1.6;">
                                    Rihana Amalia berhasil meraih Juara 1 Taekwondo Under 55 Tingkat Kabupaten Pati Tahun 2025...
                                    <a href="<?= base_url('dashboard/detail_prestasi/5') ?>" class="text-warning fw-bold text-decoration-none">Lihat Detail >></a>
                                </p>
                                
                                <p class="card-text mt-auto text-muted small border-top pt-3 d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3 me-2" viewBox="0 0 16 16">
                                      <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                                      <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                    </svg>
                                    Tahun 2025
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-lg h-100 overflow-hidden rounded-3">
                    <div class="row g-0 h-100">
                        <div class="col-md-5 position-relative">
                            <img src="<?= base_url('assets/img/aurelia_septia.jpg') ?>" class="img-fluid h-100 w-100" style="object-fit: cover; min-height: 250px;" alt="Juara Tolak Peluru">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body d-flex flex-column h-100 p-4 justify-content-center">
                                <span class="badge bg-success text-white mb-3 px-3 py-2 w-auto align-self-start rounded-pill">Tingkat Kabupaten</span>
                                
                                <h5 class="card-title fw-bold mb-3" style="color: #102a43; font-size: 1.25rem;">
                                    Juara 1 Tolak Peluru POPDA
                                </h5>
                                
                                <p class="card-text text-dark mb-4" style="font-size: 0.9rem; line-height: 1.6;">
                                    Aurelia Septia A berhasil meraih Juara 1 Tolak Peluru POPDA Atletik Tingkat Kabupaten Pati Tahun 2025...
                                    <a href="<?= base_url('dashboard/detail_prestasi/9') ?>" class="text-warning fw-bold text-decoration-none">Lihat Detail >></a>
                                </p>
                                
                                <p class="card-text mt-auto text-muted small border-top pt-3 d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3 me-2" viewBox="0 0 16 16">
                                      <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                                      <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                    </svg>
                                    Tahun 2025
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="text-center mt-5">
            <a href="<?= base_url('dashboard/prestasi') ?>"
             class="btn btn-light px-4 py-2 fw-bold shadow-sm" 
               style="color: #fff; background-color: #102a43;">
               Tampilkan Semua Prestasi
            </a>
         </div>
    </div>
</div>



<div class="py-5" style="background-color: #102a43;">
    <div class="container">
        
        <div class="text-center mb-5">
            <h3 class="fw-bold text-white">KARYA MURID TERBARU</h3>
            <div style="width: 60px; height: 3px; background-color: #ffc107; margin: 10px auto;"></div>
        </div>

        <div class="row g-4">
            
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 h-100 shadow-sm rounded-3 overflow-hidden karya-home-card">
                    <div style="height: 250px; overflow: hidden;">
                        <img src="<?= base_url('assets/img/publikasi1.jpg') ?>" 
                             class="w-100 h-100 object-fit-cover hover-zoom" 
                             alt="Karya Murid">
                    </div>

                    <div class="card-body p-3" style="background-color: #e9ecef;">
                        <h6 class="fw-bold text-uppercase mb-2" style="color: #102a43; font-size: 14px; min-height: 40px;">
                            Benang Merah Sepanggal Detik
                        </h6>

                        <hr class="my-2" style="border-top: 1px solid #102a43; opacity: 0.3;">

                        <div class="d-flex align-items-start mb-2 text-dark" style="font-size: 12px;">
                            <i class="bi bi-person-fill me-2 fs-6"></i>
                            <span>Tia Puspita Sari/ XII IPA</span>
                        </div>

                        <div class="d-flex align-items-center mb-2 text-dark" style="font-size: 12px;">
                            <i class="bi bi-box-seam-fill me-2 fs-6"></i>
                            <span>Puisi</span>
                        </div>

                        <div class="d-flex align-items-center text-dark" style="font-size: 12px;">
                            <i class="bi bi-calendar3 me-2 fs-6"></i>
                            <span>13 November 2025</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card border-0 h-100 shadow-sm rounded-3 overflow-hidden karya-home-card">
                    <div style="height: 250px; overflow: hidden;">
                        <img src="<?= base_url('assets/img/publikasi2.jpg') ?>" 
                             class="w-100 h-100 object-fit-cover hover-zoom" 
                             alt="Karya Murid">
                    </div>

                    <div class="card-body p-3" style="background-color: #e9ecef;">
                        <h6 class="fw-bold text-uppercase mb-2" style="color: #102a43; font-size: 14px; min-height: 40px;">
                            Pemandangan Gunung Malam Hari
                        </h6>

                        <hr class="my-2" style="border-top: 1px solid #102a43; opacity: 0.3;">

                        <div class="d-flex align-items-start mb-2 text-dark" style="font-size: 12px;">
                            <i class="bi bi-person-fill me-2 fs-6"></i>
                            <span>Luvina Agita Rani/ XI IPS</span>
                        </div>

                        <div class="d-flex align-items-center mb-2 text-dark" style="font-size: 12px;">
                            <i class="bi bi-box-seam-fill me-2 fs-6"></i>
                            <span>Lukisan</span>
                        </div>

                        <div class="d-flex align-items-center text-dark" style="font-size: 12px;">
                            <i class="bi bi-calendar3 me-2 fs-6"></i>
                            <span>4 Desember 2025</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card border-0 h-100 shadow-sm rounded-3 overflow-hidden karya-home-card">
                    <div style="height: 250px; overflow: hidden;">
                        <img src="<?= base_url('assets/img/publikasi3.jpg') ?>" 
                             class="w-100 h-100 object-fit-cover hover-zoom" 
                             alt="Karya Murid">
                    </div>

                    <div class="card-body p-3" style="background-color: #e9ecef;">
                        <h6 class="fw-bold text-uppercase mb-2" style="color: #102a43; font-size: 14px; min-height: 40px;">
                            Maket Rumah Kayu Minimalis
                        </h6>

                        <hr class="my-2" style="border-top: 1px solid #102a43; opacity: 0.3;">

                        <div class="d-flex align-items-start mb-2 text-dark" style="font-size: 12px;">
                            <i class="bi bi-person-fill me-2 fs-6"></i>
                            <span>Axel Candra Adi/ X</span>
                        </div>

                        <div class="d-flex align-items-center mb-2 text-dark" style="font-size: 12px;">
                            <i class="bi bi-box-seam-fill me-2 fs-6"></i>
                            <span>Kerajinan</span>
                        </div>

                        <div class="d-flex align-items-center text-dark" style="font-size: 12px;">
                            <i class="bi bi-calendar3 me-2 fs-6"></i>
                            <span>25 Desember 2025</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card border-0 h-100 shadow-sm rounded-3 overflow-hidden karya-home-card">
                    <div style="height: 250px; overflow: hidden;">
                        <img src="<?= base_url('assets/img/publikasi4.jpg') ?>" 
                             class="w-100 h-100 object-fit-cover hover-zoom" 
                             alt="Karya Murid">
                    </div>

                    <div class="card-body p-3" style="background-color: #e9ecef;">
                        <h6 class="fw-bold text-uppercase mb-2" style="color: #102a43; font-size: 14px; min-height: 40px;">
                            Hari Guru Nasional
                        </h6>

                        <hr class="my-2" style="border-top: 1px solid #102a43; opacity: 0.3;">

                        <div class="d-flex align-items-start mb-2 text-dark" style="font-size: 12px;">
                            <i class="bi bi-person-fill me-2 fs-6"></i>
                            <span>Akbar Ibrahim/ XII IPA</span>
                        </div>

                        <div class="d-flex align-items-center mb-2 text-dark" style="font-size: 12px;">
                            <i class="bi bi-box-seam-fill me-2 fs-6"></i>
                            <span>Poster</span>
                        </div>

                        <div class="d-flex align-items-center text-dark" style="font-size: 12px;">
                            <i class="bi bi-calendar3 me-2 fs-6"></i>
                            <span>25 November 2025</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="text-center mt-5">
            <a href="<?= base_url('dashboard/karya') ?>"
             class="btn btn-light px-4 py-2 fw-bold shadow-sm"
               style="color: #102a43;">
               Tampilkan Semua Karya
            </a>
        </div>

    </div>
</div>

<style>
    .hover-zoom { transition: transform 0.3s ease; }
    .card:hover .hover-zoom { transform: scale(1.05); }
    /* Efek angkat card saat hover agar serupa dengan card guru dan karya murid */
    .karya-home-card { transition: transform 0.3s ease; }
    .karya-home-card:hover { transform: translateY(-5px); }
</style>


<div class="py-5 bg-white">
    <div class="container">
        
        <div class="text-center mb-5">
            <h3 class="fw-bold text-uppercase" style="color: #102a43;">Ekstrakurikuler</h3>
            <div style="width: 60px; height: 3px; background-color: #ffc107; margin: 10px auto;"></div>
        </div>

        <div class="row g-4">
            
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div style="height: 220px; overflow: hidden;">
                        <img src="<?= base_url('assets/img/PBB.jpg') ?>" class="hover-zoom w-100 h-100 object-fit-cover" alt="PBB">
                    </div>
                    <div class="card-body p-4 text-white" style="background-color: #102a43;">
                        <h4 class="fw-regular text-uppercase mb-3">PBB</h4>
                        <p class="fw-normal mb-0" style="font-size: 15px; line-height: 1.6; color: rgba(255,255,255,0.7);">
                            Melatih ketegasan, kekompakan tim, dan tata upacara bendera.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div style="height: 220px; overflow: hidden;">
                        <img src="<?= base_url('assets/img/englishclub.jpg') ?>" class="hover-zoom w-100 h-100 object-fit-cover" alt="English Club">
                    </div>
                    <div class="card-body p-4 text-white" style="background-color: #102a43;">
                        <h4 class="fw-regular text-uppercase mb-3">ENGLISH CLUB</h4>
                        <p class="fw-normal mb-0" style="font-size: 15px; line-height: 1.6; color: rgba(255,255,255,0.7);">
                            Meningkatkan kepercayaan diri berbicara dan keterampilan komunikasi dalam bahasa internasional.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div style="height: 220px; overflow: hidden;">
                        <img src="<?= base_url('assets/img/futsal.jpg') ?>" class="hover-zoom w-100 h-100 object-fit-cover" alt="Futsal">
                    </div>
                    <div class="card-body p-4 text-white" style="background-color: #102a43;">
                        <h4 class="fw-regular text-uppercase mb-3">FUTSAL</h4>
                        <p class="fw-normal mb-0" style="font-size: 15px; line-height: 1.6; color: rgba(255,255,255,0.7);">
                            Ekstrakurikuler favorit untuk menyalurkan hobi sepak bola, melatih strategi perm.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div style="height: 220px; overflow: hidden;">
                        <img src="<?= base_url('assets/img/tari.jpg') ?>" class="hover-zoom w-100 h-100 object-fit-cover" alt="Tari">
                    </div>
                    <div class="card-body p-4 text-white" style="background-color: #102a43;">
                        <h4 class="fw-regular text-uppercase mb-3">TARI</h4>
                        <p class="fw-normal mb-0" style="font-size: 15px; line-height: 1.6; color: rgba(255,255,255,0.7);">
                            Mengekspresikan diri melalui keindahan gerak seni tari tradisional dan kreasi modern.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div style="height: 220px; overflow: hidden;">
                        <img src="<?= base_url('assets/img/pmr.jpg') ?>" class="hover-zoom w-100 h-100 object-fit-cover" alt="PMR">
                    </div>
                    <div class="card-body p-4 text-white" style="background-color: #102a43;">
                        <h4 class="fw-regular text-uppercase mb-3">PMR</h4>
                        <p class="fw-normal mb-0" style="font-size: 15px; line-height: 1.6; color: rgba(255,255,255,0.7);">
                            Membangun jiwa kemanusiaan, kepedulian sosial, dan keterampilan pertolongan pertama.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div style="height: 220px; overflow: hidden;">
                        <img src="<?= base_url('assets/img/pencaksilat.jpg') ?>" class="hover-zoom w-100 h-100 object-fit-cover" alt="Pencak Silat">
                    </div>
                    <div class="card-body p-4 text-white" style="background-color: #102a43;">
                        <h4 class="fw-regular text-uppercase mb-3">PENCAK SILAT</h4>
                        <p class="fw-normal mb-0" style="font-size: 15px; line-height: 1.6; color: rgba(255,255,255,0.7);">
                            Melestarikan seni bela diri budaya bangsa sekaligus melatih kekuatan fisik dan mental.
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <div class="text-center mt-5">
            <a href="<?= base_url('dashboard/ekskul') ?>"
               class="btn px-4 py-2 fw-bold shadow-sm"
               style="color: #fff; background-color: #102a43;">
               Tampilkan Semua Ekstrakurikuler
            </a>
        </div>
    </div>
</div>

<style>
    .card { border-radius: 8px !important; }
    .hover-zoom { transition: transform 0.4s ease; }
    .card:hover .hover-zoom { transform: scale(1.08); }
    .object-fit-cover { object-fit: cover; }
</style>


<div class="py-5" style="background-color: #102a43;">
    <div class="container position-relative">
        
        <div class="text-center mb-5">
            <h3 class="fw-bold text-white text-uppercase">GURU & Staff/Karyawan</h3>
            <div style="width: 60px; height: 3px; background-color: #ffc107; margin: 10px auto;"></div>
        </div>

        <div id="guruCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner px-4 pb-4">
                
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-3 col-6 mb-3">
                            <div class="card border-0 shadow h-100 overflow-hidden position-relative rounded-3 group-hover-effect">
                                <div style="height: 320px; overflow: hidden;">
                                    <img src="<?= base_url('assets/img/guru1.png') ?>" class="w-100 h-100 transition-zoom" style="object-fit: cover;" alt="Abdullah Husin">
                                </div>
                                <div class="position-absolute bottom-0 start-50 translate-middle-x w-85 mb-3 bg-white rounded-3 shadow-sm text-center p-2" style="z-index: 2; width: 85%;">
                                    <h6 class="fw-bold mb-1" style="font-size: 13px; color: #102a43;">Abdullah Husin, S.Pd</h6>
                                    <small class="fw-bold text-warning">Matematika</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <div class="card border-0 shadow h-100 overflow-hidden position-relative rounded-3 group-hover-effect">
                                <div style="height: 320px; overflow: hidden;">
                                    <img src="<?= base_url('assets/img/guru2.png') ?>" class="w-100 h-100 transition-zoom" style="object-fit: cover;" alt="Agustina Pramu">
                                </div>
                                <div class="position-absolute bottom-0 start-50 translate-middle-x w-85 mb-3 bg-white rounded-3 shadow-sm text-center p-2" style="z-index: 2; width: 85%;">
                                    <h6 class="fw-bold mb-1" style="font-size: 13px; color: #102a43;">Agustina Pramu Indah, S.Pd</h6>
                                    <small class="fw-bold text-warning">Bahasa Prancis</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <div class="card border-0 shadow h-100 overflow-hidden position-relative rounded-3 group-hover-effect">
                                <div style="height: 320px; overflow: hidden;">
                                    <img src="<?= base_url('assets/img/guru3.png') ?>" class="w-100 h-100 transition-zoom" style="object-fit: cover;" alt="Ambit Novendi">
                                </div>
                                <div class="position-absolute bottom-0 start-50 translate-middle-x w-85 mb-3 bg-white rounded-3 shadow-sm text-center p-2" style="z-index: 2; width: 85%;">
                                    <h6 class="fw-bold mb-1" style="font-size: 13px; color: #102a43;">Ambit Novendi T, S.Pd., M.Si</h6>
                                    <small class="fw-bold text-warning">Sejarah</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <div class="card border-0 shadow h-100 overflow-hidden position-relative rounded-3 group-hover-effect">
                                <div style="height: 320px; overflow: hidden;">
                                    <img src="<?= base_url('assets/img/guru4.png') ?>" class="w-100 h-100 transition-zoom" style="object-fit: cover;" alt="Deny Wiharyati">
                                </div>
                                <div class="position-absolute bottom-0 start-50 translate-middle-x w-85 mb-3 bg-white rounded-3 shadow-sm text-center p-2" style="z-index: 2; width: 85%;">
                                    <h6 class="fw-bold mb-1" style="font-size: 13px; color: #102a43;">Deny Wiharyati, S.Pd</h6>
                                    <small class="fw-bold text-warning">Pend. Pancasila</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-3 col-6 mb-3">
                            <div class="card border-0 shadow h-100 overflow-hidden position-relative rounded-3 group-hover-effect">
                                <div style="height: 320px; overflow: hidden;">
                                    <img src="<?= base_url('assets/img/guru5.png') ?>" class="w-100 h-100 transition-zoom" style="object-fit: cover;" alt="Desy Rosaliana">
                                </div>
                                <div class="position-absolute bottom-0 start-50 translate-middle-x w-85 mb-3 bg-white rounded-3 shadow-sm text-center p-2" style="z-index: 2; width: 85%;">
                                    <h6 class="fw-bold mb-1" style="font-size: 13px; color: #102a43;">Desy Rosaliana, S.Pd</h6>
                                    <small class="fw-bold text-warning">Matematika</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <div class="card border-0 shadow h-100 overflow-hidden position-relative rounded-3 group-hover-effect">
                                <div style="height: 320px; overflow: hidden;">
                                    <img src="<?= base_url('assets/img/staf1.png') ?>" class="w-100 h-100 transition-zoom" style="object-fit: cover;" alt="Bekti Dwi">
                                </div>
                                <div class="position-absolute bottom-0 start-50 translate-middle-x w-85 mb-3 bg-white rounded-3 shadow-sm text-center p-2" style="z-index: 2; width: 85%;">
                                    <h6 class="fw-bold mb-1" style="font-size: 13px; color: #102a43;">Bekti Dwi kartiko, A.Md</h6>
                                    <small class="fw-bold text-warning">Bidang Sarpas</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <div class="card border-0 shadow h-100 overflow-hidden position-relative rounded-3 group-hover-effect">
                                <div style="height: 320px; overflow: hidden;">
                                    <img src="<?= base_url('assets/img/staf2.png') ?>" class="w-100 h-100 transition-zoom" style="object-fit: cover;" alt="Dyah Oktaviani">
                                </div>
                                <div class="position-absolute bottom-0 start-50 translate-middle-x w-85 mb-3 bg-white rounded-3 shadow-sm text-center p-2" style="z-index: 2; width: 85%;">
                                    <h6 class="fw-bold mb-1" style="font-size: 13px; color: #102a43;">Dyah Oktaviani, S.E</h6>
                                    <small class="fw-bold text-warning">Bidang Kesiswaan</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <div class="card border-0 shadow h-100 overflow-hidden position-relative rounded-3 group-hover-effect">
                                <div style="height: 320px; overflow: hidden;">
                                    <img src="<?= base_url('assets/img/staf3.png') ?>" class="w-100 h-100 transition-zoom" style="object-fit: cover;" alt="Eny Fauziwati">
                                </div>
                                <div class="position-absolute bottom-0 start-50 translate-middle-x w-85 mb-3 bg-white rounded-3 shadow-sm text-center p-2" style="z-index: 2; width: 85%;">
                                    <h6 class="fw-bold mb-1" style="font-size: 13px; color: #102a43;">Eny Fauziwati, A.Md</h6>
                                    <small class="fw-bold text-warning">Agendaris</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#guruCarousel" data-bs-slide="prev" style="width: 5%; left: -20px;">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(1);"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#guruCarousel" data-bs-slide="next" style="width: 5%; right: -20px;">
                <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(1);"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
        <div class="text-center mt-2">
            <a href="<?= base_url('dashboard/guru') ?>" 
               class="btn bg-white fw-bold shadow px-4 py-2 me-3" 
               style="min-width: 130px; color: #102a43;">
                Guru
            </a>
            
            <a href="<?= base_url('dashboard/karyawan') ?>" 
               class="btn bg-white fw-bold shadow px-4 py-2" 
               style="min-width: 180px; color: #102a43;">
                Staff/Karyawan
            </a>
        </div>

    </div>
</div>

<style>
    .transition-zoom { transition: transform 0.5s ease; }
    .group-hover-effect:hover .transition-zoom { transform: scale(1.05); }
    @media (max-width: 768px) {
        .carousel-control-prev { left: 0 !important; }
        .carousel-control-next { right: 0 !important; }
    }
</style>

<div id="kontak" class="py-5 bg-white" style="scroll-margin-top: 80px;">
    <div class="container position-relative">
        
        <div class="text-center mb-3">
            <h3 class="fw-bold text-uppercase" style="color: #102a43;">Hubungi Kami</h3>
            <div style="width: 60px; height: 3px; background-color: #ffc107; margin: 10px auto;"></div>
        </div>

        <div class="row align-items-center">
            
            <div class="col-md-6 mb-4">
                <h5 class="fw-bold mb-3" style="color: #102a43;">Denah Lokasi</h5>
                <div class="shadow-sm p-1 bg-white border rounded">
                    <iframe 
                        width="100%" 
                        height="350" 
                        style="border:0;" 
                        loading="lazy" 
                        allowfullscreen
                        referrerpolicy="no-referrer-when-downgrade"
                        src="https://maps.google.com/maps?q=SMA%20Negeri%201%20Batangan%2C%20Jl.%20Raya%20Juwana%20-%20Rembang%2C%20Jembangan%2C%20Kec.%20Batangan%2C%20Kabupaten%20Pati%2C%20Jawa%20Tengah%2059186&t=&z=15&ie=UTF8&iwloc=&output=embed">
                    </iframe>
                </div>
            </div>

            <div class="col-md-6 mb-4 ps-md-5">
                <h5 class="fw-bold mb-4" style="color: #102a43;">Kontak</h5>
                

                <div class="d-flex mb-3 align-items-start">
                    <div class="me-3 text-center" style="width: 30px;">
                        <i class="bi bi-geo-alt-fill fs-4" style="color: #102a43;"></i>
                    </div>
                    <div>
                        <span class="fw-bold d-block text-dark">Alamat</span>
                        <span class="text-secondary small">Jalan Raya Batangan No. 1, Batangan Kidul, Kec. Batangan, Kab. Pati, Jawa Tengah 59186</span>
                    </div>
                </div>

                <div class="d-flex mb-3 align-items-start">
                    <div class="me-3 text-center" style="width: 30px;">
                        <i class="bi bi-telephone-fill fs-4" style="color: #102a43;"></i>
                    </div>
                    <div>
                        <span class="fw-bold d-block text-dark">Telepon</span>
                        <span class="text-secondary small">(0295) 4745662</span>
                    </div>
                </div>

                <div class="d-flex mb-3 align-items-start">
                    <div class="me-3 text-center" style="width: 30px;">
                        <i class="bi bi-envelope-fill fs-4" style="color: #102a43;"></i>
                    </div>
                    <div>
                        <span class="fw-bold d-block text-dark">Email</span>
                        <span class="text-secondary small">admin@sman1batangan.sch.id</span>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<footer class="text-white py-4 text-center" style="background-color: #102a43; border-top: 1px solid rgba(255,255,255,0.1);">
    <div class="container">
        <small>© 2026 <strong>SMA Negeri 1 Batangan</strong>. All Rights Reserved.</small>
    </div>
</footer>