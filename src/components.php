<!-- Sample Content -->
<div class="space-y-8">
  <div class="space-y-1.5">
    <h2>UI Components</h2>
    <p>This page contains different lorem ipsum.</p>
  </div>
  <!-- Forms components -->
  <div class="grid grid-cols-3 gap-4">
    <!-- First Column -->
    <div class="space-y-4">
      <!-- Float Input Variant -->
      <div class="relative">
        <input type="email" id="float-input" class="float-input peer" placeholder="you@email.com">
        <label for="float-input" class="float-label">Email Address</label>
      </div>
      <!-- // Float Input Variant -->

      <!-- Defalt Input Variant -->
      <div>
        <label for="default-input" class="input-label">Email</label>
        <input type="email" id="default-input" class="default-input" placeholder="fmroerdeenroick@email.com">
      </div>
      <!-- // Default Input Variant -->

      <!-- Input Variant with Icon -->
      <div>
        <label for="input-icon" class="input-label">Username</label>
        <div class="relative">
          <input type="email" id="input-icon" class="icon-input peer" placeholder="Frederick">
          <div class="icon-input-svg">
            <svg class="shrink-0 size-4 text-gray-500 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
        </div>
      </div>
      <!-- // Input Variant with Icon -->

      <!-- Error Input -->
      <div>
        <label for="input-error" class="input-label">Email</label>
        <input type="text" id="input-error" name="input-error" class="py-3 px-4 block w-full border-red-500 bg-gray-100/70 rounded-lg text-sm dark:bg-gray-900/30 dark:border-red-500 dark:text-gray-400" disabled required="" aria-describedby="input-error-helper">
        <p class="text-sm text-red-500 dark:text-red-400 mt-1.5" id="input-error-helper">Please enter a valid email address.</p>
      </div>
      <!-- // Error Input -->

      <!-- Success Input -->
      <div>
        <label for="input-success" class="input-label">Email</label>
        <input type="text" id="input-success" name="input-success" class="py-3 px-4 block w-full border-green-500 bg-gray-100/70 rounded-lg text-sm dark:bg-gray-900/30 dark:border-green-500 dark:text-gray-400" disabled required="" aria-describedby="input-success-helper">
        <p class="text-sm text-green-500 dark:text-green-400 mt-1.5" id="input-success-helper">Looks good!</p>
      </div>
      <!-- // Success Input -->
    </div>
    <!-- // First Column -->
    <!-- Second Column -->
    <div class="space-y-4">
      <!-- Search Input -->
      <div class="relative">
        <input type="text" class="icon-input peer" placeholder="Search somthing...">
        <div class="icon-input-svg">
          <svg class="shrink-0 size-4 text-gray-500 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
          </svg>
        </div>
      </div>
      <!-- // Search Input -->

      <!-- Textarea -->
      <div>
        <label for="textarea" class="input-label">Comment</label>
        <textarea id="textarea" class="default-input" rows="3" placeholder="Say hi..."></textarea>
      </div>
      <!-- // Textarea -->

      <!-- Select -->
      <div>
        <label for="default-input" class="input-label">Gender</label>
        <select class="select-input">
          <option selected="">Open this select menu</option>
          <option>Male</option>
          <option>Female</option>
          <option>LGBTQ+</option>
        </select>
      </div>
      <!-- // Select -->

      <!-- Radio -->
      <div class="flex gap-x-6">
        <div class="flex items-center">
          <input type="radio" name="radio-group" class="radio-input" id="radio-group-1" checked="">
          <label for="radio-group-1" class="text-sm text-gray-500 ms-2 dark:text-gray-400">Apple</label>
        </div>
        <div class="flex items-center">
          <input type="radio" name="radio-group" class="radio-input" id="radio-group-2">
          <label for="radio-group-2" class="text-sm text-gray-500 ms-2 dark:text-gray-400">Pear</label>
        </div>
        <div class="flex items-center">
          <input type="radio" name="radio-group" class="radio-input" id="radio-group-3">
          <label for="radio-group-3" class="text-sm text-gray-500 ms-2 dark:text-gray-400">Orange</label>
        </div>
      </div>
      <!-- // Radio -->
      <!-- Checkbox -->
      <div class="flex gap-x-6">
        <div class="flex items-center">
          <input type="checkbox" class="checkbox-input" id="checkbox-group-1">
          <label for="checkbox-group-1" class="text-sm text-gray-500 ms-3 dark:text-gray-400">Apple</label>
        </div>
        <div class="flex items-center">
          <input type="checkbox" class="checkbox-input" id="checkbox-group-2">
          <label for="checkbox-group-2" class="text-sm text-gray-500 ms-3 dark:text-gray-400">Pear</label>
        </div>
        <div class="flex items-center">
          <input type="checkbox" class="checkbox-input" id="checkbox-group-3">
          <label for="checkbox-group-3" class="text-sm text-gray-500 ms-3 dark:text-gray-400">Orange</label>
        </div>
      </div>
      <!-- // Checkbox -->
    </div>
    <!-- // Second Column -->
    <!-- Third Column -->
    <div class="space-y-4">
      <div class="flex gap-2.5">
        <button type="button" class="py-3 px-4 inline-flex items-center text-sm font-medium rounded-lg border border-transparent bg-indigo-500 text-white focus:ring-2 focus:ring-indigo-400 hover:bg-indigo-600 focus:outline-none disabled:opacity-50 disabled:pointer-events-none transition duration-300 ease-in-out">
          Primary
        </button>
        <button type="button" class="py-3 px-4 inline-flex items-center text-sm font-medium rounded-lg border border-transparent bg-indigo-500/10 dark:text-indigo-400 text-indigo-500 focus:ring-2 focus:ring-indigo-500/30 hover:bg-indigo-500/20 focus:outline-none disabled:opacity-50 disabled:pointer-events-none transition duration-300 ease-in-out">
          Secondary
        </button>
        <button type="button" class="py-3 px-4 inline-flex items-center text-sm font-medium rounded-lg border border-gray-200 text-gray-500 hover:border-indigo-600 hover:text-indigo-400 focus:ring-2 focus:ring-indigo-400/80 focus:outline-none focus:border-indigo-600 focus:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none dark:border-gray-700 dark:text-gray-300 dark:hover:text-indigo-500 dark:hover:border-indigo-600 dark:focus:text-indigo-500 dark:focus:border-indigo-600 transition duration-300 ease-in-out">
          Outline
        </button>
        <button type="button" class="py-3 px-4 inline-flex items-center text-sm font-medium rounded-lg border border-transparent text-indigo-600 hover:bg-indigo-100 hover:text-indigo-800 focus:outline-none focus:bg-indigo-100 focus:text-indigo-800 disabled:opacity-50 disabled:pointer-events-none dark:text-indigo-500 dark:hover:bg-indigo-800/30 dark:hover:text-indigo-400 dark:focus:bg-indigo-800/30 dark:focus:text-indigo-400">
          Ghost
        </button>
      </div>
    </div>
    <!-- // Third Column -->
  </div>
</div>