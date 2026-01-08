<?php
// Defensive coding jika data kosong
$item = isset($prestasi) ? $prestasi : [];
?>

<div class="bg-white pt-4 pb-2">
    <div class="container">
        <div class="rounded-3 px-4 py-3" style="background-color: #e9ecef;">
            <div class="d-flex align-items-center" style="font-size: 14px;">
                <a href="<?= base_url() ?>" class="text-decoration-none fw-bold text-dark d-flex align-items-center">
                    <i class="bi bi-house-door-fill me-2 fs-6"></i> Home
                </a>
                <span class="mx-3" style="width: 10px; height: 10px; border: 3px solid #ffc107; border-radius: 50%; display: inline-block;"></span>
                <a href="<?= base_url('dashboard/prestasi') ?>" class="text-decoration-none text-dark">
                    Prestasi
                </a>
                <span class="mx-3" style="width: 10px; height: 10px; border: 3px solid #ffc107; border-radius: 50%; display: inline-block;"></span>
                <span class="text-secondary text-truncate" style="max-width: 200px;">
                    <?= $item['judul'] ?? 'Detail' ?>
                </span>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-white" style="min-height: 80vh;">
    <div class="container">
        
        <?php if(!empty($item)): ?>
            <div class="row g-5">
                
                <!-- KOLOM KIRI: GAMBAR & INFO UTAMA -->
                <div class="col-lg-5">
                    <div class="position-relative rounded-4 overflow-hidden shadow-lg mb-4">
                        <img src="<?= base_url('assets/img/' . ($item['gambar'] ?? 'placeholder.jpg')) ?>" 
                             class="w-100" 
                             style="height: 400px; object-fit: cover;" 
                             alt="<?= $item['judul'] ?? 'Prestasi' ?>"
                             onerror="this.src='https://placehold.co/600x800?text=Foto+Dokumentasi'">
                        
                        <!-- Overlay Gradient -->
                        <div class="position-absolute bottom-0 start-0 w-100 p-4" 
                             style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                            <span class="badge bg-warning text-dark mb-2"><?= $item['kategori'] ?? 'Umum' ?></span>
                            <h5 class="text-white fw-bold mb-0">Dokumentasi</h5>
                        </div>
                    </div>

                    <!-- Kotak Info Siswa -->
                    <div class="card border-0 shadow-sm rounded-4 p-4" style="background-color: #f8f9fa;">
                        <h6 class="fw-bold text-uppercase text-secondary mb-3" style="font-size: 12px; letter-spacing: 1px;">Siswa Berprestasi</h6>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 bg-white shadow-sm rounded-circle d-flex align-items-center justify-content-center text-dark fw-bold border" 
                                 style="width: 60px; height: 60px; font-size: 20px; color: #102a43;">
                                <?= substr($item['nama_siswa'] ?? 'S', 0, 1) ?>
                            </div>
                            <div class="ms-3">
                                <h5 class="fw-bold mb-1" style="color: #102a43;"><?= $item['nama_siswa'] ?? 'Siswa' ?></h5>
                                <div class="text-muted small">SMA Negeri 1 Batangan</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- KOLOM KANAN: DETAIL TEKS -->
                <div class="col-lg-7">
                    <div class="ps-lg-4">
                        
                        <!-- Tanggal & Tingkat -->
                        <div class="d-flex align-items-center flex-wrap gap-3 mb-4">
                            <div class="d-flex align-items-center text-muted fw-bold small bg-light px-3 py-2 rounded-pill border">
                                <i class="bi bi-calendar-check me-2 text-warning fs-6"></i>
                                <?= $item['tanggal'] ?? '-' ?>
                            </div>
                            <div class="d-flex align-items-center text-muted fw-bold small bg-light px-3 py-2 rounded-pill border">
                                <i class="bi bi-geo-alt-fill me-2 text-danger fs-6"></i>
                                Tingkat <?= $item['tingkat'] ?? '-' ?>
                            </div>
                        </div>

                        <!-- Judul Besar -->
                        <h1 class="fw-bold mb-4" style="color: #102a43; line-height: 1.3;">
                            <?= $item['judul'] ?? 'Judul Tidak Tersedia' ?>
                        </h1>

                        <!-- Badge Juara Besar -->
                        <div class="mb-5">
                            <?php 
                                $juara_text = $item['juara'] ?? '';
                                $badge_bg = 'bg-warning';
                                if(stripos($juara_text, '2') !== false) $badge_bg = 'bg-secondary text-white';
                                if(stripos($juara_text, '3') !== false) $badge_bg = 'bg-danger text-white';
                            ?>
                            <span class="badge <?= $badge_bg ?> text-dark fs-5 px-4 py-2 rounded-2 shadow-sm">
                                <i class="bi bi-trophy-fill me-2"></i> <?= $juara_text ?>
                            </span>
                        </div>

                        <hr class="mb-5" style="opacity: 0.1;">

                        <!-- Deskripsi -->
                        <h5 class="fw-bold mb-3" style="color: #102a43;">Deskripsi Kegiatan</h5>
                        <p class="text-secondary" style="font-size: 1.1rem; line-height: 1.8; text-align: justify;">
                            <?= $item['deskripsi'] ?? 'Tidak ada deskripsi tersedia.' ?>
                        </p>
                        
                        <p class="text-secondary mt-3" style="font-size: 1.1rem; line-height: 1.8; text-align: justify;">
                            Pencapaian ini merupakan hasil kerja keras dan dedikasi yang luar biasa. Semoga prestasi ini dapat menjadi motivasi bagi seluruh siswa SMA Negeri 1 Batangan untuk terus berkarya dan mengharumkan nama sekolah di kancah yang lebih tinggi.
                        </p>

                        <!-- Tombol Kembali -->
                        <div class="mt-5">
                            <a href="<?= base_url('dashboard/prestasi') ?>" class="btn btn-outline-dark px-4 py-2 rounded-pill fw-bold">
                                <i class="bi bi-arrow-left me-2"></i> Kembali ke Galeri
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        <?php else: ?>
            <!-- Jika Data Tidak Ditemukan -->
            <div class="text-center py-5">
                <div class="mb-3">
                    <i class="bi bi-search fs-1 text-muted"></i>
                </div>
                <h3 class="fw-bold text-dark">Data Prestasi Tidak Ditemukan</h3>
                <p class="text-muted">Maaf, data prestasi yang Anda cari tidak tersedia atau telah dihapus.</p>
                <a href="<?= base_url('dashboard/prestasi') ?>" class="btn btn-warning mt-3 px-4 fw-bold">Kembali</a>
            </div>
        <?php endif; ?>

    </div>
</div>

<div class="text-white py-4 text-center" style="background-color: #102a43;">
    <div class="container">
        <small class="fw-bold">@ 2026 SMA Negeri 1 Batangan. All rights reserved.</small>
    </div>
</div>