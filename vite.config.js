import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        host: 'localhost', // Change to '0.0.0.0' if you want to access it from other devices on the same network
        port: 5173, // Default Vite port
        strictPort: true, // Fail if the port is already in use
    },
    build: {
        outDir: 'public/build', // Adjust output directory if needed
    },
});
