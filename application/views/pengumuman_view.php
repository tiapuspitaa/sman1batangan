<div class="bg-white pt-4 pb-2">
    <div class="container">
        <div class="rounded-3 px-4 py-3" style="background-color: #e9ecef;">
            <div class="d-flex align-items-center" style="font-size: 14px;">
                <a href="<?= base_url() ?>" class="text-decoration-none fw-bold text-dark d-flex align-items-center">
                    <i class="bi bi-house-door-fill me-2 fs-6"></i> Home
                </a>
                <span class="mx-3" style="width: 10px; height: 10px; border: 3px solid #ffc107; border-radius: 50%; display: inline-block;"></span>
                <span class="text-secondary">Pengumuman Kelulusan</span>
            </div>
        </div>
    </div>
</div>

<div class="d-flex align-items-center justify-content-center bg-white" style="min-height: 70vh;">
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-md-8 col-lg-6">
                
                <div class="card border-0 shadow rounded-4 p-4 p-md-5" style="background-color: #e9ecef;">
                    
                    <div class="text-center mb-5">
                        <h3 class="fw-bold text-uppercase mb-2" style="color: #102a43; letter-spacing: 1px;">CEK KELULUSAN</h3>
                        <p class="text-muted mb-0" style="font-size: 16px; line-height: 1.5;">
                            Masukkan Nama Lengkap Anda & NISN <br> Untuk Melihat Hasil Kelulusan
                        </p>
                    </div>

                    <form action="<?= base_url('dashboard/hasil') ?>" method="post">
                        
                        <div class="mb-4">
                            <label for="nama" class="form-label fw-bold text-secondary ps-2 mb-2" style="font-size: 15px;">Nama Lengkap</label>
                            <input type="text" 
                                   class="form-control form-control-lg border-0 shadow-sm py-3 px-4" 
                                   id="nama" 
                                   name="nama" 
                                   style="border-radius: 12px; font-size: 15px;" 
                                   required 
                                   placeholder="">
                        </div>

                        <div class="mb-5">
                            <label for="nisn" class="form-label fw-bold text-secondary ps-2 mb-2" style="font-size: 15px;">NISN</label>
                            <input type="number" 
                                   class="form-control form-control-lg border-0 shadow-sm py-3 px-4" 
                                   id="nisn" 
                                   name="nisn" 
                                   style="border-radius: 12px; font-size: 15px;" 
                                   required 
                                   placeholder="">
                        </div>

                        <div class="text-center">
                            <button type="submit" 
                                    class="btn fw-bold text-white shadow hover-effect" 
                                    style="background-color: #102a43; border-radius: 10px; padding: 12px 40px; font-size: 16px;">
                                Periksa Kelulusan
                            </button>
                        </div>

                    </form>

                </div>
                </div>
        </div>
    </div>
</div>

<style>
    /* Efek hover pada tombol agar sedikit naik */
    .hover-effect { transition: transform 0.2s; }
    .hover-effect:hover { transform: translateY(-2px); }
    
    /* Menghilangkan panah spinner pada input number di Chrome/Safari */
    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
        -webkit-appearance: none; 
        margin: 0; 
    }
</style>

<div class="text-white py-4 text-center" style="background-color: #102a43;">
    <div class="container">
        <small class="fw-bold">@ 2026 SMA Negeri 1 Batangan. All rights reserved.</small>
    </div>
</div>