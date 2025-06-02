<?php
include 'headerr.php';
include 'sidebar.php';
?>
<!--
=========================================================
* Argon Dashboard 3 - v2.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2024 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php
$pesanan = [
    ["id" => "#A04562", "tanggal" => "1 Maret 2024, 12.42 WIB", "nama" => "Agus Wibowo", "jenis" => "Makan Di Tempat", "meja" => "#4", "total" => 82.4002],
    ["id" => "#A04563", "tanggal" => "1 Maret 2024, 13.30 WIB", "nama" => "Tri Wijaya", "jenis" => "Makan Di Tempat", "meja" => "#11", "total" => 70.1004],
    ["id" => "#A04564", "tanggal" => "1 Maret 2024, 14.20 WIB", "nama" => "Agung Wicak", "jenis" => "Makan Di Tempat", "meja" => "#7", "total" => 90.0003],
    ["id" => "#A04565", "tanggal" => "1 Maret 2024, 14.23 WIB", "nama" => "Supriyadi", "jenis" => "Makan Di Tempat", "meja" => "#1", "total" => 85.6700],
    // Tambahkan data lainnya sesuai kebutuhan
];
?>

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

              <li class="flex items-center pl-4 xl:hidden">
                <a href="javascript:;" class="block p-0 text-sm text-white transition-all ease-nav-brand" sidenav-trigger>
                  <div class="w-4.5 overflow-hidden">
                    <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                    <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                    <i class="ease relative block h-0.5 rounded-sm bg-white transition-all"></i>
                  </div>
                </a>
              </li>
              <li class="flex items-center px-4">
                <a href="javascript:;" class="p-0 text-sm text-white transition-all ease-nav-brand">
                  <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog"></i>
                  <!-- fixed-plugin-button-nav  -->
                </a>
              </li>

              <!-- notifications -->
            </ul>
          </div>
        </div>
      </nav>
        <!-- end sidenav -->
        <div class="w-full px-4 mx-auto md:w-10/12 lg:w-9/12 xl:w-8/12">
            <div class="w-full px-4 mx-auto md:w-10/12 lg:w-9/12 xl:w-8/12">
                <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <!-- Header Card -->
                    <div class="p-6 px-4 pb-0 mb-0 border-b-0 rounded-t-2xl">
                        <h6 class="text-lg font-semibold text-gray-700 dark:text-white">Daftar Pesanan Anda</h6>
                        <p class="text-sm text-gray-500 dark:text-gray-300 mt-1">Berikut adalah riwayat pesanan yang telah Anda buat</p>
                    </div>
                    
                    <!-- Table Section -->
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0 w-full">
                                <thead class="bg-gray-50 dark:bg-slate-800">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">ID</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Tanggal</th>
                                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Nama</th>
                                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Jenis</th>
                                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Meja</th>
                                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Total</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 dark:bg-slate-850 dark:divide-gray-700">
                                    <?php foreach ($pesanan as $p): ?>
                                    <tr class="hover:bg-gray-50 dark:hover:bg-slate-800 transition-colors duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <p class="text-sm font-medium text-gray-900 dark:text-white"><?= $p["id"] ?></p>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <p class="text-sm text-gray-500 dark:text-gray-300"><?= $p["tanggal"] ?></p>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center">
                                            <p class="text-sm font-medium text-gray-900 dark:text-white"><?= $p["nama"] ?></p>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                                <?= $p['jenis'] === 'Dine In' ? 'bg-green-100 text-green-800' : 'bg-blue-100 text-blue-800' ?>
                                                dark:<?= $p['jenis'] === 'Dine In' ? 'bg-green-900 text-green-200' : 'bg-blue-900 text-blue-200' ?>">
                                                <?= $p["jenis"] ?>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center">
                                            <span class="text-sm text-gray-500 dark:text-gray-300"><?= $p["meja"] ?></span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center">
                                            <span class="text-sm font-semibold text-green-600 dark:text-green-400">
                                                Rp <?= number_format($p["total"], 0, ',', '.') ?>
                                            </span>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <!-- Footer Card (optional) -->
                    <div class="p-4 border-t border-gray-200 dark:border-gray-700 text-right">
                        <p class="text-xs text-gray-500 dark:text-gray-400">
                            Total <?= count($pesanan) ?> pesanan ditemukan
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
