<div class="text-white py-4 text-center" style="background-color: #102a43;">
    <div class="container">
        <small class="fw-bold">@ 2026 SMA Negeri 1 Batangan. All rights reserved.</small>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    window.addEventListener('load', function() {
        // Cek apakah URL mengandung #kontak
        if (window.location.hash === "#kontak") {
            var element = document.getElementById("kontak");
            if (element) {
                // Scroll langsung (Instan) agar tidak gagal loading
                element.scrollIntoView({ behavior: 'auto', block: 'start' });
            }
        }
    });
</script>

</body>
</html>