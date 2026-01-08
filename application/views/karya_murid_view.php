<div class="bg-white pt-4 pb-2">
    <div class="container">
        <div class="rounded-3 px-4 py-3" style="background-color: #e9ecef;">
            <div class="d-flex align-items-center" style="font-size: 14px;">
                <a href="<?= base_url() ?>" class="text-decoration-none fw-bold text-dark d-flex align-items-center">
                    <i class="bi bi-house-door-fill me-2 fs-6"></i> Home
                </a>
                
                <span class="mx-3" style="width: 10px; height: 10px; border: 3px solid #ffc107; border-radius: 50%; display: inline-block;"></span>
                
                <span class="text-secondary">Karya Murid</span>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-white">
    <div class="container">
        
        <div class="row g-4">
            <?php foreach($data_karya as $item): ?>
            
            <div class="col-md-6 col-lg-3">
                
                <div class="card border-0 h-100 shadow-sm rounded-0">
                    
                    <div style="height: 250px; overflow: hidden;">
                        <img src="<?= base_url('assets/img/' . $item['gambar']) ?>" 
                             class="w-100 h-100 object-fit-cover hover-zoom" 
                             alt="<?= $item['judul'] ?>"
                             onerror="this.onerror=null; this.src='https://via.placeholder.com/400x400?text=Karya';">
                    </div>

                    <div class="card-body p-3" style="background-color: #e9ecef;">
                        
                        <h6 class="fw-bold text-uppercase mb-2" style="color: #102a43; font-size: 14px; min-height: 40px;">
                            <?= $item['judul'] ?>
                        </h6>

                        <hr class="my-2" style="border-top: 1px solid #102a43; opacity: 0.3;">

                        <div class="d-flex align-items-start mb-2 text-dark" style="font-size: 12px;">
                            <i class="bi bi-person-fill me-2 fs-6"></i>
                            <span><?= $item['siswa'] ?></span>
                        </div>

                        <div class="d-flex align-items-center mb-2 text-dark" style="font-size: 12px;">
                            <i class="bi bi-box-seam-fill me-2 fs-6"></i>
                            <span><?= $item['kategori'] ?></span>
                        </div>

                        <div class="d-flex align-items-center text-dark" style="font-size: 12px;">
                            <i class="bi bi-calendar3 me-2 fs-6"></i>
                            <span><?= $item['tanggal'] ?></span>
                        </div>

                    </div>
                </div>

            </div>
            <?php endforeach; ?>
        </div>

        <div class="mt-5 d-flex justify-content-center">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    
                    <?php for($i = 1; $i <= 4; $i++): ?>
                        <?php 
                            $is_disabled = ($i > $total_pages);
                            $link = $is_disabled ? 'javascript:void(0);' : base_url('dashboard/karya_murid/'.$i);
                            $text_color = $is_disabled ? 'color: #ccc;' : 'color: #333;';
                            $bg_color = ($i == $current_page) ? 'background-color: #e9ecef; color: black;' : 'background-color: transparent;';
                            $cursor = $is_disabled ? 'cursor: default;' : '';
                        ?>

                        <li class="page-item <?= ($i == $current_page) ? 'active' : '' ?> mx-1">
                            <a class="page-link border-0 rounded-0 px-3 py-2 fw-bold" 
                               href="<?= $link ?>"
                               style="<?= $bg_color ?> <?= $text_color ?> <?= $cursor ?> border: 1px solid #dee2e6 !important;">
                               <?= $i ?>
                            </a>
                        </li>
                    <?php endfor; ?>

                    <?php if($current_page < $total_pages): ?>
                    <li class="page-item mx-1">
                        <a class="page-link border bg-white text-dark rounded-0 px-3 py-2" href="<?= base_url('dashboard/karya_murid/'.($current_page+1)) ?>">Next</a>
                    </li>
                    <?php endif; ?>
                    
                </ul>
            </nav>
        </div>

    </div>
</div>

<style>
    .hover-zoom { transition: transform 0.3s ease; }
    .card:hover .hover-zoom { transform: scale(1.05); }
    .rounded-0 { border-radius: 0 !important; }
</style>

<div class="text-white py-4 text-center" style="background-color: #102a43;">
    <div class="container">
        <small class="fw-bold">@ 2026 SMA Negeri 1 Batangan. All rights reserved.</small>
    </div>
</div>