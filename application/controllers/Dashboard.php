<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller { 

    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('dashboard_view'); // Halaman Utama (Beranda)
        $this->load->view('layout/footer');  // Memuat script JS & penutup body
    }

    public function sambutan()
    {
        $this->load->view('layout/header');
        $this->load->view('sambutan_view');  // Halaman Sambutan Kepala Sekolah
        $this->load->view('layout/footer');  // Memuat script JS & penutup body
    }

    public function sejarah()
    {
        // Header Biru & Sticky (Bukan Home)
        $data['is_home'] = false; 
        
        $this->load->view('layout/header', $data);
        $this->load->view('sejarah_view'); // Kita buat file ini sebentar lagi
        $this->load->view('layout/footer'); // Memuat script JS penutup
    }

    public function visimisi()
    {
        // Header Biru & Sticky (Bukan Home)
        $data['is_home'] = false; 
        
        $this->load->view('layout/header', $data);
        $this->load->view('visimisi_view'); // File view yang akan kita buat
        $this->load->view('layout/footer');
    }

    public function struktur()
    {
        // Header Biru & Sticky
        $data['is_home'] = false; 
        
        $this->load->view('layout/header', $data);
        $this->load->view('struktur_view'); // File view yang akan kita buat
        $this->load->view('layout/footer');
    }

    public function guru($page = 1)
    {
        $data['is_home'] = false;
        
        // 1. Load Data JSON
        $json_path = FCPATH . 'assets/data/guru.json';
        $semua_guru = [];
        
        if (file_exists($json_path)) {
            $json_data = file_get_contents($json_path);
            $semua_guru = json_decode($json_data, true);
        }

        // 2. Logika Pagination (3x4 = 12 item per halaman)
        $per_page = 12; 
        
        $data['current_page'] = $page;
        $data['total_pages'] = ceil(count($semua_guru) / $per_page);
        
        // Validasi halaman agar tidak error
        if ($data['total_pages'] > 0 && $page > $data['total_pages']) {
            $page = $data['total_pages']; 
        }
        
        $offset = ($page - 1) * $per_page;
        if ($offset < 0) $offset = 0;

        // Ambil data sesuai halaman (Slice array)
        $data['data_guru'] = array_slice($semua_guru, $offset, $per_page);

        // 3. Load View
        $this->load->view('layout/header', $data);
        $this->load->view('guru_view', $data);
        $this->load->view('layout/footer');
    }

    // Di Controller Dashboard.php
    public function karyawan()
    {
        $data['is_home'] = false;
        $json_path = FCPATH . 'assets/data/staff.json'; // sesuaikan nama file json
        
        // Ambil SEMUA data
        $data['data_staff'] = [];
        if (file_exists($json_path)) {
            $json_data = file_get_contents($json_path);
            $data['data_staff'] = json_decode($json_data, true);
        }

        $this->load->view('layout/header', $data);
        $this->load->view('karyawan_view', $data); // sesuaikan nama view
        $this->load->view('layout/footer');
    }

    public function berita($page = 1, $filter_tahun = 'semua')
    {
        // 1. Load Data JSON
        $json_path = FCPATH . 'assets/data/berita.json';
        $semua_berita = [];
        
        if (file_exists($json_path)) {
            $json_data = file_get_contents($json_path);
            $semua_berita = json_decode($json_data, true);
        }

        // 2. LOGIKA FILTER BERDASARKAN TAHUN
        // Jika user memilih tahun (bukan 'semua'), kita saring datanya
        if ($filter_tahun != 'semua') {
            $berita_filtered = [];
            foreach ($semua_berita as $item) {
                // Cek apakah di dalam tanggal (misal "13 Nov 2025") ada angka tahun yg dipilih
                if (strpos($item['tanggal'], $filter_tahun) !== false) {
                    $berita_filtered[] = $item;
                }
            }
            $semua_berita = $berita_filtered; // Data yang dipakai adalah data hasil saring
        }

        // 3. Pagination Logic (Tetap Sama)
        $data['is_home'] = false;
        $data['current_page'] = $page;
        $data['selected_year'] = $filter_tahun; // Kirim info tahun ke View
        $per_page = 3; 

        $data['total_pages'] = ceil(count($semua_berita) / $per_page);
        
        // Mencegah error jika halaman > total halaman
        if ($data['total_pages'] > 0 && $page > $data['total_pages']) {
            $page = $data['total_pages']; 
        }
        
        $offset = ($page - 1) * $per_page;
        if ($offset < 0) $offset = 0;

        $data['data_berita'] = array_slice($semua_berita, $offset, $per_page);
        
        // 4. Load View
        $this->load->view('layout/header', $data);
        $this->load->view('berita_view', $data);
        $this->load->view('layout/footer');
    }

    public function ppdb()
    {
        $data['is_home'] = false;
        
        $this->load->view('layout/header', $data);
        $this->load->view('ppdb_view'); // Kita buat file ini sekarang
        $this->load->view('layout/footer');
    }

    public function pengumuman()
    {
        $data['is_home'] = false;
        
        $this->load->view('layout/header', $data);
        $this->load->view('pengumuman_view'); // File view baru
        $this->load->view('layout/footer');
    }

    // --- TEMPELKAN KODE INI DI DALAM CONTROLLER DASHBOARD ---

    public function hasil()
    {
        $data['is_home'] = false;
        
        // 1. Ambil data yang diketik pengguna di form
        // Kita gunakan trim() agar spasi di awal/akhir hilang
        $nama_input = trim($this->input->post('nama'));
        $nisn_input = trim($this->input->post('nisn'));

        // Jika user langsung buka link tanpa mengisi form, beri nilai default
        if (empty($nama_input)) $nama_input = "Siswa Percobaan";
        if (empty($nisn_input)) $nisn_input = "0000000000";

        // 2. LOGIKA DUMMY (Skenario Lulus/Tidak Lulus)
        // ATURAN: Jika NISN adalah '12345', maka TIDAK LULUS.
        if ($nisn_input == '12345') {
            $status = 'TIDAK LULUS';
        } else {
            $status = 'LULUS';
        }

        // 3. Masukkan ke array data untuk dikirim ke View
        $data['siswa'] = [
            'nama'   => strtoupper($nama_input), // Ubah jadi huruf besar biar rapi
            'nisn'   => $nisn_input,
            'status' => $status 
        ];

        $this->load->view('layout/header', $data);
        $this->load->view('hasil_view', $data); // Pastikan file hasil_view.php sudah ada
        $this->load->view('layout/footer');
    }

    public function agenda($page = 1, $filter_tahun = 'semua')
    {
        // 1. Load Data JSON
        $json_path = FCPATH . 'assets/data/agenda.json';
        $semua_agenda = [];
        
        if (file_exists($json_path)) {
            $json_data = file_get_contents($json_path);
            $semua_agenda = json_decode($json_data, true);
        }

        // 2. Filter Berdasarkan Tahun
        if ($filter_tahun != 'semua') {
            $agenda_filtered = [];
            foreach ($semua_agenda as $item) {
                if (strpos($item['tanggal'], $filter_tahun) !== false) {
                    $agenda_filtered[] = $item;
                }
            }
            $semua_agenda = $agenda_filtered;
        }

        // 3. Pagination Logic
        $data['is_home'] = false;
        $data['current_page'] = $page;
        $data['selected_year'] = $filter_tahun;
        $per_page = 3; 

        $data['total_pages'] = ceil(count($semua_agenda) / $per_page);
        
        if ($data['total_pages'] > 0 && $page > $data['total_pages']) {
            $page = $data['total_pages']; 
        }
        
        $offset = ($page - 1) * $per_page;
        if ($offset < 0) $offset = 0;

        $data['data_agenda'] = array_slice($semua_agenda, $offset, $per_page);
        
        // 4. Load View
        $this->load->view('layout/header', $data);
        $this->load->view('agenda_view', $data); // View baru
        $this->load->view('layout/footer');
    }

    // --- Pastikan kode ini ada di dalam class Dashboard ---

    public function ekskul($page = 1)
{
    // Mengambil data dari file JSON
    $path = FCPATH . 'assets/data/ekskul.json';
    if (file_exists($path)) {
        $json_data = file_get_contents($path);
        $semua_ekskul = json_decode($json_data, true) ?: [];
    } else {
        $semua_ekskul = [];
    }

    $per_page = 9; // Grid 3x3
    $total_items = count($semua_ekskul);
    $total_pages = ceil($total_items / $per_page);
    
    $offset = ($page - 1) * $per_page;
    $data_limit = array_slice($semua_ekskul, $offset, $per_page);

    $data['ekskul'] = $data_limit;
    $data['current_page'] = $page;
    $data['total_pages'] = $total_pages;
    $data['is_home'] = false;

    $this->load->view('layout/header', $data);
    $this->load->view('ekskul_view', $data);
    $this->load->view('layout/footer');
}

    public function fasilitas()
    {
        $data['is_home'] = false;
        
        // Load Data JSON
        $json_path = FCPATH . 'assets/data/fasilitas.json';
        $data['fasilitas'] = [];
        
        if (file_exists($json_path)) {
            $json_data = file_get_contents($json_path);
            $data['fasilitas'] = json_decode($json_data, true);
        }

        $this->load->view('layout/header', $data);
        $this->load->view('fasilitas_view', $data); // Kita buat view ini sekarang
        $this->load->view('layout/footer');
    }

    public function karya_murid($page = 1)
    {
        $data['is_home'] = false;
        
        // 1. Load Data JSON
        $json_path = FCPATH . 'assets/data/karya.json';
        $semua_karya = [];
        
        if (file_exists($json_path)) {
            $json_data = file_get_contents($json_path);
            $semua_karya = json_decode($json_data, true);
        }

        // 2. Pagination Logic
        // REVISI: Ubah menjadi 12 agar tampil 4 kolom x 3 baris
        $per_page = 12; 
        
        $data['current_page'] = $page;
        $data['total_pages'] = ceil(count($semua_karya) / $per_page);
        
        if ($data['total_pages'] > 0 && $page > $data['total_pages']) {
            $page = $data['total_pages']; 
        }
        $offset = ($page - 1) * $per_page;
        if ($offset < 0) $offset = 0;

        $data['data_karya'] = array_slice($semua_karya, $offset, $per_page);

        // 3. Load View
        $this->load->view('layout/header', $data);
        $this->load->view('karya_murid_view', $data);
        $this->load->view('layout/footer');
    }
    public function prestasi($page = 1, $kategori = 'semua')
    {
        $data['is_home'] = false;
        $data['kategori_selected'] = $kategori;

        // 1. LOAD DATA DARI JSON
        $json_path = FCPATH . 'assets/data/prestasi.json';
        $dummy_prestasi = [];
        
        if (file_exists($json_path)) {
            $json_data = file_get_contents($json_path);
            $dummy_prestasi = json_decode($json_data, true);
        }

        // 2. LOGIKA FILTER (Akademik / Non-Akademik)
        $filtered_data = [];
        if($kategori == 'semua') {
            $filtered_data = $dummy_prestasi;
        } else {
            foreach($dummy_prestasi as $p) {
                // Gunakan strtolower agar tidak sensitif huruf besar/kecil
                if(strtolower($p['kategori']) == strtolower($kategori)) {
                    $filtered_data[] = $p;
                }
            }
        }

        // 3. PAGINATION LOGIC
        $per_page = 6; // Jumlah item per halaman
        $data['current_page'] = $page;
        $data['total_pages'] = ceil(count($filtered_data) / $per_page);

        // Validasi jika page melebihi total
        if ($data['total_pages'] > 0 && $page > $data['total_pages']) {
            $page = $data['total_pages'];
        }
        
        $offset = ($page - 1) * $per_page;
        if ($offset < 0) $offset = 0;

        $data['data_prestasi'] = array_slice($filtered_data, $offset, $per_page);

        // 4. LOAD VIEW
        $this->load->view('layout/header', $data);
        $this->load->view('prestasi_view', $data); // Pastikan nama file view sesuai
        $this->load->view('layout/footer');
    }
    public function detail_prestasi($id = null)
    {
        $data['is_home'] = false;
        
        // 1. Load Data JSON
        $json_path = FCPATH . 'assets/data/prestasi.json';
        $semua_prestasi = [];
        
        if (file_exists($json_path)) {
            $json_data = file_get_contents($json_path);
            $semua_prestasi = json_decode($json_data, true);
        }

        // 2. Ambil Data Berdasarkan Index ($id)
        // Karena di JSON tidak ada field 'id' unik, kita pakai index array.
        // Pastikan $id adalah angka dan ada di dalam array
        if ($id !== null && isset($semua_prestasi[$id])) {
            $data['prestasi'] = $semua_prestasi[$id];
        } else {
            $data['prestasi'] = []; // Kosong jika tidak ketemu
        }

        // 3. Load View Detail
        $this->load->view('layout/header', $data);
        $this->load->view('detail_prestasi_view', $data);
        $this->load->view('layout/footer');
    }

    public function alumni($page = 1)
    {
        $data['is_home'] = false;
        
        // 1. Load Data JSON
        $json_path = FCPATH . 'assets/data/alumni.json';
        $semua_alumni = [];
        
        if (file_exists($json_path)) {
            $json_data = file_get_contents($json_path);
            $semua_alumni = json_decode($json_data, true);
        }

        // 2. Pagination Logic
        $per_page = 4; // Menampilkan 4 Alumni per halaman (2 baris x 2 kolom)
        
        $data['current_page'] = $page;
        $data['total_pages'] = ceil(count($semua_alumni) / $per_page);
        
        if ($data['total_pages'] > 0 && $page > $data['total_pages']) {
            $page = $data['total_pages']; 
        }
        $offset = ($page - 1) * $per_page;
        if ($offset < 0) $offset = 0;

        $data['data_alumni'] = array_slice($semua_alumni, $offset, $per_page);

        // 3. Load View
        $this->load->view('layout/header', $data);
        $this->load->view('alumni_view', $data); // View baru
        $this->load->view('layout/footer');
    }
}