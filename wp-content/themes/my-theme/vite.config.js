const { defineConfig } = require('vite');
const tailwindcss = require('tailwindcss');
const livereload = require('rollup-plugin-livereload');

module.exports = defineConfig({
  server: {
    port: 3000,
    proxy: {
      '/': {
        target: 'http://localhost:8000',
        changeOrigin: true,
        secure: false,
      },
    },
  },
  plugins: [
    tailwindcss('./tailwind.config.js'),
    livereload('./')
  ],
});
