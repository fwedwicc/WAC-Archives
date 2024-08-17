<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FM | WAC Archives</title>
  <link href="./output.css" rel="stylesheet">
</head>

<body class="dark:bg-neutral-800 bg-neutral-50">
  <!-- Sidebar -->
  <aside class="lg:block hidden w-64 fixed h-screen p-5 space-y-7">
    <!-- Logo -->
    <img src="../assets/FM-logo.png" alt="FM Logo" class="w-7 h-auto mt-4 ml-4">
    <!-- Navigation Buttons -->
    <div class="space-y-2">
      <span class="text-neutral-400 text-xs">Active tabs</span>
      <nav class="flex flex-col gap-1" aria-label="Tabs" role="tablist" aria-orientation="vertical">
        <button type="button" class="hs-tab-active:bg-green-500/10 hs-tab-active:border-l-green-500 hs-tab-active:border-l-2 hs-tab-active:text-green-400 py-2.5 px-4 inline-flex items-center gap-2.5 hover:bg-neutral-700/20 text-sm font-medium text-center text-neutral-400 rounded-md hover:text-neutral-200 focus:outline-none focus:text-gray-700 disabled:opacity-50 disabled:pointer-events-none active transition ease-in-out duration-300" id="dashboard-item" aria-selected="true" data-hs-tab="#dashboard-tab" aria-controls="dashboard-tab" role="tab">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z" />
          </svg>
          Dashboard
        </button>
        <button type="button" class="hs-tab-active:bg-green-500/10 hs-tab-active:border-l-green-500 hs-tab-active:border-l-2 hs-tab-active:text-green-400 py-2.5 px-4 inline-flex items-center gap-2.5 hover:bg-neutral-700/20 text-sm font-medium text-center text-neutral-400 rounded-md hover:text-neutral-200 focus:outline-none focus:text-gray-700 disabled:opacity-50 disabled:pointer-events-none transition ease-in-out duration-300" id="card-type-tab-item-2" aria-selected="false" data-hs-tab="#card-type-tab-2" aria-controls="card-type-tab-2" role="tab">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
          </svg>
          Di ko na alam
        </button>
        <button type="button" class="hs-tab-active:bg-green-500/10 hs-tab-active:border-l-green-500 hs-tab-active:border-l-2 hs-tab-active:text-green-400 py-2.5 px-4 inline-flex items-center gap-2.5 hover:bg-neutral-700/20 text-sm font-medium text-center text-neutral-400 rounded-md hover:text-neutral-200 focus:outline-none focus:text-gray-700 disabled:opacity-50 disabled:pointer-events-none transition ease-in-out duration-300" id="card-type-tab-item-3" aria-selected="false" data-hs-tab="#card-type-tab-3" aria-controls="card-type-tab-3" role="tab">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
          </svg>
          Di ko na alam
        </button>
      </nav>
    </div>
  </aside>
  <!-- Main Content -->
  <div class="lg:py-4 b-4 lg:pr-4 lg:p-0 p-4 lg:ml-64 h-[93vh]">
    <!-- Content Header -->
    <header class="flex justify-end items-start gap-3 h-12">
      <!-- Theme Toggle -->
      <button type="button" class="hs-dark-mode-active:hidden block hs-dark-mode font-medium text-neutral-300 rounded-full hover:bg-neutral-500/20 transition duration-300 ease-in-out focus:outline-none focus:bg-gray-200" data-hs-theme-click-value="dark">
        <span class="group inline-flex shrink-0 justify-center items-center size-8">
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
          </svg>
        </span>
      </button>
      <button type="button" class="hs-dark-mode-active:block hidden hs-dark-mode font-medium text-neutral-300 rounded-full hover:bg-neutral-500/20 transition duration-300 ease-in-out focus:outline-none focus:bg-gray-200" data-hs-theme-click-value="light">
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
      <span class="inline-flex items-center justify-center size-8 text-xs font-semibold rounded-full leading-none border border-neutral-300 bg-green-600 text-white">
        FM
      </span>
    </header>
    <div class="dark:bg-neutral-700/20 bg-neutral-100 border dark:border-neutral-600/20 border-none p-8 rounded-xl h-full custom-scrollbar overflow-auto">
      <!-- Tab 1 -->
      <div id="dashboard-tab" role="tabpanel" aria-labelledby="dashboard-item">
        <?php
        include_once './dashboard.php';
        ?>
      </div>
      <!-- Tab 2 -->
      <div id="card-type-tab-2" class="hidden" role="tabpanel" aria-labelledby="card-type-tab-item-2">

      </div>
      <!-- Tab 3 -->
      <div id="card-type-tab-3" class="hidden" role="tabpanel" aria-labelledby="card-type-tab-item-3">

      </div>
    </div>
  </div>
  <script src="../node_modules/preline/dist/preline.js"></script>
</body>

</html>