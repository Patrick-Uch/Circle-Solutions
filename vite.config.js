const { defineConfig } = require('vite');
const fullReloadModule = require('vite-plugin-full-reload');
const fullReload = fullReloadModule.default || fullReloadModule;

module.exports = defineConfig({
  plugins: [
    fullReload(['**/*.php'], { root: __dirname }),
  ],
  server: {
    host: '0.0.0.0',
    port: 5173,
    strictPort: true,
    watch: {
      usePolling: true,
    },
  },
});
