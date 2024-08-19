<!-- Sample Content -->
<div class="space-y-8">
  <div class="space-y-1.5">
    <h2>Forms</h2>
    <p>This page contains different forms components for web.</p>
  </div>
  <!-- Forms components -->
  <div class="grid grid-cols-3 gap-4">
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
  </div>
</div>