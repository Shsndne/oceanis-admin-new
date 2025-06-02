<?php
include 'headerr.php';
include 'sidebar.php';
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
<body class="m-0 font-sans antialiased font-normal dark:bg-slate-900 text-base leading-default bg-gray-50 text-slate-500">
  <div class="relative w-full min-h-[300px] bg-[url('asset-nadine/banner.jpg')] bg-cover bg-center">
    <span class="absolute top-0 left-0 w-full h-full bg-[#F3EBDE] opacity-60"></span>
    <!-- Konten lain di atas overlay -->
    <div class="relative z-10 p-8 text-black">
  </div>
  </div>
    <div class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68">
      <nav class="absolute z-20 flex flex-wrap items-center justify-between w-full px-6 py-2 -mt-56 text-white transition-all ease-in shadow-none duration-250 lg:flex-nowrap lg:justify-start" navbar-profile navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-6 py-1 mx-auto flex-wrap-inherit">
          <nav>
            <!-- breadcrumb -->
            <ol class="flex flex-wrap pt-1 pl-2 pr-4 mr-12 bg-transparent rounded-lg sm:mr-16">
              <li class="leading-normal text-sm">
                <a class="opacity-50" href="javascript:;">Pages</a>
              </li>
              <li class="text-sm pl-2 capitalize leading-normal before:float-left before:pr-2 before:content-['/']" aria-current="page">Profile</li>
            </ol>
            <h6 class="mb-2 ml-2 font-bold text-white capitalize dark:text-white">Profile</h6>
          </nav>

          <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
            <div class="flex items-center md:ml-auto md:pr-4">
              <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease">
                <span class="text-sm ease leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                </span>              </div>
            </div>
            <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
              <!-- online builder btn  -->
              <!-- <li class="flex items-center">
                <a class="inline-block px-8 py-2 mb-0 mr-4 font-bold text-center text-white uppercase align-middle transition-all ease-in border border-solid rounded-lg shadow-none cursor-pointer leading-pro border-white/75 bg-white/10 text-xs hover:-translate-y-px active:shadow-xs tracking-tight-rem hover:border-white hover:bg-transparent hover:text-white hover:opacity-75 hover:shadow-none active:bg-white active:text-black active:hover:bg-transparent active:hover:text-white" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053">Online Builder</a>
              </li> -->
              <li class="flex items-center">
                <a href="../pages/sign-in.html" class="block px-0 py-2 font-semibold text-white transition-all ease-in-out text-sm">
                  <i class="fa fa-user sm:mr-1" aria-hidden="true"></i>
                  <span class="hidden sm:inline">Sign In</span>
                </a>
              </li>
              <li class="flex items-center pl-4 xl:hidden">
                <a href="javascript:;" class="block p-0 text-white transition-all ease-in-out text-sm" sidenav-trigger>
                  <div class="w-4.5 overflow-hidden">
                    <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                    <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                    <i class="ease relative block h-0.5 rounded-sm bg-white transition-all"></i>
                  </div>
                </a>
              </li>
              <li class="flex items-center px-4">
                <a href="javascript:;" class="p-0 text-white transition-all ease-in-out text-sm">
                  <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog" aria-hidden="true"></i>
                  <!-- fixed-plugin-button-nav  -->
                </a>
              </li>

              <!-- notifications -->

              <li class="relative flex items-center pr-2">
                <p class="hidden dark:text-white dark:opacity-60 transform-dropdown-show"></p>
                <a dropdown-trigger href="javascript:;" class="block p-0 text-white transition-all text-sm ease-nav-brand" aria-expanded="false">
                  <i class="cursor-pointer fa fa-bell" aria-hidden="true"></i>
                </a>

                <ul dropdown-menu class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease lg:shadow-3xl duration-250 min-w-44 before:sm:right-8 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
                  <!-- add show class on dropdown open js -->
                  <li class="relative mb-2">
                    <a class="ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 lg:transition-colors" href="javascript:;">
                      <div class="flex py-1">
                        <div class="my-auto">
                          <img src="../assets/img/team-2.jpg" class="inline-flex items-center justify-center mr-4 text-white text-sm h-9 w-9 max-w-none rounded-xl" />
                        </div>
                        <div class="flex flex-col justify-center">
                          <h6 class="mb-1 font-normal leading-normal dark:text-white text-sm"><span class="font-semibold">New message</span> from Laur</h6>
                          <p class="mb-0 leading-tight dark:text-white dark:opacity-60 text-xs text-slate-400">
                            <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                            13 minutes ago
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>

                  <li class="relative mb-2">
                    <a class="ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 duration-300 lg:transition-colors" href="javascript:;">
                      <div class="flex py-1">
                        <div class="my-auto">
                          <img src="../assets/img/small-logos/logo-spotify.svg" class="inline-flex items-center justify-center mr-4 text-white text-sm bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 h-9 w-9 max-w-none rounded-xl" />
                        </div>
                        <div class="flex flex-col justify-center">
                          <h6 class="mb-1 font-normal leading-normal dark:text-white text-sm"><span class="font-semibold">New album</span> by Travis Scott</h6>
                          <p class="mb-0 leading-tight dark:text-white dark:opacity-60 text-xs text-slate-400">
                            <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                            1 day
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>

                  <li class="relative">
                    <a class="ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 duration-300 lg:transition-colors" href="javascript:;">
                      <div class="flex py-1">
                        <div class="inline-flex items-center justify-center my-auto mr-4 text-white transition-all duration-200 ease-in-out text-sm bg-gradient-to-tl from-slate-600 to-slate-300 h-9 w-9 rounded-xl">
                          <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>credit-card</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                  <g transform="translate(453.000000, 454.000000)">
                                    <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                    <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </svg>
                        </div>
                        <div class="flex flex-col justify-center">
                          <h6 class="mb-1 font-normal leading-normal dark:text-white text-sm">Payment successfully completed</h6>
                          <p class="mb-0 leading-tight dark:text-white dark:opacity-60 text-xs text-slate-400">
                            <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                            2 days
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="w-full px-4 mx-auto md:w-10/12 lg:w-9/12 xl:w-8/12">
        <!-- Card Profile -->
        <div class="relative flex flex-col min-w-0 p-6 overflow-hidden break-words bg-white border-0 dark:bg-slate-850 shadow-2xl dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <!-- Header Profile -->
            <div class="flex flex-wrap items-center -mx-3">
                <div class="flex-none w-auto max-w-full px-3">
                    <div class="relative">
                        <img src="../pages/img/pp.jpeg" alt="profile_image" class="w-24 h-24 shadow-2xl rounded-full border-4 border-white dark:border-slate-800" width="200px" />
                        <span class="absolute bottom-0 right-0 w-6 h-6 bg-blue-500 rounded-full border-2 border-white dark:border-slate-800 flex items-center justify-center">
                            <i class="fas fa-pen text-white text-xs"></i>
                        </span>
                    </div>
                </div>
                <div class="flex-none w-auto max-w-full px-3 my-auto">
                    <div class="h-full">
                        <h5 class="mb-1 text-2xl font-bold dark:text-white">Nadine Zaskia</h5>
                        <p class="mb-2 font-semibold leading-normal text-blue-600 dark:text-blue-300">Kasir Utama</p>
                        <div class="flex items-center space-x-2">
                            <span class="px-2 py-1 text-xs font-semibold bg-blue-100 text-blue-600 dark:bg-blue-900 dark:text-blue-200 rounded-full">
                                <i class="fas fa-circle text-xs mr-1"></i> Aktif
                            </span>
                            <span class="text-xs text-gray-500 dark:text-gray-300">
                                Bergabung sejak Jan 2023
                            </span>
                        </div>
                    </div>
                </div>
                <div class="w-full max-w-full px-3 mt-4 text-right md:w-auto md:mt-0 md:ml-auto md:flex-0">
                    <button class="px-6 py-2 text-xs font-bold text-white uppercase transition-all bg-blue-500 rounded-lg shadow-md hover:shadow-lg hover:bg-blue-600 focus:outline-none">
                        <i class="fas fa-save mr-1"></i> Simpan Perubahan
                    </button>
                </div>
            </div>

            <!-- Tab Navigation -->
            <div class="mt-8 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px" id="profileTabs" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 border-blue-500 rounded-t-lg text-blue-600 dark:text-blue-300 font-medium" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">
                            <i class="fas fa-user-circle mr-2"></i>Profil
                        </button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 font-medium" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">
                            <i class="fas fa-cog mr-2"></i>Pengaturan
                        </button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 font-medium" id="activity-tab" data-tabs-target="#activity" type="button" role="tab" aria-controls="activity" aria-selected="false">
                            <i class="fas fa-chart-line mr-2"></i>Aktivitas
                        </button>
                    </li>
                </ul>
            </div>

            <!-- Tab Content -->
            <div class="mt-6" id="profileTabsContent">
                <!-- Profile Tab -->
                <div class="p-4 rounded-lg bg-gray-50 dark:bg-slate-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <!-- Informasi Pribadi -->
                        <div>
                            <h6 class="text-lg font-semibold text-gray-700 dark:text-white mb-4 flex items-center">
                                <i class="fas fa-id-card mr-2 text-blue-500"></i> Informasi Pribadi
                            </h6>
                            <div class="space-y-4">
                                <div>
                                    <label class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Nama Lengkap</label>
                                    <div class="flex items-center p-3 bg-white dark:bg-slate-700 rounded-lg border border-gray-200 dark:border-gray-600">
                                        <i class="fas fa-user text-gray-400 mr-2"></i>
                                        <span class="text-gray-800 dark:text-gray-200">Nadine Zaskia</span>
                                    </div>
                                </div>
                                <div>
                                    <label class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Jabatan</label>
                                    <div class="flex items-center p-3 bg-white dark:bg-slate-700 rounded-lg border border-gray-200 dark:border-gray-600">
                                        <i class="fas fa-briefcase text-gray-400 mr-2"></i>
                                        <span class="text-gray-800 dark:text-gray-200">Kasir Utama</span>
                                    </div>
                                </div>
                                <div>
                                    <label class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Tanggal Lahir</label>
                                    <div class="flex items-center p-3 bg-white dark:bg-slate-700 rounded-lg border border-gray-200 dark:border-gray-600">
                                        <i class="fas fa-birthday-cake text-gray-400 mr-2"></i>
                                        <span class="text-gray-800 dark:text-gray-200">15 April 1995</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Statistik Kerja -->
                        <div>
                            <h6 class="text-lg font-semibold text-gray-700 dark:text-white mb-4 flex items-center">
                                <i class="fas fa-chart-pie mr-2 text-blue-500"></i> Statistik Kerja
                            </h6>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="p-4 bg-blue-50 dark:bg-blue-900/30 rounded-lg border border-blue-100 dark:border-blue-800">
                                    <div class="text-blue-600 dark:text-blue-300 mb-1">
                                        <i class="fas fa-cash-register"></i>
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-800 dark:text-white">1,248</h3>
                                    <p class="text-xs text-gray-500 dark:text-gray-300">Transaksi</p>
                                </div>
                                <div class="p-4 bg-green-50 dark:bg-green-900/30 rounded-lg border border-green-100 dark:border-green-800">
                                    <div class="text-green-600 dark:text-green-300 mb-1">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-800 dark:text-white">4.9</h3>
                                    <p class="text-xs text-gray-500 dark:text-gray-300">Rating</p>
                                </div>
                                <div class="p-4 bg-amber-50 dark:bg-amber-900/30 rounded-lg border border-amber-100 dark:border-amber-800">
                                    <div class="text-amber-600 dark:text-amber-300 mb-1">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-800 dark:text-white">98%</h3>
                                    <p class="text-xs text-gray-500 dark:text-gray-300">Kehadiran</p>
                                </div>
                                <div class="p-4 bg-purple-50 dark:bg-purple-900/30 rounded-lg border border-purple-100 dark:border-purple-800">
                                    <div class="text-purple-600 dark:text-purple-300 mb-1">
                                        <i class="fas fa-award"></i>
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-800 dark:text-white">3</h3>
                                    <p class="text-xs text-gray-500 dark:text-gray-300">Penghargaan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Settings Tab (hidden by default) -->
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-slate-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                    <h6 class="text-lg font-semibold text-gray-700 dark:text-white mb-6 flex items-center">
                        <i class="fas fa-cog mr-2 text-blue-500"></i> Pengaturan Akun
                    </h6>
                    
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <!-- Form Edit Profil -->
                        <div>
                            <h6 class="text-md font-semibold text-gray-700 dark:text-white mb-4">Informasi Pengguna</h6>
                            <div class="space-y-4">
                                <div>
                                    <label class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Nama Pengguna</label>
                                    <input type="text" value="Nadine Cantik" class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                                </div>
                                <div>
                                    <label class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                                    <input type="email" value="goesgoes@gmail.com" class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Nama Depan</label>
                                        <input type="text" value="Nadine" class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                                    </div>
                                    <div>
                                        <label class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Nama Belakang</label>
                                        <input type="text" value="Zaskia" class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Form Kontak -->
                        <div>
                            <h6 class="text-md font-semibold text-gray-700 dark:text-white mb-4">Kontak Informasi</h6>
                            <div class="space-y-4">
                                <div>
                                    <label class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Alamat</label>
                                    <input type="text" value="Jalan mana yah" class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                                </div>
                                <div class="grid grid-cols-3 gap-4">
                                    <div>
                                        <label class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Kota</label>
                                        <input type="text" value="New York" class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                                    </div>
                                    <div>
                                        <label class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Negara</label>
                                        <input type="text" value="United States" class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                                    </div>
                                    <div>
                                        <label class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Kode Pos</label>
                                        <input type="text" value="437300" class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                                    </div>
                                </div>
                                <div>
                                    <label class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Nomor Telepon</label>
                                    <input type="tel" value="+1 (234) 567-8901" class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Activity Tab (hidden by default) -->
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-slate-800" id="activity" role="tabpanel" aria-labelledby="activity-tab">
                    <h6 class="text-lg font-semibold text-gray-700 dark:text-white mb-6 flex items-center">
                        <i class="fas fa-chart-line mr-2 text-blue-500"></i> Aktivitas Terakhir
                    </h6>
                    
                    <div class="space-y-4">
                        <div class="p-4 bg-white dark:bg-slate-700 rounded-lg shadow-xs">
                            <div class="flex items-center">
                                <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                                    <i class="fas fa-cash-register"></i>
                                </div>
                                <div>
                                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-300">
                                        Menyelesaikan transaksi #TRX-1254 senilai Rp 125.000
                                    </p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">
                                        15 menit yang lalu
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 bg-white dark:bg-slate-700 rounded-lg shadow-xs">
                            <div class="flex items-center">
                                <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                                    <i class="fas fa-user-check"></i>
                                </div>
                                <div>
                                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-300">
                                        Memberikan diskon 10% untuk pelanggan tetap
                                    </p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">
                                        1 jam yang lalu
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 bg-white dark:bg-slate-700 rounded-lg shadow-xs">
                            <div class="flex items-center">
                                <div class="p-3 mr-4 text-amber-500 bg-amber-100 rounded-full dark:text-amber-100 dark:bg-amber-500">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </div>
                                <div>
                                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-300">
                                        Melaporkan masalah dengan mesin kasir
                                    </p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">
                                        3 jam yang lalu
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 bg-white dark:bg-slate-700 rounded-lg shadow-xs">
                            <div class="flex items-center">
                                <div class="p-3 mr-4 text-purple-500 bg-purple-100 rounded-full dark:text-purple-100 dark:bg-purple-500">
                                    <i class="fas fa-award"></i>
                                </div>
                                <div>
                                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-300">
                                        Mencapai target penjualan harian
                                    </p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">
                                        Kemarin, 18:42
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="pt-6">
            <div class="w-full px-6 mx-auto">
                <div class="flex flex-wrap items-center justify-between">
                    <p class="text-sm text-gray-500 dark:text-gray-300">
                        © 2025 <a href="#" class="text-blue-500 hover:text-blue-600 dark:hover:text-blue-400">Oceanis</a>. All rights reserved.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-500 hover:text-gray-700 dark:hover:text-gray-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-700 dark:hover:text-gray-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-700 dark:hover:text-gray-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-700 dark:hover:text-gray-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- JavaScript untuk tabs -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('[data-tabs-target]');
            const tabContents = document.querySelectorAll('[role="tabpanel"]');
            
            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    const target = document.querySelector(tab.dataset.tabsTarget);
                    
                    // Hide all tab contents
                    tabContents.forEach(content => {
                        content.classList.add('hidden');
                    });
                    
                    // Show selected tab content
                    target.classList.remove('hidden');
                    
                    // Update active tab style
                    tabs.forEach(t => {
                        t.classList.remove('border-blue-500', 'text-blue-600', 'dark:text-blue-300');
                        t.classList.add('border-transparent', 'hover:text-gray-600', 'hover:border-gray-300', 'dark:hover:text-gray-300');
                    });
                    
                    tab.classList.add('border-blue-500', 'text-blue-600', 'dark:text-blue-300');
                    tab.classList.remove('border-transparent', 'hover:text-gray-600', 'hover:border-gray-300', 'dark:hover:text-gray-300');
                });
            });
        });
    </script>
</body>
  <!-- plugin for scrollbar  -->
  <script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>
  <!-- main script file  -->
  <script src="../assets/js/argon-dashboard-tailwind.js?v=1.0.1" async></script>
</html>
