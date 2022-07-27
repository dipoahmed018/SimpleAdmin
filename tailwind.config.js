/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontSize: {
        'title-1': '28px',
        'title-2': '26px',
        'title-3': '24px',
        'title-4': '18px',

        'description-1': '16px',
      },
      colors: {
        'shade-1': '#E4E0E0',
        'shade-2': '#797575',
        'shade-3': '#656161',
        'tints-3': '#242121',
        'tints-2': '#D9D9D9',
        'tints-1': '#E4E0E0',
        'dark': "#464242",
        'dark-A400': "#B56156",
        'dark-A200': '#DB676C',
        'rose': '#F28A95'
      }
    },
  },
  plugins: [],
}
