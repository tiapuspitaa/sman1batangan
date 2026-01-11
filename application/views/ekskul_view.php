<div class="bg-white pt-4 pb-2">
    <div class="container">
        <div class="rounded-3 px-4 py-3" style="background-color: #e9ecef;">
            <div class="d-flex align-items-center" style="font-size: 14px;">
                <a href="<?= base_url() ?>" class="text-decoration-none fw-bold text-dark d-flex align-items-center">
                    <i class="bi bi-house-door-fill me-2 fs-6"></i> Home
                </a>
                <span class="mx-3" style="width: 10px; height: 10px; border: 3px solid #ffc107; border-radius: 50%; display: inline-block;"></span>
                <span class="text-secondary">Ekstrakurikuler</span>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-white">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php foreach($ekskul as $item): ?>
            <div class="col">
                <div class="card h-100 border-0 shadow rounded-3 overflow-hidden text-white" 
                     style="background-color: #102a43; cursor: pointer; transition: transform 0.3s ease;"
                     onmouseover="this.style.transform='translateY(-5px)'"
                     onmouseout="this.style.transform='translateY(0)'"
                     data-bs-toggle="modal" 
                     data-bs-target="#detailModal"
                     data-judul="<?= htmlspecialchars($item['nama'], ENT_QUOTES) ?>"
                     data-deskripsi="<?= htmlspecialchars($item['deskripsi'], ENT_QUOTES) ?>" 
                     data-kontak="<?= htmlspecialchars($item['kontak'], ENT_QUOTES) ?>"
                     data-gambar="<?= base_url('assets/img/' . $item['gambar']) ?>">
                    
                    <div style="height: 220px; overflow: hidden;">
                        <img src="<?= base_url('assets/img/' . $item['gambar']) ?>" 
                             class="w-100 h-100 object-fit-cover" 
                             alt="<?= htmlspecialchars($item['nama'], ENT_QUOTES) ?>"
                             onerror="this.onerror=null; this.src='https://via.placeholder.com/600x400?text=Image+Not+Found';">
                    </div>

                    <div class="card-body p-4 d-flex flex-column text-start">
                        <h4 class="fw-bold text-uppercase mb-3"><?= $item['nama'] ?></h4>
                        <p class="mb-0 text-white-50 fw-normal" style="font-size: 14px; line-height: 1.6;">
                            <?= substr(strip_tags($item['deskripsi']), 0, 80) ?>...
                        </p>
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
                        <a class="page-link border text-dark" href="<?= base_url('dashboard/ekskul/'.($current_page-1)) ?>">Prev</a>
                    </li>
                    <?php endif; ?>

                    <?php for($i = 1; $i <= $total_pages; $i++): ?>
                        <li class="page-item <?= ($i == $current_page) ? 'active' : '' ?>">
                            <a class="page-link border <?= ($i == $current_page) ? 'border-0 fw-bold' : '' ?>" 
                               href="<?= base_url('dashboard/ekskul/'.$i) ?>"
                               style="<?= ($i == $current_page) ? 'background-color: #e9ecef; color: black;' : 'color: #333;' ?>">
                               <?= $i ?>
                            </a>
                        </li>
                    <?php endfor; ?>

                    <?php if($current_page < $total_pages): ?>
                    <li class="page-item">
                        <a class="page-link border text-dark" href="<?= base_url('dashboard/ekskul/'.($current_page+1)) ?>">Next</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </div>
</div>

<div class="modal fade" id="detailModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4 border-0 overflow-hidden">
            <div class="modal-body p-0">
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3 p-2 bg-danger rounded-circle shadow" 
                        data-bs-dismiss="modal" aria-label="Close" style="z-index: 10; opacity: 1;"></button>
                <div class="row g-0">
                    <div class="col-md-5 bg-light">
                        <img id="modalGambar" src="" class="w-100 h-100 object-fit-cover" style="min-height: 400px;" alt="Detail">
                    </div>
                    <div class="col-md-7 p-4 d-flex flex-column justify-content-center text-start">
                        <h3 id="modalJudul" class="fw-bold text-uppercase mb-2" style="color: #102a43;">NAMA EKSKUL</h3>
                        <hr class="border-dark opacity-100 w-100 mb-3">
                        <p id="modalDeskripsi" class="text-dark mb-3 fw-normal" 
                           style="font-size: 15px; line-height: 1.5; text-align: justify; white-space: pre-line;">
                        </p>
                        <hr class="border-dark opacity-100 w-100 mb-3">
                        <div class="mt-1">
                            <h6 class="fw-bold text-dark mb-1" style="font-size: 14px;">Kontak Pembina:</h6>
                            <p id="modalKontak" class="text-dark mb-0 fs-5 fw-bold">0812xxxxxx</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="text-white py-4 text-center" style="background-color: #102a43;">
    <div class="container">
        <small class="fw-normal">@ 2026 SMA Negeri 1 Batangan. All rights reserved.</small>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function(){
        var detailModal = document.getElementById('detailModal');
        detailModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var judul = button.getAttribute('data-judul');
            var deskripsi = button.getAttribute('data-deskripsi');
            var kontak = button.getAttribute('data-kontak');
            var gambar = button.getAttribute('data-gambar');
            var modalImg = detailModal.querySelector('#modalGambar');
            detailModal.querySelector('#modalJudul').textContent = judul;
            detailModal.querySelector('#modalDeskripsi').textContent = deskripsi;
            detailModal.querySelector('#modalKontak').textContent = kontak;
            modalImg.src = gambar;
        });
    });
</script>