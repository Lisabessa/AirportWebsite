/** @type {import('tailwindcss').Config} */
/**
 * npx tailwindcss -i ./src/style/input.css -o ./core/local/templates/sc/assets/style/output.css --watch
 * */
module.exports = {
  content: [
    '../public/makeup/*.html',
    '../public/makeup/assets/*/.{js, css}',
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
