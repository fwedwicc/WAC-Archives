/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,php,js}",
    'node_modules/preline/dist/*.js',
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('preline/plugin'),
  ],
}