<div class="position-relative w-100">
    <img src="<?= base_url('assets/img/halaman1.jpg') ?>" class="w-100" style="height: 100vh; object-fit: cover; filter: brightness(0.6);" alt="Gedung Sekolah">
    
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
                    <div class="d-flex align-items-center">
                         <div class="flex-shrink-0 bg-light text-dark border text-center rounded d-flex flex-column justify-content-center" style="width: 60px; height: 60px;">
                            <span class="fw-bold fs-5">05</span>
                            <span style="font-size: 10px;">FEB</span>
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0 fw-bold text-dark">Peringatan Israk Mikraj</h6>
                            <small class="text-muted">Masjid Sekolah</small>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white border-0 pb-3">
                    <a href="#" class="text-warning fw-bold text-decoration-none">Lihat Detail >></a>
                </div>
            </div>
        </div>

        <div class="col-lg-5 col-md-12 mb-4">
            <h5 class="fw-bold mb-3 border-start border-4 border-warning ps-2" style="color: #102a43;">SAMBUTAN KEPALA SEKOLAH</h5>
            
            <div class="card border-0 bg-light p-3 shadow-sm h-100">
                <div class="mb-3 rounded overflow-hidden" style="height: 200px; width: 100%; background-color: #ccc;">
                     <?php if(file_exists('assets/img/kepsek.jpg')): ?>
                        <img src="<?= base_url('assets/img/kepsek.jpg') ?>" class="w-100 h-100" style="object-fit: cover;" alt="Kepala Sekolah">
                     <?php else: ?>
                        <div class="d-flex align-items-center justify-content-center h-100 text-muted">FOTO KEPALA SEKOLAH</div>
                     <?php endif; ?>
                </div>

                <div class="card-body p-0">
                    <h6 class="fw-bold">Lasmin, S.Pd, M.Pd</h6>
                    <p class="text-muted small mb-2">Kepala Sekolah SMA Negeri 1 Batangan</p>
                    <p class="card-text text-secondary" style="text-align: justify; font-size: 14px;">
                        Assalamualaikum Warahmatullahi Wabarakatuh. Selamat datang di website resmi SMA Negeri 1 Batangan. Kami berkomitmen untuk memberikan layanan pendidikan terbaik...
                     <a href="#" class="text-warning fw-bold text-decoration-none">Lihat Detail >></a>
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
        </div>

        <div class="row">
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm rounded-3">
                    <div style="height: 220px; overflow: hidden;">
                        <img src="<?= base_url('assets/img/berita1.png') ?>" class="card-img-top w-100 h-100" style="object-fit: cover;" alt="Berita 1">
                    </div>
                    
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title fw-bold text-uppercase mb-3" style="font-size: 16px; line-height: 1.5;">
                            <a href="#" class="text-decoration-none" style="color: #102a43;">
                                Serah Terima Jabatan Kepala SMA Negeri 1 Batangan
                            </a>
                        </h5>
                        
                        <p class="card-text text-secondary small mb-4 flex-grow-1" style="line-height: 1.6;">
                            SMA Negeri 1 Batangan mengadakan acara Serah Terima Jabatan Kepala Sekolah pada Kamis, 13 November 2025, bertempat di aula sekolah.
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
                        <img src="<?= base_url('assets/img/berita2.jpg') ?>" class="card-img-top w-100 h-100" style="object-fit: cover;" alt="Berita 2">
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title fw-bold text-uppercase mb-3" style="font-size: 16px; line-height: 1.5;">
                            <a href="#" class="text-decoration-none" style="color: #102a43;">
                                Kunjungan Studi Banding Dari SMA Se-Jawa Tengah
                            </a>
                        </h5>
                        
                        <p class="card-text text-secondary small mb-4 flex-grow-1" style="line-height: 1.6;">
                            SMABA menerima kunjungan kehormatan dalam rangka berbagi praktik baik implementasi kurikulum merdeka di lingkungan sekolah.
                        </p>
                        
                        <div class="text-muted small border-top pt-3 d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3 me-2" viewBox="0 0 16 16">
                              <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                              <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                            </svg>
                            08 November 2025
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm rounded-3">
                    <div style="height: 220px; overflow: hidden;">
                        <img src="<?= base_url('assets/img/berita3.jpg') ?>" class="card-img-top w-100 h-100" style="object-fit: cover;" alt="Berita 3">
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="card-title fw-bold text-uppercase mb-3" style="font-size: 16px; line-height: 1.5;">
                            <a href="#" class="text-decoration-none" style="color: #102a43;">
                                Upacara Peringatan Hari Pahlawan 2025
                            </a>
                        </h5>
                        
                        <p class="card-text text-secondary small mb-4 flex-grow-1" style="line-height: 1.6;">
                            Seluruh warga sekolah mengikuti upacara bendera dengan khidmat untuk mengenang jasa para pahlawan yang telah gugur.
                        </p>
                        
                        <div class="text-muted small border-top pt-3 d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3 me-2" viewBox="0 0 16 16">
                              <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                              <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                            </svg>
                            10 November 2025
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
                            <img src="<?= base_url('assets/img/prestasi1.jpg') ?>" class="img-fluid h-100 w-100" style="object-fit: cover; min-height: 250px;" alt="Juara Silat">
                        </div>
                        
                        <div class="col-md-7">
                            <div class="card-body d-flex flex-column h-100 p-4 justify-content-center">
                                <span class="badge bg-warning text-dark mb-3 px-3 py-2 w-auto align-self-start rounded-pill">Tingkat Nasional</span>
                                
                                <h5 class="card-title fw-bold mb-3" style="color: #102a43; font-size: 1.25rem;">
                                    Juara 1 Lomba Pencak Silat Nasional
                                </h5>
                                
                                <p class="card-text text-secondary mb-4" style="font-size: 0.9rem; line-height: 1.6;">
                                    Ananda Rizky berhasil mengharumkan nama sekolah dengan meraih medali emas pada kejuaraan...
                                    <a href="#" class="text-warning fw-bold text-decoration-none">Lihat Detail >></a>
                                </p>
                                
                                <p class="card-text mt-auto text-muted small border-top pt-3 d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3 me-2" viewBox="0 0 16 16">
                                      <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                                      <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                    </svg>
                                    21 Desember 2025
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
                            <img src="<?= base_url('assets/img/prestasi2.jpg') ?>" class="img-fluid h-100 w-100" style="object-fit: cover; min-height: 250px;" alt="Juara Dayung">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body d-flex flex-column h-100 p-4 justify-content-center">
                                <span class="badge bg-primary mb-3 px-3 py-2 w-auto align-self-start rounded-pill">Tingkat Provinsi</span>
                                
                                <h5 class="card-title fw-bold mb-3" style="color: #102a43; font-size: 1.25rem;">
                                    Juara 1 Lomba Dayung Provinsi
                                </h5>
                                
                                <p class="card-text text-secondary mb-4" style="font-size: 0.9rem; line-height: 1.6;">
                                    Tim Dayung SMABA sukses menyabet juara pertama dalam ajang Pekan Olahraga Pelajar...
                                    <a href="#" class="text-warning fw-bold text-decoration-none">Lihat Detail >></a>
                                </p>
                                
                                <p class="card-text mt-auto text-muted small border-top pt-3 d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3 me-2" viewBox="0 0 16 16">
                                      <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                                      <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                    </svg>
                                    15 November 2025
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="text-center mt-5">
            <a href="<?= base_url('dashboard/prestasi') ?>"
             class="btn btn-outline-dark rounded-pill px-5 py-2 fw-bold shadow-sm" style="border-width: 2px;">
                Lihat Semua Prestasi
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
                <div class="card border-0 h-100 shadow-sm rounded-0">
                    <div style="height: 250px; overflow: hidden;">
                        <img src="<?= base_url('assets/img/publikasi1.jpg') ?>" class="w-100 h-100 object-fit-cover hover-zoom" alt="Puisi">
                    </div>
                    <div class="card-body p-3" style="background-color: #e9ecef;">
                        <h6 class="fw-bold text-uppercase mb-2" style="color: #102a43; font-size: 14px; min-height: 40px;">
                            Benang Merah Sepanggal Detik
                        </h6>
                        <hr class="my-2" style="border-top: 1px solid #102a43; opacity: 0.3;">
                        <div class="d-flex align-items-center mb-2 text-dark" style="font-size: 12px;">
                            <i class="bi bi-person-fill me-2 fs-6"></i> <span>Tia Puspita Sari/ XII IPA</span>
                        </div>
                        <div class="d-flex align-items-center mb-2 text-dark" style="font-size: 12px;">
                            <i class="bi bi-collection-fill me-2 fs-6"></i> <span>Puisi</span>
                        </div>
                        <div class="d-flex align-items-center text-dark" style="font-size: 12px;">
                            <i class="bi bi-calendar3 me-2 fs-6"></i> <span>13 November 2025</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card border-0 h-100 shadow-sm rounded-0">
                    <div style="height: 250px; overflow: hidden;">
                        <img src="<?= base_url('assets/img/publikasi2.jpg') ?>" class="w-100 h-100 object-fit-cover hover-zoom" alt="Lukisan">
                    </div>
                    <div class="card-body p-3" style="background-color: #e9ecef;">
                        <h6 class="fw-bold text-uppercase mb-2" style="color: #102a43; font-size: 14px; min-height: 40px;">
                            Pemandangan Gunung Malam Hari
                        </h6>
                        <hr class="my-2" style="border-top: 1px solid #102a43; opacity: 0.3;">
                        <div class="d-flex align-items-center mb-2 text-dark" style="font-size: 12px;">
                            <i class="bi bi-person-fill me-2 fs-6"></i> <span>Luvina Agita Rani/ XI IPS</span>
                        </div>
                        <div class="d-flex align-items-center mb-2 text-dark" style="font-size: 12px;">
                            <i class="bi bi-collection-fill me-2 fs-6"></i> <span>Lukisan</span>
                        </div>
                        <div class="d-flex align-items-center text-dark" style="font-size: 12px;">
                            <i class="bi bi-calendar3 me-2 fs-6"></i> <span>4 Desember 2025</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card border-0 h-100 shadow-sm rounded-0">
                    <div style="height: 250px; overflow: hidden;">
                        <img src="<?= base_url('assets/img/publikasi3.jpg') ?>" class="w-100 h-100 object-fit-cover hover-zoom" alt="Maket">
                    </div>
                    <div class="card-body p-3" style="background-color: #e9ecef;">
                        <h6 class="fw-bold text-uppercase mb-2" style="color: #102a43; font-size: 14px; min-height: 40px;">
                            Maket Rumah Kayu Minimalis
                        </h6>
                        <hr class="my-2" style="border-top: 1px solid #102a43; opacity: 0.3;">
                        <div class="d-flex align-items-center mb-2 text-dark" style="font-size: 12px;">
                            <i class="bi bi-person-fill me-2 fs-6"></i> <span>Axel Candra Adi/ X</span>
                        </div>
                        <div class="d-flex align-items-center mb-2 text-dark" style="font-size: 12px;">
                            <i class="bi bi-collection-fill me-2 fs-6"></i> <span>Kerajinan</span>
                        </div>
                        <div class="d-flex align-items-center text-dark" style="font-size: 12px;">
                            <i class="bi bi-calendar3 me-2 fs-6"></i> <span>25 Desember 2025</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card border-0 h-100 shadow-sm rounded-0">
                    <div style="height: 250px; overflow: hidden;">
                        <img src="<?= base_url('assets/img/publikasi4.jpg') ?>" class="w-100 h-100 object-fit-cover hover-zoom" alt="Poster">
                    </div>
                    <div class="card-body p-3" style="background-color: #e9ecef;">
                        <h6 class="fw-bold text-uppercase mb-2" style="color: #102a43; font-size: 14px; min-height: 40px;">
                            Poster Hari Guru Nasional
                        </h6>
                        <hr class="my-2" style="border-top: 1px solid #102a43; opacity: 0.3;">
                        <div class="d-flex align-items-center mb-2 text-dark" style="font-size: 12px;">
                            <i class="bi bi-person-fill me-2 fs-6"></i> <span>Akbar Ibrahim/ XII IPA</span>
                        </div>
                        <div class="d-flex align-items-center mb-2 text-dark" style="font-size: 12px;">
                            <i class="bi bi-collection-fill me-2 fs-6"></i> <span>Poster</span>
                        </div>
                        <div class="d-flex align-items-center text-dark" style="font-size: 12px;">
                            <i class="bi bi-calendar3 me-2 fs-6"></i> <span>25 November 2025</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="text-center mt-5">
            <a href="<?= base_url('dashboard/karya_murid') ?>" 
               class="btn btn-light px-4 py-2 fw-bold rounded-1 shadow-sm" 
               style="color: #102a43;">
               Tampilkan Semua Karya
            </a>
        </div>

    </div>
</div>


<div class="py-5 bg-white">
    <div class="container">
        
        <div class="text-center mb-5">
            <h3 class="fw-bold text-uppercase" style="color: #102a43;">Ekstrakurikuler</h3>
            <div style="width: 60px; height: 3px; background-color: #ffc107; margin: 10px auto;"></div>
        </div>

        <div class="row g-4">
            
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow card-hover">
                    <div style="height: 200px; overflow: hidden;">
                        <img src="<?= base_url('assets/img/ekskul1.jpg') ?>" class="card-img-top hover-zoom w-100 h-100 object-fit-cover" alt="Pramuka">
                    </div>
                    <div class="card-body text-white" style="background-color: #102a43;">
                        <h5 class="card-title fw-bold text-uppercase">PRAMUKA</h5>
                        <p class="card-text small" style="opacity: 0.8;">Kegiatan kepramukaan untuk membentuk karakter dan kemandirian siswa.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow card-hover">
                    <div style="height: 200px; overflow: hidden;">
                        <img src="<?= base_url('assets/img/ekskul2.jpg') ?>" class="card-img-top hover-zoom w-100 h-100 object-fit-cover" alt="Basket">
                    </div>
                    <div class="card-body text-white" style="background-color: #102a43;">
                        <h5 class="card-title fw-bold text-uppercase">BASKET</h5>
                        <p class="card-text small" style="opacity: 0.8;">Mengembangkan bakat olahraga bola basket dan kerjasama tim.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow card-hover">
                    <div style="height: 200px; overflow: hidden;">
                        <img src="<?= base_url('assets/img/ekskul3.jpg') ?>" class="card-img-top hover-zoom w-100 h-100 object-fit-cover" alt="Paskibra">
                    </div>
                    <div class="card-body text-white" style="background-color: #102a43;">
                        <h5 class="card-title fw-bold text-uppercase">PASKIBRA</h5>
                        <p class="card-text small" style="opacity: 0.8;">Pasukan Pengibar Bendera Pusaka dengan kedisiplinan tinggi.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow card-hover">
                    <div style="height: 200px; overflow: hidden;">
                        <img src="<?= base_url('assets/img/ekskul4.jpg') ?>" class="card-img-top hover-zoom w-100 h-100 object-fit-cover" alt="PMR">
                    </div>
                    <div class="card-body text-white" style="background-color: #102a43;">
                        <h5 class="card-title fw-bold text-uppercase">PMR</h5>
                        <p class="card-text small" style="opacity: 0.8;">Melatih keterampilan pertolongan pertama dan kepedulian sosial.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow card-hover">
                    <div style="height: 200px; overflow: hidden;">
                        <img src="<?= base_url('assets/img/ekskul5.jpg') ?>" class="card-img-top hover-zoom w-100 h-100 object-fit-cover" alt="Musik">
                    </div>
                    <div class="card-body text-white" style="background-color: #102a43;">
                        <h5 class="card-title fw-bold text-uppercase">MUSIK</h5>
                        <p class="card-text small" style="opacity: 0.8;">Melatih agar keterampilan musik semakin meningkat.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow card-hover">
                    <div style="height: 200px; overflow: hidden;">
                        <img src="<?= base_url('assets/img/ekskul6.jpg') ?>" class="card-img-top hover-zoom w-100 h-100 object-fit-cover" alt="Seni Tari">
                    </div>
                    <div class="card-body text-white" style="background-color: #102a43;">
                        <h5 class="card-title fw-bold text-uppercase">SENI TARI</h5>
                        <p class="card-text small" style="opacity: 0.8;">Melestarikan budaya tradisional melalui seni tari daerah.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<style>
    /* Transisi Halus */
    .hover-zoom { 
        transition: transform 0.4s ease; 
    }
    
    /* Efek Zoom saat card di-hover */
    .card:hover .hover-zoom { 
        transform: scale(1.1); 
    }
    
    /* Agar Sudut Card Runcing (Karya Murid) */
    .rounded-0 { 
        border-radius: 0 !important; 
    }
    
    /* Agar Gambar Ekskul pas */
    .object-fit-cover {
        object-fit: cover;
    }
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
                                    <img src="<?= base_url('assets/img/guru1.jpg') ?>" class="w-100 h-100 transition-zoom" style="object-fit: cover;" alt="Guru 1">
                                </div>
                                <div class="position-absolute bottom-0 start-50 translate-middle-x w-85 mb-3 bg-white rounded-3 shadow-sm text-center p-2" style="z-index: 2; width: 85%;">
                                    <h6 class="fw-bold mb-1 text-dark" style="font-size: 14px;">Yuhana Kristin</h6>
                                    <small class="fw-bold text-warning">Matematika</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <div class="card border-0 shadow h-100 overflow-hidden position-relative rounded-3 group-hover-effect">
                                <div style="height: 320px; overflow: hidden;">
                                    <img src="<?= base_url('assets/img/guru1.jpg') ?>" class="w-100 h-100 transition-zoom" style="object-fit: cover;" alt="Guru 2">
                                </div>
                                <div class="position-absolute bottom-0 start-50 translate-middle-x w-85 mb-3 bg-white rounded-3 shadow-sm text-center p-2" style="z-index: 2; width: 85%;">
                                    <h6 class="fw-bold mb-1 text-dark" style="font-size: 14px;">Budi Santoso</h6>
                                    <small class="fw-bold text-warning">B. Indonesia</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <div class="card border-0 shadow h-100 overflow-hidden position-relative rounded-3 group-hover-effect">
                                <div style="height: 320px; overflow: hidden;">
                                    <img src="<?= base_url('assets/img/guru1.jpg') ?>" class="w-100 h-100 transition-zoom" style="object-fit: cover;" alt="Guru 3">
                                </div>
                                <div class="position-absolute bottom-0 start-50 translate-middle-x w-85 mb-3 bg-white rounded-3 shadow-sm text-center p-2" style="z-index: 2; width: 85%;">
                                    <h6 class="fw-bold mb-1 text-dark" style="font-size: 14px;">Siti Aminah</h6>
                                    <small class="fw-bold text-warning">Biologi</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <div class="card border-0 shadow h-100 overflow-hidden position-relative rounded-3 group-hover-effect">
                                <div style="height: 320px; overflow: hidden;">
                                    <img src="<?= base_url('assets/img/guru1.jpg') ?>" class="w-100 h-100 transition-zoom" style="object-fit: cover;" alt="Guru 4">
                                </div>
                                <div class="position-absolute bottom-0 start-50 translate-middle-x w-85 mb-3 bg-white rounded-3 shadow-sm text-center p-2" style="z-index: 2; width: 85%;">
                                    <h6 class="fw-bold mb-1 text-dark" style="font-size: 14px;">Rahmat Hidayat</h6>
                                    <small class="fw-bold text-warning">Informatika</small>
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
                                    <img src="<?= base_url('assets/img/guru1.jpg') ?>" class="w-100 h-100 transition-zoom" style="object-fit: cover;" alt="Guru 5">
                                </div>
                                <div class="position-absolute bottom-0 start-50 translate-middle-x w-85 mb-3 bg-white rounded-3 shadow-sm text-center p-2" style="z-index: 2; width: 85%;">
                                    <h6 class="fw-bold mb-1 text-dark" style="font-size: 14px;">Agus Setiawan</h6>
                                    <small class="fw-bold text-warning">Penjaskes</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <div class="card border-0 shadow h-100 overflow-hidden position-relative rounded-3 group-hover-effect">
                                <div style="height: 320px; overflow: hidden;">
                                    <img src="<?= base_url('assets/img/guru1.jpg') ?>" class="w-100 h-100 transition-zoom" style="object-fit: cover;" alt="Guru 6">
                                </div>
                                <div class="position-absolute bottom-0 start-50 translate-middle-x w-85 mb-3 bg-white rounded-3 shadow-sm text-center p-2" style="z-index: 2; width: 85%;">
                                    <h6 class="fw-bold mb-1 text-dark" style="font-size: 14px;">Dewi Lestari</h6>
                                    <small class="fw-bold text-warning">B. Inggris</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <div class="card border-0 shadow h-100 overflow-hidden position-relative rounded-3 group-hover-effect">
                                <div style="height: 320px; overflow: hidden;">
                                    <img src="<?= base_url('assets/img/guru1.jpg') ?>" class="w-100 h-100 transition-zoom" style="object-fit: cover;" alt="Guru 7">
                                </div>
                                <div class="position-absolute bottom-0 start-50 translate-middle-x w-85 mb-3 bg-white rounded-3 shadow-sm text-center p-2" style="z-index: 2; width: 85%;">
                                    <h6 class="fw-bold mb-1 text-dark" style="font-size: 14px;">Rina Wati</h6>
                                    <small class="fw-bold text-warning">Kimia</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <div class="card border-0 shadow h-100 overflow-hidden position-relative rounded-3 group-hover-effect">
                                <div style="height: 320px; overflow: hidden;">
                                    <img src="<?= base_url('assets/img/guru1.jpg') ?>" class="w-100 h-100 transition-zoom" style="object-fit: cover;" alt="Guru 8">
                                </div>
                                <div class="position-absolute bottom-0 start-50 translate-middle-x w-85 mb-3 bg-white rounded-3 shadow-sm text-center p-2" style="z-index: 2; width: 85%;">
                                    <h6 class="fw-bold mb-1 text-dark" style="font-size: 14px;">Joko Anwar</h6>
                                    <small class="fw-bold text-warning">Seni Budaya</small>
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
                                    <img src="<?= base_url('assets/img/guru1.jpg') ?>" class="w-100 h-100 transition-zoom" style="object-fit: cover;" alt="Guru 9">
                                </div>
                                <div class="position-absolute bottom-0 start-50 translate-middle-x w-85 mb-3 bg-white rounded-3 shadow-sm text-center p-2" style="z-index: 2; width: 85%;">
                                    <h6 class="fw-bold mb-1 text-dark" style="font-size: 14px;">Lestari Puji</h6>
                                    <small class="fw-bold text-warning">Fisika</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <div class="card border-0 shadow h-100 overflow-hidden position-relative rounded-3 group-hover-effect">
                                <div style="height: 320px; overflow: hidden;">
                                    <img src="<?= base_url('assets/img/guru1.jpg') ?>" class="w-100 h-100 transition-zoom" style="object-fit: cover;" alt="Guru 10">
                                </div>
                                <div class="position-absolute bottom-0 start-50 translate-middle-x w-85 mb-3 bg-white rounded-3 shadow-sm text-center p-2" style="z-index: 2; width: 85%;">
                                    <h6 class="fw-bold mb-1 text-dark" style="font-size: 14px;">Doni Tata</h6>
                                    <small class="fw-bold text-warning">Sejarah</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <div class="card border-0 shadow h-100 overflow-hidden position-relative rounded-3 group-hover-effect">
                                <div style="height: 320px; overflow: hidden;">
                                    <img src="<?= base_url('assets/img/guru1.jpg') ?>" class="w-100 h-100 transition-zoom" style="object-fit: cover;" alt="Guru 11">
                                </div>
                                <div class="position-absolute bottom-0 start-50 translate-middle-x w-85 mb-3 bg-white rounded-3 shadow-sm text-center p-2" style="z-index: 2; width: 85%;">
                                    <h6 class="fw-bold mb-1 text-dark" style="font-size: 14px;">Eka Putri</h6>
                                    <small class="fw-bold text-warning">PAI</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <div class="card border-0 shadow h-100 overflow-hidden position-relative rounded-3 group-hover-effect">
                                <div style="height: 320px; overflow: hidden;">
                                    <img src="<?= base_url('assets/img/guru1.jpg') ?>" class="w-100 h-100 transition-zoom" style="object-fit: cover;" alt="Guru 12">
                                </div>
                                <div class="position-absolute bottom-0 start-50 translate-middle-x w-85 mb-3 bg-white rounded-3 shadow-sm text-center p-2" style="z-index: 2; width: 85%;">
                                    <h6 class="fw-bold mb-1 text-dark" style="font-size: 14px;">Fajar Nugraha</h6>
                                    <small class="fw-bold text-warning">Sosiologi</small>
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
            <a href="<?= base_url('dashboard/guru') ?>" class="btn bg-white text-dark fw-bold shadow px-4 py-2 me-3" style="min-width: 180px; border-radius: 5px;">
                Tenaga Pendidik
            </a>
            
            <a href="<?= base_url('dashboard/karyawan') ?>" class="btn bg-white text-dark fw-bold shadow px-4 py-2" style="min-width: 180px; border-radius: 5px;">
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
        
        <div class="text-center mb-5">
            <h3 class="fw-bold text-uppercase" style="color: #102a43;">Hubungi Kami</h3>
            <div style="width: 60px; height: 3px; background-color: #ffc107; margin: 10px auto;"></div>
        </div>

        <div class="row align-items-center">
            
            <div class="col-md-6 mb-4">
                <h5 class="fw-bold mb-3" style="color: #102a43;">Denah Lokasi</h5>
                <div class="shadow-sm p-1 bg-white border rounded">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.267803666286!2d111.1788!3d-6.8585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7737e6f8515c3d%3A0x6a1005167554f60!2sSMA%20Negeri%201%20Batangan!5e0!3m2!1sid!2sid!4v1689000000000!5m2!1sid!2sid" 
                        width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <div class="col-md-6 mb-4 ps-md-5">
                <h5 class="fw-bold mb-4" style="color: #102a43;">Kontak</h5>
                
                <div class="mb-4">
                    <h6 class="fw-bold text-dark">SMA NEGERI 1 BATANGAN</h6>
                    <p class="text-muted small">Mewujudkan generasi yang unggul, berkarakter, dan berwawasan global.</p>
                </div>

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