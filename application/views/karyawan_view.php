<div class="bg-white pt-4 pb-2">
    <div class="container">
        <div class="rounded-3 px-4 py-3" style="background-color: #e9ecef;">
            <div class="d-flex align-items-center" style="font-size: 14px;">
                <a href="<?= base_url() ?>" class="text-decoration-none fw-bold text-dark d-flex align-items-center">
                    <i class="bi bi-house-door-fill me-2 fs-6"></i> Home
                </a>
                <span class="mx-3" style="width: 10px; height: 10px; border: 3px solid #ffc107; border-radius: 50%; display: inline-block;"></span>
                <span class="text-secondary">Staff/Karyawan</span>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-white">
    <div class="container">
        
        <div class="text-center mb-5">
            <h3 class="fw-bold text-uppercase" style="color: #102a43;">Daftar Staff & Karyawan</h3>
            <div style="width: 60px; height: 3px; background-color: #ffc107; margin: 10px auto;"></div>
        </div>

        <div class="row g-4">
            <?php if(!empty($data_staff)): ?>
                <?php foreach($data_staff as $staff): ?>
                
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card border-0 shadow-sm h-100 overflow-hidden position-relative rounded-3 group-hover-effect">
                        
                        <div style="height: 320px; overflow: hidden;">
                            <img src="<?= base_url('assets/img/' . $staff['foto']) ?>" 
                                 class="w-100 h-100 object-fit-cover transition-zoom" 
                                 alt="<?= $staff['nama'] ?>"
                                 onerror="this.onerror=null; this.src='https://via.placeholder.com/300x400?text=Staff';">
                        </div>

                        <div class="position-absolute bottom-0 start-50 translate-middle-x mb-3 bg-white rounded-3 shadow-sm text-center p-2" 
                             style="z-index: 2; width: 85%; opacity: 0.95;">
                            <h6 class="fw-bold mb-1" style="font-size: 14px; color: #102a43;"><?= $staff['nama'] ?></h6>
                            <small class="fw-bold text-warning text-uppercase" style="font-size: 11px; letter-spacing: 0.5px;">
                                <?= $staff['jabatan'] ?>
                            </small>
                        </div>

                    </div>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center py-5">
                    <p class="text-muted">Belum ada data staff.</p>
                </div>
            <?php endif; ?>
        </div>

        </div>
</div>

<style>
    /* 1. Import Font Roboto */
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');

    /* 2. Terapkan Font */
    body, h1, h2, h3, h4, h5, h6, .card, .btn, .nav-link {
        font-family: 'Roboto', sans-serif !important;
    }

    /* Efek Zoom */
    .transition-zoom { transition: transform 0.5s ease; }
    .group-hover-effect:hover .transition-zoom { transform: scale(1.05); }
</style>

<div class="text-white py-4 text-center" style="background-color: #102a43;">
    <div class="container">
        <small class="fw-normal">@ 2026 SMA Negeri 1 Batangan. All rights reserved.</small>
    </div>
</div>