/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./template/**/*.{html,js}",
    "node_modules/preline/dist/*.js"
  ],
  plugins: [
    require('preline/plugin'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/typography'),
  ],
  darkMode: 'class',
}