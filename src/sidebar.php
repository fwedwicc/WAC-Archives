<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar</title>
  <link href="./output.css" rel="stylesheet">
</head>

<body class="bg-neutral-800">
  <!-- Sidebar -->
  <aside class="lg:block hidden w-64 fixed h-screen p-5 space-y-7">
    <!-- Logo -->
    <img src="../assets/FM-logo.png" alt="FM Logo" class="w-7 h-auto">
    <!-- Navigation Buttons -->
    <div class="space-y-2">
      <span class="text-neutral-400 text-xs">Active tabs</span>
      <nav class="flex flex-col gap-1" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
        <button type="button" class="hs-tab-active:bg-indigo-500/10 hs-tab-active:border-l-indigo-500 hs-tab-active:border-l-2 hs-tab-active:text-indigo-400 py-2.5 px-4 inline-flex items-center gap-x-2 hover:bg-neutral-700/20 text-sm font-medium text-center text-neutral-400 rounded-md hover:text-neutral-200 focus:outline-none focus:text-gray-700 disabled:opacity-50 disabled:pointer-events-none active transition duration-300" id="card-type-tab-item-1" aria-selected="true" data-hs-tab="#card-type-tab-preview" aria-controls="card-type-tab-preview" role="tab">
          Dashboard
        </button>
        <button type="button" class="hs-tab-active:bg-indigo-500/10 hs-tab-active:border-l-indigo-500 hs-tab-active:border-l-2 hs-tab-active:text-indigo-400 py-2.5 px-4 inline-flex items-center gap-x-2 hover:bg-neutral-700/20 text-sm font-medium text-center text-neutral-400 rounded-md hover:text-neutral-200 focus:outline-none focus:text-gray-700 disabled:opacity-50 disabled:pointer-events-none transition duration-300" id="card-type-tab-item-2" aria-selected="false" data-hs-tab="#card-type-tab-2" aria-controls="card-type-tab-2" role="tab">
          Di ko na alam
        </button>
        <button type="button" class="hs-tab-active:bg-indigo-500/10 hs-tab-active:border-l-indigo-500 hs-tab-active:border-l-2 hs-tab-active:text-indigo-400 py-2.5 px-4 inline-flex items-center gap-x-2 hover:bg-neutral-700/20 text-sm font-medium text-center text-neutral-400 rounded-md hover:text-neutral-200 focus:outline-none focus:text-gray-700 disabled:opacity-50 disabled:pointer-events-none transition duration-300" id="card-type-tab-item-3" aria-selected="false" data-hs-tab="#card-type-tab-3" aria-controls="card-type-tab-3" role="tab">
          Di ko na alam
        </button>
      </nav>
    </div>
  </aside>
  <!-- Main Content -->
  <div class="lg:py-4 lg:pr-4 pt-14 lg:p-0 p-4 lg:ml-64 h-screen">
    <div class="bg-neutral-700/20 border border-neutral-600/20 p-8 rounded-xl h-full">
      <!-- Tab 1 -->
      <div id="card-type-tab-preview" role="tabpanel" aria-labelledby="card-type-tab-item-1">
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