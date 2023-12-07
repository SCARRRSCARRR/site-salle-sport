import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
            'resources/css/app.css',
            'resources/css/site-salle-sport.css',
            'resources/js/app.js',
            'resources/js/site-salle-sport.js'
            ],
            refresh: true,
        }),
    ],
});
