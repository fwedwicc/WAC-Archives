<!-- Sample Content -->
<div class="space-y-8">
  <div class="space-y-1.5">
    <h2 class="text-3xl dark:text-gray-200 text-gray-800 leading-none font-semibold">Forms</h2>
    <p class="dark:text-gray-400 text-gray-600">This page contains different forms components for web.</p>
  </div>
  <!-- Forms components -->
  <div class="grid grid-cols-3 gap-4">
    <div class="space-y-4">
      <!-- Float Input Variant -->
      <div class="relative">
        <input type="email" id="hs-floating-input-email" class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent focus:border-indigo-500 focus:ring-indigo-500 disabled:opacity-50 disabled:pointer-events-none bg-gray-100/70 dark:bg-gray-900/30 dark:border-gray-700 dark:text-gray-200 dark:focus:ring-indigo-500 transition duration-300 ease-in-out
      focus:pt-6
      focus:pb-2
      [&:not(:placeholder-shown)]:pt-6
      [&:not(:placeholder-shown)]:pb-2
      autofill:pt-6
      autofill:pb-2" placeholder="you@email.com">
        <label for="hs-floating-input-email" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-gray-200 peer-disabled:opacity-50 peer-disabled:pointer-events-none
      peer-focus:scale-90
      peer-focus:translate-x-0.5
      peer-focus:-translate-y-1.5
      peer-focus:text-gray-500 dark:peer-focus:text-gray-500
      peer-[:not(:placeholder-shown)]:scale-90
      peer-[:not(:placeholder-shown)]:translate-x-0.5
      peer-[:not(:placeholder-shown)]:-translate-y-1.5
      peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-gray-500 dark:text-gray-400">Email Address</label>
      </div>
      <!-- // Float Input Variant -->

      <!-- Input Variant with Icon -->
      <div>
        <label for="with-corner-hint" class="block text-sm font-medium mb-1.5 text-gray-700 dark:text-gray-100">Username</label>
        <div class="relative">
          <input type="email" class="peer py-3 px-4 ps-11 block w-full bg-gray-100/70 border-gray-200 rounded-lg text-sm focus:border-indigo-500 focus:ring-indigo-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-900/30 dark:border-gray-700 dark:text-gray-200 dark:placeholder-gray-500 dark:focus:ring-indigo-500 transition duration-300 ease-in-out" placeholder="Frederick">
          <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
            <svg class="shrink-0 size-4 text-gray-500 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
        </div>
      </div>
      <!-- // Input Variant with Icon -->


      <!-- Defalt Input Variant -->
      <div>
        <label for="with-corner-hint" class="block text-sm font-medium mb-1.5 text-gray-700 dark:text-gray-100">Email</label>
        <input type="email" id="with-corner-hint" class="py-3 px-4 block w-full bg-gray-100/70 border-gray-200 rounded-lg text-sm focus:border-indigo-500 focus:ring-indigo-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-900/30 dark:border-gray-700 dark:text-gray-200 dark:placeholder-gray-500 dark:focus:ring-indigo-500 transition duration-300 ease-in-out" placeholder="fmroerdeenroick@email.com">
      </div>
      <!-- // Default Input Variant -->

      <!-- Error Input -->
      <div>
        <label for="hs-validation-name-error" class="block text-sm font-medium mb-1.5 dark:text-white">Email</label>
        <input type="text" id="hs-validation-name-error" name="hs-validation-name-error" class="py-3 px-4 block w-full border-red-500 bg-gray-100/70 rounded-lg text-sm dark:bg-gray-900/30 dark:border-red-500 dark:text-gray-400" disabled required="" aria-describedby="hs-validation-name-error-helper">
        <p class="text-sm text-red-500 dark:text-red-400 mt-2" id="hs-validation-name-error-helper">Please enter a valid email address.</p>
      </div>
      <!-- // Error Input -->


      <!-- Success Input -->
      <div>
        <label for="hs-validation-name-error" class="block text-sm font-medium mb-1.5 dark:text-white">Email</label>
        <input type="text" id="hs-validation-name-error" name="hs-validation-name-error" class="py-3 px-4 block w-full border-green-500 bg-gray-100/70 rounded-lg text-sm dark:bg-gray-900/30 dark:border-green-500 dark:text-gray-400" disabled required="" aria-describedby="hs-validation-name-error-helper">
        <p class="text-sm text-green-500 dark:text-green-400 mt-2" id="hs-validation-name-error-helper">Looks good!</p>
      </div>
      <!-- // Success Input -->
    </div>

  </div>

</div>