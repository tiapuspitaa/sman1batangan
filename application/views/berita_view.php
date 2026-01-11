<div class="bg-white pt-4 pb-2">
    <div class="container">
        <div class="rounded-3 px-4 py-3" style="background-color: #e9ecef;">
            <div class="d-flex align-items-center" style="font-size: 14px;">
                <a href="<?= base_url() ?>" class="text-decoration-none fw-bold text-dark d-flex align-items-center">
                    <i class="bi bi-house-door-fill me-2 fs-6"></i> Home
                </a>
                <span class="mx-3" style="width: 10px; height: 10px; border: 3px solid #ffc107; border-radius: 50%; display: inline-block;"></span>
                <span class="text-secondary">Berita Sekolah</span>
                
                <?php if($selected_year != 'semua'): ?>
                    <span class="mx-3" style="width: 10px; height: 10px; border: 3px solid #ffc107; border-radius: 50%; display: inline-block;"></span>
                    <span class="text-secondary fw-bold">Arsip <?= $selected_year ?></span>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-white">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 mb-5">
                <h5 class="fw-bold mb-4">Arsip Berita</h5>
                
                <ul class="list-unstyled">
                    <li class="mb-3 pb-2 border-bottom border-dark">
                        <a href="<?= base_url('dashboard/berita/1/semua') ?>" 
                           class="text-decoration-none d-block <?= ($selected_year == 'semua') ? 'fw-bold text-warning' : 'text-dark' ?>">
                           Semua Berita
                        </a>
                    </li>

                    <li class="mb-3 pb-2 border-bottom border-dark">
                        <a href="<?= base_url('dashboard/berita/1/2025') ?>" 
                           class="text-decoration-none d-block <?= ($selected_year == '2025') ? 'fw-bold text-warning' : 'text-dark' ?>">
                           2025
                        </a>
                    </li>
                    
                    <li class="mb-3 pb-2 border-bottom border-dark">
                        <a href="<?= base_url('dashboard/berita/1/2024') ?>" 
                           class="text-decoration-none d-block <?= ($selected_year == '2024') ? 'fw-bold text-warning' : 'text-dark' ?>">
                           2024
                        </a>
                    </li>
                    
                    <li class="mb-3 pb-2 border-bottom border-dark">
                        <a href="<?= base_url('dashboard/berita/1/2023') ?>" 
                           class="text-decoration-none d-block <?= ($selected_year == '2023') ? 'fw-bold text-warning' : 'text-dark' ?>">
                           2023
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-9 ps-lg-5">
                
                <?php if(empty($data_berita)): ?>
                    <div class="alert alert-warning text-center">
                        Tidak ada berita ditemukan untuk tahun <strong><?= $selected_year ?></strong>.
                    </div>
                <?php else: ?>
                    
                    <?php foreach($data_berita as $berita): ?>
                    <div class="mb-5">
                        <div class="mb-3 overflow-hidden rounded-2" style="height: 350px;">
                            <img src="<?= base_url('assets/img/' . $berita['gambar']) ?>" 
                                 class="w-100 h-100 object-fit-cover" 
                                 alt="Gambar Berita"
                                 onerror="this.onerror=null; this.src='https://via.placeholder.com/800x400?text=News+Image';">
                        </div>

                        <h4 class="fw-bold text-uppercase mb-2" style="color: #102a43; line-height: 1.4;">
                            <?= $berita['judul'] ?>
                        </h4>
                        
                        <small class="text-muted d-block mb-3">
                            <i class="bi bi-calendar3 me-2"></i> <?= $berita['tanggal'] ?>
                        </small>

                        <p class="text-dark" style="font-size: 14px; line-height: 1.6; text-align: justify;">
                            <?= $berita['isi'] ?>
                        </p>

                        <hr class="my-5 border-dark opacity-100">
                    </div>
                    <?php endforeach; ?>

                <?php endif; ?>

                <div class="mt-4">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            
                            <?php if($current_page > 1): ?>
                            <li class="page-item">
                                <a class="page-link border text-dark" href="<?= base_url('dashboard/berita/'.($current_page-1).'/'.$selected_year) ?>">Prev</a>
                            </li>
                            <?php endif; ?>

                            <?php for($i = 1; $i <= $total_pages; $i++): ?>
                                <li class="page-item <?= ($i == $current_page) ? 'active' : '' ?>">
                                    <a class="page-link border <?= ($i == $current_page) ? 'border-0 fw-bold' : '' ?>" 
                                       href="<?= base_url('dashboard/berita/'.$i.'/'.$selected_year) ?>"
                                       style="<?= ($i == $current_page) ? 'background-color: #e9ecef; color: black;' : 'color: #333;' ?>">
                                       <?= $i ?>
                                    </a>
                                </li>
                            <?php endfor; ?>

                            <?php if($current_page < $total_pages): ?>
                            <li class="page-item">
                                <a class="page-link border text-dark" href="<?= base_url('dashboard/berita/'.($current_page+1).'/'.$selected_year) ?>">Next</a>
                            </li>
                            <?php endif; ?>
                            
                        </ul>
                    </nav>
                </div>

            </div>

        </div>
    </div>
</div>

<div class="text-white py-4 text-center" style="background-color: #102a43;">
    <div class="container">
        <small class="fw-bold">@ 2026 SMA Negeri 1 Batangan. All rights reserved.</small>
    </div>
</div>