<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar</title>
  <link href="./output.css" rel="stylesheet">
</head>

<body class="bg-neutral-800">
  <aside class="lg:block hidden w-64 fixed h-screen">

  </aside>
  <div class="lg:py-4 lg:pr-4 pt-14 p-4 lg:ml-64 lg:min-h-screen">
    <div class="bg-neutral-700/20 border border-neutral-600/20 p-8 rounded-xl lg:min-h-[95.5vh]">
      <!-- Sample Content -->
      <div class="space-y-8">
        <div class="space-y-1.5">
          <h2 class="text-3xl text-neutral-100 font-semibold">Dashboard</h2>
          <p class="text-neutral-300">This page contains dashboard content.</p>
        </div>
        <!-- Sample Containers -->
        <div class="p-4 border-2 border-neutral-600 border-dashed rounded-lg">
          <div class="grid grid-cols-3 gap-4 mb-4">
            <div class="flex items-center justify-center h-24 rounded bg-neutral-800">
              <p class="text-2xl text-neutral-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                </svg>
              </p>
            </div>
            <div class="flex items-center justify-center h-24 rounded bg-neutral-800">
              <p class="text-2xl text-neutral-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                </svg>
              </p>
            </div>
            <div class="flex items-center justify-center h-24 rounded bg-neutral-800">
              <p class="text-2xl text-neutral-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                </svg>
              </p>
            </div>
          </div>
          <div class="flex items-center justify-center h-48 rounded bg-neutral-800">
            <p class="text-2xl text-neutral-500">
              <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
              </svg>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../node_modules/preline/dist/preline.js"></script>
</body>

</html>