import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/js/annyang.js', 'resources/js/comandos.js', 'resources/js/comandos-m1.js'],
            refresh: true,
        }),
    ],
});
