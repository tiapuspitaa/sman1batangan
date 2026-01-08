<div class="bg-white pt-4 pb-2">
    <div class="container">
        <div class="rounded-3 px-4 py-3" style="background-color: #e9ecef;">
            <div class="d-flex align-items-center" style="font-size: 14px;">
                <a href="<?= base_url() ?>" class="text-decoration-none fw-bold text-dark d-flex align-items-center">
                    <i class="bi bi-house-door-fill me-2 fs-6"></i> Home
                </a>
                
                <span class="mx-3" style="width: 10px; height: 10px; border: 3px solid #ffc107; border-radius: 50%; display: inline-block;"></span>
                
                <span class="text-secondary">Alumni</span>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-white">
    <div class="container">
        
        <div class="row g-4">
            <?php foreach($data_alumni as $item): ?>
            
            <div class="col-md-6">
                
                <div class="card border-0 h-100 shadow-sm rounded-4 overflow-hidden" style="background-color: #102a43;">
                    <div class="row g-0 h-100 align-items-center">
                        
                        <div class="col-4 text-center p-3">
                            <div class="rounded-3 overflow-hidden" style="width: 100%; aspect-ratio: 1/1;"> <img src="<?= base_url('assets/img/' . $item['gambar']) ?>" 
                                     class="w-100 h-100 object-fit-cover" 
                                     alt="<?= $item['nama'] ?>"
                                     onerror="this.onerror=null; this.src='https://via.placeholder.com/300x300?text=Alumni';">
                            </div>
                        </div>
                        
                        <div class="col-8">
                            <div class="card-body py-4 pe-4 ps-0 text-white">
                                
                                <h5 class="fw-bold mb-2 text-uppercase" style="font-size: 18px; letter-spacing: 0.5px;">
                                    <?= $item['nama'] ?>
                                </h5>
                                
                                <hr class="my-2" style="border-top: 1px solid #fff; opacity: 0.5;">
                                
                                <p class="card-text small mb-0" style="font-size: 13px; line-height: 1.6; opacity: 0.9; text-align: justify;">
                                    <?= substr($item['deskripsi'], 0, 200) ?>...
                                </p>
                                
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <?php endforeach; ?>
        </div>

        <div class="mt-5 d-flex justify-content-center">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    
                    <?php for($i = 1; $i <= $total_pages; $i++): ?>
                        <?php 
                            $bg_color = ($i == $current_page) ? 'background-color: #e9ecef; color: black;' : 'background-color: transparent;';
                        ?>

                        <li class="page-item <?= ($i == $current_page) ? 'active' : '' ?> mx-1">
                            <a class="page-link border-0 rounded-0 px-3 py-2 fw-bold" 
                               href="<?= base_url('dashboard/alumni/'.$i) ?>"
                               style="<?= $bg_color ?> color: #333; border: 1px solid #dee2e6 !important;">
                               <?= $i ?>
                            </a>
                        </li>
                    <?php endfor; ?>

                    <?php if($current_page < $total_pages): ?>
                    <li class="page-item mx-1">
                        <a class="page-link border bg-white text-dark rounded-0 px-3 py-2" href="<?= base_url('dashboard/alumni/'.($current_page+1)) ?>">Next</a>
                    </li>
                    <?php endif; ?>
                    
                </ul>
            </nav>
        </div>

    </div>
</div>

<div class="text-white py-4 text-center" style="background-color: #102a43;">
    <div class="container">
        <small class="fw-bold">@ 2026 SMA Negeri 1 Batangan. All rights reserved.</small>
    </div>
</div>