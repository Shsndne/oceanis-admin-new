<?php
// Proses simpan ke database
$conn = new mysqli("localhost", "root", "", "restoran_oceanis");

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori'];

    // Upload gambar
    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];

    // Buat folder jika belum ada
    if (!is_dir('gambar')) {
        mkdir('gambar');
    }

    // Simpan file ke folder "gambar/"
    move_uploaded_file($tmp, "gambar/" . $gambar);

    // Simpan data ke database (tanpa jumlah)
    $sql = "INSERT INTO menu (nama, gambar, harga, kategori) 
            VALUES ('$nama', '$gambar', $harga, '$kategori')";
    
    if ($conn->query($sql)) {
    header("Location: ../pages/menu.php");
    exit;
    } else {
        echo "<script>alert('Gagal menyimpan data!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Tambah Menu Baru</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      body {
        font-family: "Segoe UI", sans-serif;
      }
    </style>
  </head>
  <body class="bg-[#f5f7fa] min-h-screen p-10">
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-xl p-8">
      <h2 class="text-3xl font-serif text-[#4C6EF5] text-center mb-6">
        🍽️ Tambah Menu Baru
      </h2>

      <form
        id="addForm"
        action="tambah.php"
        method="POST"
        enctype="multipart/form-data"
        class="space-y-6"
      >
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <div>
  <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Gambar Menu</label>
  <div id="dropArea" class="border-2 border-dashed border-slate-300 dark:border-slate-600 rounded-xl p-6 text-center cursor-pointer transition-colors duration-200 hover:border-blue-500 dark:hover:border-blue-400">
    <img id="imagePreview" src="#" alt="Preview" class="hidden mx-auto mb-4 max-h-48 w-auto rounded-lg object-cover" />
    <div id="uploadContent">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-slate-400 dark:text-slate-500 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
      </svg>
      <p class="text-sm text-slate-500 dark:text-slate-400 mb-1">Drag & drop gambar disini</p>
      <p class="text-xs text-slate-400 dark:text-slate-500">atau klik untuk memilih file</p>
    </div>
    <input type="file" name="gambar" id="imageInput" class="hidden" accept="image/*" required />
    <p id="fileInfo" class="text-xs text-slate-500 dark:text-slate-400 mt-3"></p>
  </div>
</div>
          <!-- Image Upload -->
          <!-- Form Fields -->
          <div class="col-span-2 space-y-4">
            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Produk</label>
              <input
                type="text"
                name="nama"
                placeholder="Masukkan nama menu"
                required
                class="w-full rounded-md border border-gray-300 px-3 py-2 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>

            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-1">Kategori</label>
              <select
                name="kategori"
                required
                class="w-full rounded-md border border-gray-300 px-3 py-2 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500"
              >
                <option value="">Pilih Tipe</option>
                <option value="INDONESIA FOOD">INDONESIA FOOD</option>
                <option value="KOREAN FOOD">KOREAN FOOD</option>
                <option value="JAPANESE FOOD">JAPANESE FOOD</option>
                <option value="WESTERN FOOD">WESTERN FOOD</option>
                <option value="DRINK">DRINK</option>
                <option value="DESSERT">DESSERT</option>
              </select>
            </div>

            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-1">Harga Produk</label>
              <input
                type="number"
                name="harga"
                placeholder="Rp ,00"
                required
                class="w-full rounded-md border border-gray-300 px-3 py-2 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
          </div>
        </div>

        <!-- Submit -->
        <div class="p-6 pb-0 mb-0 flex flex-row justify-between">
          <div class="text-right">
            <a href="menu.php" class="bg-gray-300 text-gray-700 px-5 py-2 rounded-md hover:bg-gray-400 transition">Kembali</a>
          </div>
          <div class="text-right">
            <button
              type="submit"
              name="submit"
              class="bg-[#4C6EF5] text-white px-5 py-2 rounded-md font-medium hover:bg-blue-600 transition"
            >
              + Tambah Menu
            </button>
          </div>
        </div>
      </form>
    </div>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
  const dropArea = document.getElementById('dropArea');
  const imageInput = document.getElementById('imageInput');
  const imagePreview = document.getElementById('imagePreview');
  const uploadContent = document.getElementById('uploadContent');
  const fileInfo = document.getElementById('fileInfo');

  // Handle klik pada drop area
  dropArea.addEventListener('click', () => imageInput.click());

  // Handle perubahan file input
  imageInput.addEventListener('change', function() {
    if (this.files && this.files[0]) {
      handleFile(this.files[0]);
    }
  });

  // Handle drag and drop
  ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, preventDefaults, false);
  });

  function preventDefaults(e) {
    e.preventDefault();
    e.stopPropagation();
  }

  ['dragenter', 'dragover'].forEach(eventName => {
    dropArea.addEventListener(eventName, highlight, false);
  });

  ['dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, unhighlight, false);
  });

  function highlight() {
    dropArea.classList.add('border-blue-500', 'bg-blue-50');
  }

  function unhighlight() {
    dropArea.classList.remove('border-blue-500', 'bg-blue-50');
  }

  dropArea.addEventListener('drop', function(e) {
    const dt = e.dataTransfer;
    const file = dt.files[0];
    handleFile(file);
    imageInput.files = dt.files; // Set files ke input
  });

  function handleFile(file) {
    // Validasi file
    if (!file.type.match('image.*')) {
      alert('Hanya file gambar yang diperbolehkan');
      return;
    }

    if (file.size > 2 * 1024 * 1024) {
      alert('Ukuran file maksimal 2MB');
      return;
    }

    const reader = new FileReader();
    reader.onload = function(e) {
      // Tampilkan gambar
      imagePreview.src = e.target.result;
      imagePreview.classList.remove('hidden');
      
      // Sembunyikan konten upload
      uploadContent.classList.add('hidden');
      
      // Tampilkan info file
      fileInfo.textContent = `${file.name} (${(file.size/1024).toFixed(1)} KB)`;
    };
    reader.readAsDataURL(file);
  }
});
    </script>
  </body>
</html>
