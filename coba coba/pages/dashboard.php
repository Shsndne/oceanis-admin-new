<?php 
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

include 'headerr.php'; 
include 'sidebar.php'; ?>

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
            <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']" aria-current="page">Ulasan</li>
          </ol>
          <h6 class="mb-0 font-bold text-white capitalize">Beranda</h6>
        </nav>
      </div>
    </nav>
    <!-- end sidenav -->

      <!-- cards -->
      <div class="w-full px-6 py-6 mx-auto">
          <!-- row 1 - Statistik Utama -->
          <div class="flex flex-wrap -mx-3 mb-6">
              <!-- card1 - Pendapatan Hari Ini -->
              <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                  <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border hover:shadow-lg transition-shadow duration-300">
                      <div class="flex-auto p-4">
                          <div class="flex flex-row -mx-3">
                              <div class="flex-none w-2/3 max-w-full px-3">
                                  <div>
                                      <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Pendapatan Hari Ini</p>
                                      <h5 class="mb-2 font-bold dark:text-white">Rp 5.8JT</h5>
                                      <span class="text-xs font-semibold inline-block py-1 px-2 rounded-full text-emerald-600 bg-emerald-100 dark:bg-emerald-900 dark:text-emerald-200">
                                          <i class="fas fa-arrow-up mr-1"></i> 12%
                                      </span>
                                  </div>
                              </div>
                              <div class="px-3 text-right basis-1/3">
                                  <div class="inline-block w-12 h-12 text-center rounded-full bg-gradient-to-tl from-blue-500 to-violet-500 flex items-center justify-center">
                                      <i class="ni ni-money-coins text-lg text-white"></i>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="p-2 text-xs text-gray-500 dark:text-gray-300 border-t border-gray-100 dark:border-gray-700">
                          <i class="fas fa-history mr-1"></i> Diperbarui 5 menit lalu
                      </div>
                  </div>
              </div>

              <!-- card2 - Total Pemesanan -->
              <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                  <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border hover:shadow-lg transition-shadow duration-300">
                      <div class="flex-auto p-4">
                          <div class="flex flex-row -mx-3">
                              <div class="flex-none w-2/3 max-w-full px-3">
                                  <div>
                                      <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Total Pemesanan</p>
                                      <h5 class="mb-2 font-bold dark:text-white">5,084</h5>
                                      <span class="text-xs font-semibold inline-block py-1 px-2 rounded-full text-blue-600 bg-blue-100 dark:bg-blue-900 dark:text-blue-200">
                                          <i class="fas fa-calendar mr-1"></i> Bulan Ini
                                      </span>
                                  </div>
                              </div>
                              <div class="px-3 text-right basis-1/3">
                                  <div class="inline-block w-12 h-12 text-center rounded-full bg-gradient-to-tl from-red-600 to-orange-600 flex items-center justify-center">
                                      <i class="ni ni-cart text-lg text-white"></i>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="p-2 text-xs text-gray-500 dark:text-gray-300 border-t border-gray-100 dark:border-gray-700">
                          <i class="fas fa-users mr-1"></i> 42 pelanggan baru hari ini
                      </div>
                  </div>
              </div>

              <!-- card3 - Menu Tersedia -->
              <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                  <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border hover:shadow-lg transition-shadow duration-300">
                      <div class="flex-auto p-4">
                          <div class="flex flex-row -mx-3">
                              <div class="flex-none w-2/3 max-w-full px-3">
                                  <div>
                                      <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Menu Tersedia</p>
                                      <h5 class="mb-2 font-bold dark:text-white">60</h5>
                                      <div class="w-full bg-gray-200 rounded-full h-1.5 dark:bg-gray-700">
                                          <div class="bg-emerald-500 h-1.5 rounded-full" style="width: 85%"></div>
                                      </div>
                                      <p class="text-xs mt-1">85% menu tersedia</p>
                                  </div>
                              </div>
                              <div class="px-3 text-right basis-1/3">
                                  <div class="inline-block w-12 h-12 text-center rounded-full bg-gradient-to-tl from-emerald-500 to-teal-400 flex items-center justify-center">
                                      <i class="ni ni-ungroup text-lg text-white"></i>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="p-2 text-xs text-gray-500 dark:text-gray-300 border-t border-gray-100 dark:border-gray-700">
                          <i class="fas fa-exclamation-triangle mr-1 text-yellow-500"></i> 9 menu hampir habis
                      </div>
                  </div>
              </div>

              <!-- card4 - Pesan Antar -->
              <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
                  <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border hover:shadow-lg transition-shadow duration-300">
                      <div class="flex-auto p-4">
                          <div class="flex flex-row -mx-3">
                              <div class="flex-none w-2/3 max-w-full px-3">
                                  <div>
                                      <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Pesan Antar</p>
                                      <h5 class="mb-2 font-bold dark:text-white">345</h5>
                                      <div class="flex items-center">
                                          <span class="text-xs font-semibold mr-2">Target: 400</span>
                                          <span class="text-xs text-orange-500">(86%)</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="px-3 text-right basis-1/3">
                                  <div class="inline-block w-12 h-12 text-center rounded-full bg-gradient-to-tl from-orange-500 to-yellow-500 flex items-center justify-center">
                                      <i class="ni ni-delivery-fast text-lg text-white"></i>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="p-2 text-xs text-gray-500 dark:text-gray-300 border-t border-gray-100 dark:border-gray-700">
                          <i class="fas fa-clock mr-1"></i> Rata-rata waktu pengantaran: 35 menit
                      </div>
                  </div>
              </div>
          </div>

          <!-- row 2 - Grafik dan Info Tambahan -->
          <div class="flex flex-wrap -mx-3">
              <!-- Grafik Pesanan -->
              <div class="w-full max-w-full px-3 mt-0 lg:w-7/12 lg:flex-none">
                  <div class="border-black/12.5 dark:bg-slate-850 dark:shadow-dark-xl shadow-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                      <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid p-6 pt-4 pb-0">
                          <div class="flex justify-between items-center">
                              <div>
                                  <h6 class="capitalize dark:text-white text-lg font-semibold">Grafik Pesanan 1 Tahun Terakhir</h6>
                                  <p class="mb-0 text-sm leading-normal dark:text-white dark:opacity-60">
                                      <i class="fa fa-arrow-up text-emerald-500"></i>
                                      <span class="font-semibold">12% peningkatan</span> dari tahun lalu
                                  </p>
                              </div>
                              <div class="flex space-x-2">
                                  <button class="px-3 py-1 text-xs bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-300 rounded-full">Bulanan</button>
                              </div>
                          </div>
                      </div>
                      <div class="flex-auto p-4">
                          <div>
                              <canvas id="chart-line" height="300"></canvas>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Menu Populer -->
            <div class="w-full max-w-full px-3 mb-6 lg:mb-0 lg:w-5/12 lg:flex-none">
                  <div class="border-black/12.5 dark:bg-slate-850 dark:shadow-dark-xl shadow-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                      <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid p-6 pt-4 pb-0">
                          <h6 class="capitalize dark:text-white text-lg font-semibold">Menu Populer Minggu Ini</h6>
                          <p class="mb-0 text-sm leading-normal dark:text-white dark:opacity-60">
                              <i class="fa fa-fire mr-1 text-red-500"></i>
                              <span class="font-semibold">Top 5</span> menu paling laris
                          </p>
                      </div>
                      <div class="flex-auto p-4">
                          <div class="space-y-4">
                              <div class="flex items-center">
                                  <div class="w-10 h-10 rounded-full bg-amber-500 flex items-center justify-center text-white font-bold mr-3">1</div>
                                  <div class="flex-1">
                                      <p class="font-semibold dark:text-white">Nasi Goreng Spesial</p>
                                      <div class="flex items-center justify-between">
                                          <span class="text-xs text-gray-500 dark:text-gray-300">Terjual 324 porsi</span>
                                          <span class="text-xs font-semibold px-2 py-1 bg-emerald-100 text-emerald-600 dark:bg-emerald-900 dark:text-emerald-200 rounded-full">Rp 35.000</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="flex items-center">
                                  <div class="w-10 h-10 rounded-full bg-gray-300 dark:bg-gray-600 flex items-center justify-center text-gray-700 dark:text-gray-200 font-bold mr-3"></div>
                                  <div class="flex-1">
                                      <p class="font-semibold dark:text-white">Ayam Bakar Madu</p>
                                      <div class="flex items-center justify-between">
                                          <span class="text-xs text-gray-500 dark:text-gray-300">Terjual 287 porsi</span>
                                          <span class="text-xs font-semibold px-2 py-1 bg-emerald-100 text-emerald-600 dark:bg-emerald-900 dark:text-emerald-200 rounded-full">Rp 45.000</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="flex items-center">
                                  <div class="w-10 h-10 rounded-full bg-amber-700 flex items-center justify-center text-white font-bold mr-3"></div>
                                  <div class="flex-1">
                                      <p class="font-semibold dark:text-white">Sate Ayam</p>
                                      <div class="flex items-center justify-between">
                                          <span class="text-xs text-gray-500 dark:text-gray-300">Terjual 256 porsi</span>
                                          <span class="text-xs font-semibold px-2 py-1 bg-emerald-100 text-emerald-600 dark:bg-emerald-900 dark:text-emerald-200 rounded-full">Rp 30.000</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="flex items-center">
                                  <div class="w-10 h-10 rounded-full bg-gray-300 dark:bg-gray-600 flex items-center justify-center text-gray-700 dark:text-gray-200 font-bold mr-3"></div>
                                  <div class="flex-1">
                                      <p class="font-semibold dark:text-white">Mie Goreng Jawa</p>
                                      <div class="flex items-center justify-between">
                                          <span class="text-xs text-gray-500 dark:text-gray-300">Terjual 198 porsi</span>
                                          <span class="text-xs font-semibold px-2 py-1 bg-emerald-100 text-emerald-600 dark:bg-emerald-900 dark:text-emerald-200 rounded-full">Rp 28.000</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="flex items-center">
                                  <div class="w-10 h-10 rounded-full bg-gray-300 dark:bg-gray-600 flex items-center justify-center text-gray-700 dark:text-gray-200 font-bold mr-3"></div>
                                  <div class="flex-1">
                                      <p class="font-semibold dark:text-white">Es Teh Manis</p>
                                      <div class="flex items-center justify-between">
                                          <span class="text-xs text-gray-500 dark:text-gray-300">Terjual 512 gelas</span>
                                          <span class="text-xs font-semibold px-2 py-1 bg-emerald-100 text-emerald-600 dark:bg-emerald-900 dark:text-emerald-200 rounded-full">Rp 8.000</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
            </div>
          </div>
      </div>
    </main>
</body>
  <!-- plugin for charts  -->
  <script src="../assets/js/plugins/chartjs.min.js" async></script>
  <!-- plugin for scrollbar  -->
  <script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>
  <!-- main script file  -->
  <script src="../assets/js/argon-dashboard-tailwind.js?v=1.0.1" async></script>
</html>
