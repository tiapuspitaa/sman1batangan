<div class="bg-white pt-4 pb-2">
    <div class="container">
        <div class="rounded-3 px-4 py-3" style="background-color: #e9ecef;">
            <div class="d-flex align-items-center" style="font-size: 14px;">
                <a href="<?= base_url() ?>" class="text-decoration-none fw-bold text-dark d-flex align-items-center">
                    <i class="bi bi-house-door-fill me-2 fs-6"></i> Home
                </a>
                <span class="mx-3" style="width: 10px; height: 10px; border: 3px solid #ffc107; border-radius: 50%; display: inline-block;"></span>
                <a href="<?= base_url('dashboard/pengumuman') ?>" class="text-decoration-none text-dark">
                    Pengumuman Kelulusan
                </a>
            </div>
        </div>
    </div>
</div>

<div class="py-5 d-flex align-items-center justify-content-center bg-white" style="min-height: 80vh;">
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-11 col-sm-10 col-md-8 col-lg-6 col-xl-5">
                
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                    
                    <div class="card-header bg-white text-center py-4 border-0">
                         <h4 class="fw-bold text-uppercase mb-1" style="color: #102a43; letter-spacing: 1px; font-size: 1.25rem;">HASIL KELULUSAN</h4>
                        <p class="text-muted mb-0" style="font-size: 14px;">Tahun Pelajaran 2025/2026</p>
                    </div>

                    <div class="card-body p-4 p-md-5 pt-2"> 
                        <?php if($siswa['status'] == 'LULUS'): ?>
                            <div class="text-center text-white py-3 rounded-4 mb-4 shadow-sm position-relative overflow-hidden" 
                                 style="background: linear-gradient(45deg, #11998e, #38ef7d);">
                                <i class="bi bi-check-circle-fill position-absolute top-50 start-50 translate-middle" style="font-size: 8rem; opacity: 0.1;"></i>
                                <i class="bi bi-patch-check-fill mb-2 d-block" style="font-size: 3.5rem;"></i>
                                <h3 class="fw-bold mb-1">SELAMAT!</h3>
                                <p class="mb-0 fw-bold text-uppercase">ANDA DINYATAKAN LULUS</p>
                            </div>
                        <?php else: ?>
                            <div class="text-center text-white py-3 rounded-4 mb-4 shadow-sm position-relative overflow-hidden" 
                                 style="background: linear-gradient(45deg, #cb2d3e, #ef473a);">
                                <i class="bi bi-x-circle-fill position-absolute top-50 start-50 translate-middle" style="font-size: 8rem; opacity: 0.1;"></i>
                                <i class="bi bi-emoji-frown-fill mb-2 d-block" style="font-size: 3.5rem;"></i>
                                <h3 class="fw-bold mb-1">MOHON MAAF</h3>
                                <p class="mb-0 fw-bold text-uppercase">ANDA DINYATAKAN TIDAK LULUS</p>
                            </div>
                        <?php endif; ?>

                        <div class="bg-light rounded-4 p-4 mb-4 shadow-sm border">
                            <h6 class="fw-bold text-secondary mb-3 text-uppercase" style="font-size: 12px; letter-spacing: 1px;">Data Siswa</h6>
                            <table class="table table-borderless mb-0" style="font-size: 15px;">
                                <tr>
                                    <td class="text-muted ps-0 py-2" width="30%"><i class="bi bi-person-fill me-2"></i>Nama</td>
                                    <td class="fw-bold text-dark py-2">: <?= $siswa['nama'] ?></td>
                                </tr>
                                <tr>
                                    <td class="text-muted ps-0 py-2"><i class="bi bi-card-heading me-2"></i>NISN</td>
                                    <td class="fw-bold text-dark py-2">: <?= $siswa['nisn'] ?></td>
                                </tr>
                                <tr>
                                    <td class="text-muted ps-0 py-2"><i class="bi bi-building-fill me-2"></i>Sekolah</td>
                                    <td class="fw-bold text-dark py-2" style="white-space: nowrap;">: SMA NEGERI 1 BATANGAN</td>
                                </tr>
                            </table>
                        </div>

                        <div class="d-grid">
                            <a href="<?= base_url('dashboard/pengumuman') ?>" class="btn fw-bold text-white shadow-sm py-3 rounded-pill" 
                               style="background-color: #102a43; transition: all 0.3s ease; font-size: 15px;">
                                <i class="bi bi-arrow-left me-2"></i> Periksa Kembali
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .btn:hover {
        transform: translateY(-2px);
        filter: brightness(1.2);
    }
</style>

<div class="text-white py-4 text-center" style="background-color: #102a43;">
    <div class="container">
        <small class="fw-normal">@ 2026 SMA Negeri 1 Batangan. All rights reserved.</small>
    </div>
</div>