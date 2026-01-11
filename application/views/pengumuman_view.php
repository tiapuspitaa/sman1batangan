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

<div class="d-flex align-items-center justify-content-center bg-white py-5" style="min-height: 80vh;">
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4">
                
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5" style="background-color: #e9ecef;">
                    
                    <div class="text-center mb-4">
                        <h4 class="fw-bold text-uppercase mb-2" style="color: #102a43; letter-spacing: 1px;">CEK KELULUSAN</h4>
                        <p class="text-muted mb-0" style="font-size: 14px; line-height: 1.5;">
                            Masukkan Nama Lengkap & NISN <br> Untuk Melihat Hasil Kelulusan
                        </p>
                    </div>

                    <form action="<?= base_url('dashboard/hasil') ?>" method="post">
                        
                        <div class="mb-3">
                            <label for="nama" class="form-label fw-bold text-secondary ps-1 mb-1" style="font-size: 14px;">Nama Lengkap</label>
                            <input type="text" 
                                   class="form-control border-0 shadow-sm py-2 px-3" 
                                   id="nama" 
                                   name="nama" 
                                   style="border-radius: 10px; font-size: 14px;" 
                                   required 
                                   placeholder="Contoh: Tia Puspita Sari">
                        </div>

                        <div class="mb-4">
                            <label for="nisn" class="form-label fw-bold text-secondary ps-1 mb-1" style="font-size: 14px;">NISN</label>
                            <input type="number" 
                                   class="form-control border-0 shadow-sm py-2 px-3" 
                                   id="nisn" 
                                   name="nisn" 
                                   style="border-radius: 10px; font-size: 14px;" 
                                   required 
                                   placeholder="Masukkan NISN">
                        </div>

                        <div class="text-center">
                            <button type="submit" 
                                    class="btn fw-bold text-white shadow-sm hover-effect w-100" 
                                    style="background-color: #102a43; border-radius: 10px; padding: 10px; font-size: 15px;">
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
    /* Efek hover tombol */
    .hover-effect { transition: all 0.2s ease; }
    .hover-effect:hover { 
        transform: translateY(-2px);
        filter: brightness(1.2);
    }
    
    /* Input focus effect */
    .form-control:focus {
        box-shadow: 0 0 0 0.25rem rgba(16, 42, 67, 0.1);
        border: 1px solid #102a43;
    }

    /* Hilangkan spinner number */
    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
        -webkit-appearance: none; 
        margin: 0; 
    }
</style>

<div class="text-white py-4 text-center" style="background-color: #102a43;">
    <div class="container">
        <small class="fw-normal">@ 2026 SMA Negeri 1 Batangan. All rights reserved.</small>
    </div>
</div>