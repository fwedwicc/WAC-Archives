<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FM | WAC Archives</title>
  <link rel="shortcut icon" href="../public/favicon.ico" type="image/x-icon">
  <link href="./output.css" rel="stylesheet">
  <script src="./js/nav.js"></script>
</head>

<body class="dark:bg-[#192231] bg-gray-50">
  <!-- Desktop Sidebar -->
  <aside class="lg:block hidden w-64 fixed h-screen p-5 space-y-7 overflow-y-auto invisible-scrollbar">
    <?php include './sidebar.php'; ?>
  </aside>
  <!-- // Desktop Sidebar -->
  <!-- Mobile Sidebar -->
  <div id="hs-offcanvas-custom-backdrop-color" class="hs-overlay hs-overlay-open:translate-x-0 hs-overlay-backdrop-open:bg-gray-900/80 hidden -translate-x-full fixed top-0 start-0 transition-all duration-300 transform h-full max-w-64 w-full p-5 space-y-7 z-[80] bg-gray-50 border-e dark:bg-gray-800 dark:border-gray-700 dark:hs-overlay-backdrop-open:bg-gray-900/80" role="dialog" tabindex="-1" aria-labelledby="hs-offcanvas-custom-backdrop-color-label">
    <?php include './sidebar.php'; ?>
  </div>
  <!-- // Mobile Sidebar -->
  <!-- Main Layout -->
  <div class="lg:py-4 b-4 lg:pr-4 lg:p-0 p-4 lg:ml-64 h-screen">
    <div class="relative dark:bg-gray-800 bg-white border dark:border-gray-700/50 border-gray-200 rounded-xl h-full custom-scrollbar overflow-auto">
      <!-- Content Header -->
      <header class="dark:bg-gray-800/70 backdrop-blur-md bg-white/70 sticky top-0 md:py-4 py-3 md:px-8 px-4 flex justify-between items-center dark:border-gray-700/60 border-gray-200 border-b w-full z-20">
        <?php include './header.php'; ?>
      </header>
      <!-- // Content Header -->
      <!-- Tab Content -->
      <div class="md:p-8 p-4 z-10">
        <!-- Tab 1 -->
        <div id="dashboard-tab" role="tabpanel" aria-labelledby="dashboard-item">
          <?php include_once './dashboard.php'; ?>
        </div>
        <!-- Tab 2 -->
        <div id="components-tab" class="hidden" role="tabpanel" aria-labelledby="components-item">
          <?php include_once './components.php'; ?>
        </div>
      </div>
      <!-- // Tab Content -->
    </div>
  </div>
  <!-- // Main Layout -->
  <script src="../node_modules/preline/dist/preline.js"></script>
  <script src="../scripts/js/open-modals-on-init.js"></script>

</body>

</html>