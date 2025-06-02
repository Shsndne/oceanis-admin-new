<?php $activePage = basename($_SERVER['PHP_SELF']); ?>

<aside class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 xl:ml-6 max-w-64 ease-nav-brand z-990 rounded-2xl xl:left-0 xl:translate-x-0" aria-expanded="false">
    <div class="flex flex-col items-center justify-center h-32 px-4 py-4">
        <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden" sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700" href="https://demos.creative-tim.com/argon-dashboard-tailwind/pages/dashboard.php" target="_blank">
          <img src="../assets/img/OCEANIS.png" class="inline h-auto max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-9" alt="main_logo" />
          <img src="../assets/img/OCEANIS.png" class="hidden h-auto max-w-full transition-all duration-200 dark:inline ease-nav-brand max-h-9" alt="main_logo" />
        </a>
    </div>

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

    <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full" id="sidenav-collapse-main">
      
      <ul class="flex flex-col pl-0 mb-0">
        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80
            <?= $activePage == 'dashboard.php' ? 'bg-blue-500/13 font-semibold text-slate-700 rounded-lg' : '' ?>"
            href="../pages/dashboard.php">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
              <span class="material-symbols-outlined relative top-0 text-sm leading-normal text-blue-500">
                dashboard
              </span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Dashboard</span>
          </a>
        </li>
        
        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80
            <?= $activePage == 'menu.php' ? 'bg-blue-500/13 font-semibold text-slate-700 rounded-lg' : '' ?>"
            href="../pages/menu.php">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
              <span class="material-symbols-outlined text-orange-500 relative top-0 text-sm leading-normal">
                room_service
              </span>               
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Menu</span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80
            <?= $activePage == 'pesanan.php' ? 'bg-blue-500/13 font-semibold text-slate-700 rounded-lg' : '' ?>"
            href="../pages/pesanan.php">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
              <span class="material-symbols-outlined relative top-0 text-sm leading-normal text-red-600 ni">
                shopping_cart
              </span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Pesanan</span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80
            <?= $activePage == 'ulasan.php' ? 'bg-blue-500/13 font-semibold text-slate-700 rounded-lg' : '' ?>"
            href="../pages/ulasan.php">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current stroke-0 text-center xl:p-2.5">
              <span class="material-symbols-outlined relative top-0 text-sm leading-normal text-emerald-500">
                menu_book
              </span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Ulasan</span>
          </a>
        </li>
        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80
            <?= $activePage == 'profile.php' ? 'bg-blue-500/13 font-semibold text-slate-700 rounded-lg' : '' ?>"
            href="../pages/profile.php">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
              <i class="relative top-0 text-sm leading-normal text-slate-700 ni ni-single-02"></i>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Profile</span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80
            <?= $activePage == 'logout.php' ? 'bg-blue-500/13 font-semibold text-slate-700 rounded-lg' : '' ?>"
            href="../pages/logout.php" onclick="return confirm('Apakah Anda yakin ingin keluar dari sistem?\nPerubahan yang belum disimpan akan hilang.')" >
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <span class="material-symbols-outlined">
                logout
                </span>            
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">logout</span>
          </a>
        </li>   

      </ul>
</aside>
