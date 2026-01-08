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
        
        <div class="row g-4">
            <?php foreach($ekskul as $item): ?>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow rounded-3 overflow-hidden text-white" style="background-color: #102a43;">
                    
                    <div style="height: 220px; overflow: hidden;">
                        <img src="<?= base_url('assets/img/' . $item['gambar']) ?>" 
                             class="w-100 h-100 object-fit-cover" 
                             alt="<?= $item['nama'] ?>"
                             onerror="this.onerror=null; this.src='https://via.placeholder.com/600x400?text=Ekskul';">
                    </div>

                    <div class="card-body p-4 d-flex flex-column">
                        <h4 class="fw-bold text-uppercase mb-3"><?= $item['nama'] ?></h4>
                        
                        <p class="mb-4 text-white-50" style="font-size: 14px; line-height: 1.6; flex-grow: 1;">
                            <?= substr($item['deskripsi'], 0, 80) ?>...
                        </p>

                        <a href="#" 
                           class="text-decoration-none fw-bold text-warning btn-detail"
                           data-bs-toggle="modal" 
                           data-bs-target="#detailModal"
                           data-judul="<?= $item['nama'] ?>"
                           data-deskripsi="<?= $item['deskripsi'] ?>"
                           data-kontak="<?= $item['kontak'] ?>"
                           data-gambar="<?= base_url('assets/img/' . $item['gambar']) ?>">
                           Lihat Detail >>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>

<div class="modal fade" id="detailModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg"> <div class="modal-content rounded-4 border-0 overflow-hidden">
            
            <div class="modal-body p-0">
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3 p-2 bg-danger rounded-circle shadow" 
                        data-bs-dismiss="modal" aria-label="Close" style="z-index: 10; opacity: 1;"></button>

                <div class="row g-0">
                    <div class="col-md-5 bg-light">
                        <img id="modalGambar" src="" class="w-100 h-100 object-fit-cover" style="min-height: 350px;" alt="Detail Ekskul">
                    </div>

                    <div class="col-md-7 p-5 d-flex flex-column justify-content-center">
                        
                        <h3 id="modalJudul" class="fw-bold text-uppercase mb-3" style="color: #000;">NAMA EKSKUL</h3>
                        
                        <hr class="border-dark opacity-100 w-100 mb-4">
                        
                        <p id="modalDeskripsi" class="text-secondary mb-5" style="font-size: 15px; line-height: 1.6;">
                            Deskripsi kegiatan akan muncul di sini.
                        </p>

                        <hr class="border-dark opacity-100 w-100 mb-4">
                        
                        <h6 class="fw-bold text-dark">Kontak Pembina:</h6>
                        <p id="modalKontak" class="text-dark mb-0 fs-5">0812xxxxxx</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    // Tunggu dokumen siap
    document.addEventListener("DOMContentLoaded", function(){
        
        var detailModal = document.getElementById('detailModal');
        
        // Saat modal akan muncul
        detailModal.addEventListener('show.bs.modal', function (event) {
            // Tombol yang diklik
            var button = event.relatedTarget;
            
            // Ambil data dari atribut data-*
            var judul = button.getAttribute('data-judul');
            var deskripsi = button.getAttribute('data-deskripsi');
            var kontak = button.getAttribute('data-kontak');
            var gambar = button.getAttribute('data-gambar');

            // Masukkan data ke dalam elemen Modal
            detailModal.querySelector('#modalJudul').textContent = judul;
            detailModal.querySelector('#modalDeskripsi').textContent = deskripsi;
            detailModal.querySelector('#modalKontak').textContent = kontak;
            detailModal.querySelector('#modalGambar').src = gambar;
        });
    });
</script>

<div class="text-white py-4 text-center" style="background-color: #102a43;">
    <div class="container">
        <small class="fw-bold">@ 2026 SMA Negeri 1 Batangan. All rights reserved.</small>
    </div>
</div>