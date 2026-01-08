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

<div class="py-5 d-flex align-items-center" style="min-height: 70vh; background: linear-gradient(135deg, #102a43 0%, #fffff 100%);">
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-md-8 col-lg-6">
                
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                    
                    <div class="card-header bg-white text-center py-4 border-0">
                         <h4 class="fw-bold text-uppercase mb-1" style="color: #102a43; letter-spacing: 1px;">HASIL KELULUSAN</h4>
                        <p class="text-muted mb-0" style="font-size: 15px;">Tahun Pelajaran 2025/2026</p>
                    </div>

                    <div class="card-body p-4 p-md-5">

                        <?php if($siswa['status'] == 'LULUS'): ?>
                            <div class="text-center text-white py-5 rounded-4 mb-5 shadow-sm position-relative overflow-hidden" 
                                 style="background: linear-gradient(45deg, #11998e, #38ef7d);">
                                <i class="bi bi-check-circle-fill position-absolute top-50 start-50 translate-middle" style="font-size: 10rem; opacity: 0.1;"></i>
                                <i class="bi bi-patch-check-fill mb-3 d-block" style="font-size: 4rem;"></i>
                                <h2 class="fw-bold mb-2">SELAMAT!</h2>
                                <p class="mb-0 fw-bold fs-5 text-uppercase">ANDA DINYATAKAN LULUS</p>
                            </div>
                        <?php else: ?>
                            <div class="text-center text-white py-5 rounded-4 mb-5 shadow-sm position-relative overflow-hidden" 
                                 style="background: linear-gradient(45deg, #cb2d3e, #ef473a);">
                                <i class="bi bi-x-circle-fill position-absolute top-50 start-50 translate-middle" style="font-size: 10rem; opacity: 0.1;"></i>
                                <i class="bi bi-emoji-frown-fill mb-3 d-block" style="font-size: 4rem;"></i>
                                <h2 class="fw-bold mb-2">MOHON MAAF</h2>
                                <p class="mb-0 fw-bold fs-5 text-uppercase">ANDA DINYATAKAN TIDAK LULUS</p>
                                <p class="mt-2 mb-0 small" style="opacity: 0.8;">Tetap semangat dan jangan putus asa!</p>
                            </div>
                        <?php endif; ?>

                        <div class="bg-light rounded-4 p-4 mb-5 shadow-sm border">
                            <h6 class="fw-bold text-secondary mb-3 text-uppercase" style="font-size: 13px; letter-spacing: 1px;">Data Siswa</h6>
                            <table class="table table-borderless mb-0" style="font-size: 15px;">
                                <tr>
                                    <td class="text-muted ps-0" width="35%"><i class="bi bi-person-fill me-2"></i>Nama</td>
                                    <td class="fw-bold text-dark">: <?= $siswa['nama'] ?></td>
                                
                                <tr>
                                    <td class="text-muted ps-0"><i class="bi bi-card-heading me-2"></i>NISN</td>
                                    <td class="fw-bold text-dark">: <?= $siswa['nisn'] ?></td>
                                </tr>
                                <tr>
                                    <td class="text-muted ps-0"><i class="bi bi-building-fill me-2"></i>Sekolah</td>
                                    <td class="fw-bold text-dark">: SMA NEGERI 1 BATANGAN</td>
                                </tr>
                            </table>
                        </div>

                        <div class="d-grid">
                            <a href="<?= base_url('dashboard/pengumuman') ?>" class="btn btn-lg fw-bold text-white shadow-sm py-3 rounded-pill" 
                               style="background-color: #102a43; transition: all 0.3s ease;">
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
    .btn-lg:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
</style>

<div class="text-white py-4 text-center" style="background-color: #102a43;">
    <div class="container">
        <small class="fw-bold">@ 2026 SMA Negeri 1 Batangan. All rights reserved.</small>
    </div>
</div>