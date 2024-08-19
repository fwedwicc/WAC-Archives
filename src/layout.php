<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FM | WAC Archives</title>
  <link href="./output.css" rel="stylesheet">
  <script src="./js/nav.js"></script>
</head>

<body class="dark:bg-[#192231] bg-gray-50">
  <!-- Sidebar -->
  <aside class="lg:block hidden w-64 fixed h-screen p-5 space-y-7">
    <!-- Logo -->
    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-7 h-auto mt-4 ml-4">
      <path d="M11.5762 7.01086C11.5762 3.13887 14.715 0 18.587 0V0V30H11.5762V7.01086Z" fill="#6366f1" />
      <rect y="15.8986" width="7.01087" height="14.1014" fill="#6366f1" />
      <rect x="22.9893" y="15.8986" width="7.01087" height="14.1014" fill="#6366f1" />
      <path
        d="M24.0553 9.95392C27.3385 9.95392 30 12.6155 30 15.8986V15.8986L1.52588e-05 15.8986V15.8986C1.52588e-05 12.6155 2.66155 9.95392 5.94472 9.95392L24.0553 9.95392Z"
        fill="#6366f1" />
      <rect x="22.9893" width="5.9447" height="5.38043" transform="rotate(90 22.9893 0)" fill="#6366f1" />
    </svg>
    <!-- Navigation Buttons -->
    <div class="space-y-2">
      <span class="dark:text-gray-400 text-gray-600 text-xs">Active tabs</span>
      <nav class="flex flex-col gap-1" aria-label="Tabs" role="tablist" aria-orientation="vertical">
        <button type="button" class="hs-tab-active:bg-indigo-500/10 dark:hs-tab-active:text-indigo-400 hs-tab-active:text-indigo-500 py-2.5 px-4 inline-flex items-center gap-2.5 text-sm font-medium text-center dark:text-gray-400 text-gray-600 rounded-md dark:hover:text-gray-200 hover:text-indigo-500 focus:outline-none focus:text-gray-700 disabled:opacity-50 disabled:pointer-events-none transition ease-in-out duration-300" id="dashboard-item" data-tab-id="dashboard-tab" data-hs-tab="#dashboard-tab" aria-controls="dashboard-tab" role="tab">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z" />
          </svg>
          Dashboard
        </button>
        <button type="button" class="hs-tab-active:bg-indigo-500/10 dark:hs-tab-active:text-indigo-400 hs-tab-active:text-indigo-500 py-2.5 px-4 inline-flex items-center gap-2.5 text-sm font-medium text-center dark:text-gray-400 text-gray-600 rounded-md dark:hover:text-gray-200 hover:text-indigo-500 focus:outline-none focus:text-gray-700 disabled:opacity-50 disabled:pointer-events-none transition ease-in-out duration-300" id="components-item" data-tab-id="components-tab" data-hs-tab="#components-tab" aria-controls="components-tab" role="tab">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z" />
          </svg>
          Components
        </button>
        <button type="button" class="hs-tab-active:bg-indigo-500/10 dark:hs-tab-active:text-indigo-400 hs-tab-active:text-indigo-500 py-2.5 px-4 inline-flex items-center gap-2.5 text-sm font-medium text-center dark:text-gray-400 text-gray-600 rounded-md dark:hover:text-gray-200 hover:text-indigo-500 focus:outline-none focus:text-gray-700 disabled:opacity-50 disabled:pointer-events-none transition ease-in-out duration-300" id="forms-item" data-tab-id="forms-tab" data-hs-tab="#forms-tab" aria-controls="forms-tab" role="tab">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0 1 20.25 6v12A2.25 2.25 0 0 1 18 20.25H6A2.25 2.25 0 0 1 3.75 18V6A2.25 2.25 0 0 1 6 3.75h1.5m9 0h-9" />
          </svg>
          Forms
        </button>
      </nav>
    </div>
  </aside>
  <!-- Main Content -->
  <div class="lg:py-4 b-4 lg:pr-4 lg:p-0 p-4 lg:ml-64 h-screen">
    <div class="relative dark:bg-gray-800 bg-white border dark:border-gray-700/50 border-gray-200 rounded-xl h-full custom-scrollbar overflow-auto">
      <!-- Content Header -->
      <header class="dark:bg-gray-800 bg-white sticky top-0 py-4 px-8 flex justify-between items-center dark:border-gray-700/60 border-gray-200 border-b w-full">
        <!-- Breadcrumbs -->
        <ol class="flex items-center whitespace-nowrap">
          <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-indigo-600 focus:outline-none focus:text-indigo-600 dark:text-gray-500 dark:hover:text-indigo-500 dark:focus:text-indigo-500" href="#">
              Dashboard
            </a>
            <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="m9 18 6-6-6-6"></path>
            </svg>
          </li>
          <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-indigo-600 focus:outline-none focus:text-indigo-600 dark:text-gray-500 dark:hover:text-indigo-500 dark:focus:text-indigo-500" href="#">
              App Center
              <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"></path>
              </svg>
            </a>
          </li>
          <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
            Application
          </li>
        </ol>
        <!-- End of Breadcrumbs -->
        <div class="flex items-center gap-3">
          <!-- Theme Toggle -->
          <button type="button" class="hs-dark-mode-active:hidden block hs-dark-mode font-medium dark:text-gray-400 text-gray-600 rounded-full hover:bg-gray-400/20 transition duration-300 ease-in-out focus:outline-none focus:bg-gray-200" data-hs-theme-click-value="dark">
            <span class="group inline-flex shrink-0 justify-center items-center size-8">
              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
              </svg>
            </span>
          </button>
          <button type="button" class="hs-dark-mode-active:block hidden hs-dark-mode font-medium dark:text-gray-400 text-gray-600 rounded-full hover:bg-gray-400/20 transition duration-300 ease-in-out focus:outline-none focus:bg-gray-200" data-hs-theme-click-value="light">
            <span class="group inline-flex shrink-0 justify-center items-center size-8">
              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="4"></circle>
                <path d="M12 2v2"></path>
                <path d="M12 20v2"></path>
                <path d="m4.93 4.93 1.41 1.41"></path>
                <path d="m17.66 17.66 1.41 1.41"></path>
                <path d="M2 12h2"></path>
                <path d="M20 12h2"></path>
                <path d="m6.34 17.66-1.41 1.41"></path>
                <path d="m19.07 4.93-1.41 1.41"></path>
              </svg>
            </span>
          </button>
          <!-- Profile Dropdown -->
          <div class="hs-dropdown relative inline-flex">
            <button id="hs-dropdown-with-title" type="button" class="inline-flex items-center justify-center size-8 text-[10px] font-semibold rounded-full leading-none border border-gray-300 bg-indigo-600 text-white focus:ring-2 focus:ring-indigo-500 transition duration-300 ease-in-out" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
              FM
            </button>
            <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg p-1 space-y-0.5 mt-2 dark:bg-gray-800 dark:border dark:border-gray-700/50" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-with-title">
              <div class="py-5 flex flex-col justify-center items-center gap-3">
                <span class="inline-flex items-center justify-center size-12 text-sm font-semibold rounded-full leading-none border border-gray-300 bg-indigo-600 text-white focus:ring-2 focus:ring-indigo-500 transition duration-300 ease-in-out">
                  FM
                </span>
                <div class="space-y-1 text-center">
                  <h3 class="dark:text-gray-400 text-gray-600 text-md">Frederick Moreno</h3>
                  <p class="dark:text-gray-400 text-gray-600 text-xs">frederick.moreno@email.com</p>
                </div>
              </div>
              <div class="mt-2 py-2 first:pt-0 last:pb-0">
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700/40 dark:hover:text-gray-300 dark:focus:bg-gray-700 transition duration-300" href="#">
                  <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
                    <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
                  </svg>
                  Newsletter
                </a>
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700/40 dark:hover:text-gray-300 dark:focus:bg-gray-700 transition duration-300" href="#">
                  <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="8" cy="21" r="1" />
                    <circle cx="19" cy="21" r="1" />
                    <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12" />
                  </svg>
                  Purchases
                </a>
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700/40 dark:hover:text-gray-300 dark:focus:bg-gray-700 transition duration-300" href="#">
                  <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242" />
                    <path d="M12 12v9" />
                    <path d="m8 17 4 4 4-4" />
                  </svg>
                  Downloads
                </a>
              </div>
            </div>
          </div>
          <!-- End of Profile Dropdown -->
        </div>
      </header>
      <!-- End of Content Header -->
      <!-- Tab Content -->
      <div class="p-8">
        <!-- Tab 1 -->
        <div id="dashboard-tab" role="tabpanel" aria-labelledby="dashboard-item">
          <?php include_once './dashboard.php'; ?>
        </div>
        <!-- Tab 2 -->
        <div id="components-tab" class="hidden" role="tabpanel" aria-labelledby="components-item">
          <?php include_once './components.php'; ?>
        </div>
        <!-- Tab 3 -->
        <div id="forms-tab" class="hidden" role="tabpanel" aria-labelledby="forms-item">
          <?php include_once './forms.php'; ?>
        </div>
      </div>
      <!-- End of Tab Content -->
    </div>
  </div>
  <!-- End of Main Content -->
  <script src="../node_modules/preline/dist/preline.js"></script>
</body>

</html>