/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./*.php', './template-parts/**/*.php', './src/**/*.js'],
  theme: {
    extend: {
      colors: {
        brand: { DEFAULT: '#0f62fe', dark: '#0043ce' },
      },
    },
  },
  plugins: [],
};
