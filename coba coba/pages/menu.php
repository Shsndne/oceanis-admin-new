<?php
require_once 'db.php';
include 'sidebar.php';
include 'headerr.php';
?>

<!--

=========================================================
* Argon Dashboard 2 Tailwind - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-tailwind
* Copyright 2022 Creative Tim (https://www.creative-tim.com)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<body class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
    <div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>
      <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
            <!-- Navbar -->
            <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="false">
              <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
                <nav>
                  <!-- breadcrumb -->
                  <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                    <li class="text-sm leading-normal">
                      <a class="text-white opacity-50" href="javascript:;">Pages</a>
                    </li>
                    <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']" aria-current="page">Pesanan</li>
                  </ol>
                  <h6 class="mb-0 font-bold text-white capitalize">Pesanan</h6>
                </nav>
              </div>
            </div>
          </nav>
          <!-- card 2 --> 
      
          <div class="w-full px-4 mx-auto md:w-10/12 lg:w-9/12 xl:w-8/12">
            <div class="flex-none w-full max-w-full px-3">
              <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex flex-row justify-between">
                  <h6 class="dark:text-white">Daftar Menu</h6>            
                  <div class="flex gap-2">
                    
                    <button onclick="window.location.href='tambah.php'" class="bg-blue-500 hover:bg-blue-900 text-white font-semibold py-2 px-4 mb-2 mr-6 rounded-lg shadow-md transition duration-100">+ Add Menu</button>
                    <!-- Dropdown Filter Kategori -->
                    <form method="get" action="" class="flex items-center">
                      <select name="category" onchange="this.form.submit()" class="border rounded-lg px-3 py-2 font-bold text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-slate-800 dark:text-white dark:border-gray-600">
                        <option value="all" <?= (!isset($_GET['category']) || $_GET['category'] == 'all') ? 'selected' : '' ?>>SEMUA KATEGORI</option>
                        <?php
                        // Query untuk mendapatkan semua kategori unik
                        $kategoriQuery = "SELECT DISTINCT kategori FROM menu ORDER BY kategori";
                        $kategoriResult = mysqli_query($conn, $kategoriQuery);
                        while ($kategori = mysqli_fetch_assoc($kategoriResult)) {
                          $selected = (isset($_GET['category']) && $_GET['category'] == $kategori['kategori']) ? 'selected' : '';
                          echo '<option value="'.htmlspecialchars($kategori['kategori']).'" '.$selected.'>'.htmlspecialchars($kategori['kategori']).'</option>';
                        }
                        ?>
                      </select>
                    </form>
                  </div>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                  <div class="p-0 overflow-x-auto">
                    <table class="items-center justify-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                      <thead class="align-bottom">
                        <tr>
                          <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Nama Makanan</th>
                          <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Harga</th>
                          <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Kategori</th>
                          <th class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Keterangan</th>
                        </thead>
                      <tbody class="border-t">
                        <?php
                        // Ambil kategori dari parameter URL jika ada
                        $selectedCategory = isset($_GET['category']) ? $_GET['category'] : 'all';
                        
                        // Query data menu dengan filter
                        $query = "SELECT * FROM menu";
                        if ($selectedCategory != 'all') {
                          $query .= " WHERE kategori = '" . mysqli_real_escape_string($conn, $selectedCategory) . "'";
                        }
                        $query .= " ORDER BY id DESC"; // Optional: urutkan berdasarkan nama
                        
                        $result = mysqli_query($conn, $query);
                        $no = 1;
                        
                        if (mysqli_num_rows($result) > 0) {
                          while ($row = mysqli_fetch_assoc($result)) :
                        ?>
                        <tr>
                          <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                            <div class="flex items-center px-2">
                              <img src="gambar/<?= htmlspecialchars($row['gambar']) ?>" alt="<?= htmlspecialchars($row['nama']) ?>" class="h-10 w-10 rounded-full object-cover mr-3" />
                              <span class="text-sm leading-normal font-bold dark:text-white pl-2"><?= htmlspecialchars($row['nama']) ?></span>
                            </div>
                          </td>
                          <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                            <p class="text-sm font-semibold dark:text-white">Rp. <?= number_format($row['harga'], 0, ',', '.') ?></p>
                          </td>
                          <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                            <span class="text-sm dark:text-white dark:opacity-70"><?= htmlspecialchars($row['kategori']) ?></span>
                          </td>
                          <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                            <a href="edit.php?id=<?= $row['id'] ?>" class="text-blue-500 hover:underline text-sm mr-2">Edit</a>
                            <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin hapus?')" class="text-red-500 hover:underline text-sm">Hapus</a>
                          </td>
                        </tr>
                        <?php 
                          $no++;
                          endwhile;
                        } else {
                          echo '<tr><td colspan="4" class="p-4 text-center">Tidak ada data menu</td></tr>';
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    
  </body>  <!-- plugin for scrollbar  -->
  <script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>
  <!-- main script file  -->
  <script src="../assets/js/argon-dashboard-tailwind.js?v=1.0.1" async></script>
</html>
