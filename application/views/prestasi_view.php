<?php
// --- PENANGANAN ERROR (DEFENSIVE CODING) ---
$kategori_selected = isset($kategori_selected) ? $kategori_selected : 'semua';
$data_prestasi = isset($data_prestasi) ? $data_prestasi : [];
$total_pages = isset($total_pages) ? $total_pages : 0;
$current_page = isset($current_page) ? $current_page : 1;
?>

<div class="bg-white pt-4 pb-2">
    <div class="container">
        <div class="rounded-3 px-4 py-3" style="background-color: #e9ecef;">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                <div class="d-flex align-items-center" style="font-size: 14px;">
                    <a href="<?= base_url() ?>" class="text-decoration-none fw-bold text-dark d-flex align-items-center">
                        <i class="bi bi-house-door-fill me-2 fs-6"></i> Home
                    </a>
                    <span class="mx-3" style="width: 10px; height: 10px; border: 3px solid #ffc107; border-radius: 50%; display: inline-block;"></span>
                    <span class="text-secondary">Prestasi Sekolah</span>
                </div>
                
                <div class="dropdown d-block d-md-none">
                    <button class="btn btn-sm btn-outline-dark dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        Kategori: <?= ucfirst($kategori_selected) ?>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= base_url('dashboard/prestasi/1/semua') ?>">Semua</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('dashboard/prestasi/1/akademik') ?>">Akademik</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('dashboard/prestasi/1/non-akademik') ?>">Non-Akademik</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-white">
    <div class="container">
        
        <div class="text-center mb-5">
            <h3 class="fw-bold text-uppercase" style="color: #102a43;">Galeri Prestasi</h3>
            <div style="width: 60px; height: 3px; background-color: #ffc107; margin: 10px auto;"></div>
            <p class="text-muted">Jejak langkah keberhasilan siswa-siswi SMAN 1 Batangan.</p>
        </div>

        <div class="d-none d-md-flex justify-content-center mb-5">
            <div class="btn-group shadow-sm" role="group">
                <a href="<?= base_url('dashboard/prestasi/1/semua') ?>" 
                   class="btn px-4 py-2 fw-bold <?= ($kategori_selected == 'semua') ? 'btn-dark' : 'btn-outline-dark' ?>" 
                   style="<?= ($kategori_selected == 'semua') ? 'background-color: #102a43;' : '' ?>">
                   Semua
                </a>
                <a href="<?= base_url('dashboard/prestasi/1/akademik') ?>" 
                   class="btn px-4 py-2 fw-bold <?= ($kategori_selected == 'akademik') ? 'btn-dark' : 'btn-outline-dark' ?>"
                   style="<?= ($kategori_selected == 'akademik') ? 'background-color: #102a43;' : '' ?>">
                   Akademik
                </a>
                <a href="<?= base_url('dashboard/prestasi/1/non-akademik') ?>" 
                   class="btn px-4 py-2 fw-bold <?= ($kategori_selected == 'non-akademik') ? 'btn-dark' : 'btn-outline-dark' ?>"
                   style="<?= ($kategori_selected == 'non-akademik') ? 'background-color: #102a43;' : '' ?>">
                   Non-Akademik
                </a>
            </div>
        </div>

        <div class="row g-4">
            <?php if(!empty($data_prestasi)): ?>
                <?php foreach($data_prestasi as $index => $item): ?>
                <?php 
                    $real_id = $index + (($current_page - 1) * 6); 
                    $id_link = isset($item['id']) ? $item['id'] : $real_id;
                ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-up rounded-4 overflow-hidden">
                        <div class="position-relative overflow-hidden" style="height: 240px;">
                            <img src="<?= base_url('assets/img/' . ($item['gambar'] ?? 'placeholder.jpg')) ?>" 
                                 class="w-100 h-100 object-fit-cover transition-zoom" 
                                 alt="<?= $item['judul'] ?? 'Prestasi' ?>"
                                 onerror="this.src='https://placehold.co/400x300?text=Foto+Prestasi'">
                            
                            <div class="position-absolute top-0 start-0 m-3">
                                <span class="badge bg-white text-dark shadow-sm px-3 py-2 rounded-pill fw-bold text-uppercase" style="font-size: 11px;">
                                    <?= $item['kategori'] ?? '-' ?>
                                </span>
                            </div>

                            <div class="position-absolute bottom-0 end-0 m-3">
                                <?php 
                                    $juara_text = $item['juara'] ?? '';
                                    $badge_color = 'bg-warning text-dark'; 
                                    $icon = 'bi-trophy-fill';

                                    if (preg_match('/2|perak/i', $juara_text)) { $badge_color = 'bg-secondary text-white'; } 
                                    elseif (preg_match('/3|perunggu/i', $juara_text)) { $badge_color = 'bg-danger text-white'; }
                                    elseif (stripos($juara_text, 'Terpilih') !== false) { $badge_color = 'bg-info text-white'; $icon = 'bi-patch-check-fill'; }
                                ?>
                                <span class="badge <?= $badge_color ?> shadow px-3 py-2 rounded-2 fw-bold d-flex align-items-center">
                                    <i class="bi <?= $icon ?> me-1"></i> <?= $juara_text ?>
                                </span>
                            </div>
                        </div>

                        <div class="card-body p-4 d-flex flex-column">
                            <div class="d-flex align-items-center text-muted small mb-2">
                                <i class="bi bi-calendar-event me-2 text-warning"></i> <?= $item['tanggal'] ?? '-' ?>
                                <span class="mx-2">•</span>
                                <i class="bi bi-geo-alt me-1"></i> <?= $item['tingkat'] ?? '-' ?>
                            </div>
                            <h5 class="fw-bold mb-3">
                                <a href="<?= base_url('dashboard/detail_prestasi/' . $id_link) ?>" class="text-decoration-none text-dark stretched-link title-hover">
                                    <?= $item['judul'] ?? 'Judul Tidak Tersedia' ?>
                                </a>
                            </h5>
                            <p class="text-dark small mb-3 line-clamp-3 flex-grow-1"><?= $item['deskripsi'] ?? '' ?></p>
                            <div class="d-flex align-items-center mt-auto border-top pt-3">
                                <div class="bg-light rounded-circle d-flex align-items-center justify-content-center text-dark fw-bold border" style="width: 35px; height: 35px; font-size: 12px;">
                                    <?= substr($item['nama_siswa'] ?? 'S', 0, 1) ?>
                                </div>
                                <div class="ms-2 lh-1">
                                    <span class="d-block fw-bold text-dark" style="font-size: 13px;"><?= $item['nama_siswa'] ?? 'Siswa' ?></span>
                                    <span class="text-muted" style="font-size: 11px;">Siswa Berprestasi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <?php if(isset($total_pages) && $total_pages > 1): ?>
        <nav aria-label="Page navigation" class="mt-5">
            <ul class="pagination justify-content-center border-0" style="gap: 8px;">
                <li class="page-item <?= ($current_page <= 1) ? 'disabled' : '' ?>">
                    <a class="page-link custom-pagination-item <?= ($current_page <= 1) ? 'text-muted' : 'text-dark' ?>" 
                       href="<?= ($current_page <= 1) ? '#' : base_url('dashboard/prestasi/' . ($current_page - 1) . '/' . $kategori_selected) ?>">Prev</a>
                </li>
                <?php for($i = 1; $i <= $total_pages; $i++): ?>
                <li class="page-item">
                    <a class="page-link custom-pagination-item <?= ($i == $current_page) ? 'active-item' : 'text-dark' ?>" 
                       href="<?= base_url('dashboard/prestasi/' . $i . '/' . $kategori_selected) ?>"><?= $i ?></a>
                </li>
                <?php endfor; ?>
                <li class="page-item <?= ($current_page >= $total_pages) ? 'disabled' : '' ?>">
                    <a class="page-link custom-pagination-item <?= ($current_page >= $total_pages) ? 'text-muted' : 'text-dark' ?>" 
                       href="<?= ($current_page >= $total_pages) ? '#' : base_url('dashboard/prestasi/' . ($current_page + 1) . '/' . $kategori_selected) ?>">Next</a>
                </li>
            </ul>
        </nav>
        <?php endif; ?>

    </div>
</div>

<style>
    /* Card Effects */
    .hover-up { transition: all 0.3s ease; }
    .hover-up:hover { transform: translateY(-8px); box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important; }
    .transition-zoom { transition: transform 0.5s ease; }
    .hover-up:hover .transition-zoom { transform: scale(1.1); }
    .title-hover:hover { color: #ffc107 !important; }
    .line-clamp-3 { display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; }

    /* Custom Square Pagination */
    .custom-pagination-item {
        border: 1px solid #dee2e6 !important;
        color: #333 !important;
        background-color: #fff !important;
        padding: 8px 16px !important;
        min-width: 45px;
        text-align: center;
        border-radius: 0 !important; /* Kotak Sempurna */
        font-weight: 500;
        transition: all 0.2s ease;
        box-shadow: none !important;
    }
    .active-item {
        background-color: #e9ecef !important; /* Abu-abu muda aktif */
        border-color: #dee2e6 !important;
        color: #102a43 !important;
        font-weight: bold;
    }
    .custom-pagination-item:hover:not(.active-item) {
        background-color: #f8f9fa !important;
    }
</style>

<div class="text-white py-4 text-center" style="background-color: #102a43;">
    <div class="container">
        <small class="fw-bold">© 2026 SMA Negeri 1 Batangan. All rights reserved.</small>
    </div>
</div>