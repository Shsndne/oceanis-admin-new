<?php
$conn = new mysqli("localhost", "root", "", "restoran_oceanis");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil id dari URL
if (!isset($_GET['id'])) {
    die("ID tidak ditemukan.");
}
$id = intval($_GET['id']);

// Proses update jika form disubmit
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $harga = intval($_POST['harga']);
    $kategori = $_POST['kategori'];

    // Cek apakah user upload gambar baru
    if ($_FILES['gambar']['name']) {
        $gambar = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];

        // Upload gambar baru
        move_uploaded_file($tmp, "gambar/" . $gambar);

        // Update dengan gambar baru
        $sql = "UPDATE menu SET nama='$nama', harga=$harga, kategori='$kategori', gambar='$gambar' WHERE id=$id";
    } else {
        // Update tanpa ganti gambar
        $sql = "UPDATE menu SET nama='$nama', harga=$harga, kategori='$kategori' WHERE id=$id";
    }

    if ($conn->query($sql) === TRUE) {
        header("Location: menu.php"); // Kembali ke daftar menu setelah update
        exit;
    } else {
        echo "Error saat update: " . $conn->error;
    }
}

// Ambil data menu yang akan diedit
$result = $conn->query("SELECT * FROM menu WHERE id=$id");
if ($result->num_rows == 0) {
    die("Data menu tidak ditemukan.");
}
$data = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Edit Menu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#f5f7fa] min-h-screen p-10">
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-xl p-8">
        <h2 class="text-3xl font-serif text-[#4C6EF5] text-center mb-6">✏️ Edit Menu</h2>

        <form action="" method="POST" enctype="multipart/form-data" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Image Upload -->
                <div class="col-span-1">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Gambar Produk</label>
                    <img src="gambar/<?php echo htmlspecialchars($data['gambar']); ?>" alt="Gambar Produk" class="mb-4 max-h-40 object-contain" />
                    <input type="file" name="gambar" accept="image/*" class="w-full" />
                    <small class="text-gray-500 text-xs">Kosongkan jika tidak ingin ganti gambar</small>
                </div>

                <!-- Form Fields -->
                <div class="col-span-2 space-y-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Produk</label>
                        <input
                            type="text"
                            name="nama"
                            value="<?php echo htmlspecialchars($data['nama']); ?>"
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
                            <?php
                            $kategoriOptions = ['INDONESIA FOOD', 'KOREAN FOOD', 'JAPANESE FOOD', 'WESTERN FOOD', 'DRINK', 'DESSERT'];
                            foreach ($kategoriOptions as $option) {
                                $selected = ($data['kategori'] === $option) ? 'selected' : '';
                                echo "<option value=\"$option\" $selected>$option</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Harga Produk</label>
                        <input
                            type="number"
                            name="harga"
                            value="<?php echo htmlspecialchars($data['harga']); ?>"
                            required
                            min="0"
                            class="w-full rounded-md border border-gray-300 px-3 py-2 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        />
                    </div>
                </div>
            </div>

            <div class="flex justify-between pt-6">
                <a href="menu.php" class="bg-gray-300 text-gray-700 px-5 py-2 rounded-md hover:bg-gray-400 transition">Kembali</a>
                <button type="submit" name="submit" class="bg-[#4C6EF5] text-white px-5 py-2 rounded-md hover:bg-blue-600 transition">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</body>
</html>
