<div class="bg-white pt-4 pb-2">
    <div class="container">
        <div class="rounded-3 px-4 py-3" style="background-color: #e9ecef;">
            <div class="d-flex align-items-center" style="font-size: 14px;">
                <a href="<?= base_url() ?>" class="text-decoration-none fw-bold text-dark d-flex align-items-center">
                    <i class="bi bi-house-door-fill me-2 fs-6"></i> Home
                </a>
                <span class="mx-3" style="width: 10px; height: 10px; border: 3px solid #ffc107; border-radius: 50%; display: inline-block;"></span>
                <span class="text-secondary">Tenaga Pendidik</span>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-white">
    <div class="container">
        
        <div class="row g-4">
            
            <?php foreach($data_guru as $guru): ?>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card border-0 shadow-sm h-100 overflow-hidden position-relative rounded-3 group-hover-effect">
                    
                    <div style="aspect-ratio: 3/4; overflow: hidden;">
                        <img src="<?= base_url('assets/img/' . $guru['foto']) ?>" 
                             class="w-100 h-100 object-fit-cover transition-zoom" 
                             alt="<?= $guru['nama'] ?>"
                             onerror="this.onerror=null; this.src='https://via.placeholder.com/300x400?text=Foto+Guru';">
                    </div>

                    <div class="position-absolute bottom-0 start-50 translate-middle-x w-100 px-3 pb-3">
                        <div class="bg-white rounded-2 py-2 px-1 text-center shadow-sm" style="opacity: 0.95;">
                            <h6 class="fw-bold text-dark mb-0" style="font-size: 14px;"><?= $guru['nama'] ?></h6>
                            <small class="fw-bold text-warning text-uppercase" style="font-size: 11px;"><?= $guru['mapel'] ?></small>
                        </div>
                    </div>

                </div>
            </div>
            <?php endforeach; ?>

        </div>

        <div class="d-flex justify-content-center mt-5">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    
                    <?php if($current_page > 1): ?>
                    <li class="page-item">
                        <a class="page-link border text-dark" href="<?= base_url('dashboard/guru/'.($current_page-1)) ?>">Prev</a>
                    </li>
                    <?php endif; ?>

                    <?php for($i = 1; $i <= 4; $i++): ?>
                        
                        <?php 
                        // LOGIKA KHUSUS:
                        // Jika i > 2 (Nomor 3 dan 4), maka tombolnya MATI
                        $is_disabled = ($i > 2); 
                        $link_href = $is_disabled ? '#' : base_url('dashboard/guru/'.$i);
                        $text_color = $is_disabled ? 'color: #ccc;' : 'color: #333;'; // Warna abu-abu jika mati
                        $cursor_style = $is_disabled ? 'cursor: not-allowed;' : '';
                        ?>

                        <li class="page-item <?= ($i == $current_page) ? 'active' : '' ?>">
                            <a class="page-link border <?= ($i == $current_page) ? 'border-0 fw-bold' : '' ?>" 
                               href="<?= $link_href ?>"
                               style="<?= ($i == $current_page) ? 'background-color: #e9ecef; color: black;' : $text_color . $cursor_style ?>">
                               <?= $i ?>
                            </a>
                        </li>

                    <?php endfor; ?>

                    <?php if($current_page < 2): ?>
                    <li class="page-item">
                        <a class="page-link border text-dark" href="<?= base_url('dashboard/guru/'.($current_page+1)) ?>">Next</a>
                    </li>
                    <?php endif; ?>

                </ul>
            </nav>
        </div>

    </div>
</div>

<style>
    .transition-zoom { transition: transform 0.5s ease; }
    .group-hover-effect:hover .transition-zoom { transform: scale(1.05); }
    .page-link:focus { box-shadow: none; }
</style>

<div class="text-white py-4 text-center" style="background-color: #102a43;">
    <div class="container">
        <small class="fw-bold">@ 2026 SMA Negeri 1 Batangan. All rights reserved.</small>
    </div>
</div>