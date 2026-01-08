<div class="bg-white pt-4 pb-2">
    <div class="container">
        <div class="rounded-3 px-4 py-3" style="background-color: #e9ecef;">
            <div class="d-flex align-items-center" style="font-size: 14px;">
                <a href="<?= base_url() ?>" class="text-decoration-none fw-bold text-dark d-flex align-items-center">
                    <i class="bi bi-house-door-fill me-2 fs-6"></i> Home
                </a>
                
                <span class="mx-3" style="width: 10px; height: 10px; border: 3px solid #ffc107; border-radius: 50%; display: inline-block;"></span>
                
                <span class="text-secondary">Fasilitas Sekolah</span>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-white">
    <div class="container">
        
        <div class="row g-4">
            <?php foreach($fasilitas as $item): ?>
            <div class="col-md-6 col-lg-4">
                
                <div class="card border-0 shadow-sm rounded-3 overflow-hidden h-100 group-hover">
                    
                    <div class="py-3 text-center text-white" style="background-color: #102a43;">
                        <h5 class="fw-bold mb-0" style="font-size: 16px; letter-spacing: 0.5px;">
                            <?= $item['nama'] ?>
                        </h5>
                    </div>

                    <div style="height: 250px; overflow: hidden;">
                        <img src="<?= base_url('assets/img/' . $item['gambar']) ?>" 
                             class="w-100 h-100 object-fit-cover zoom-effect" 
                             alt="<?= $item['nama'] ?>"
                             onerror="this.onerror=null; this.src='https://via.placeholder.com/600x400?text=Fasilitas';">
                    </div>

                </div>

            </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>

<style>
    /* Efek Zoom gambar saat mouse diarahkan ke kartu */
    .zoom-effect {
        transition: transform 0.4s ease;
    }
    
    .group-hover:hover .zoom-effect {
        transform: scale(1.1); /* Gambar membesar sedikit */
    }

    /* Efek kartu sedikit naik saat di-hover */
    .group-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .group-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.15) !important;
    }
</style>

<div class="text-white py-4 text-center" style="background-color: #102a43;">
    <div class="container">
        <small class="fw-bold">@ 2026 SMA Negeri 1 Batangan. All rights reserved.</small>
    </div>
</div>