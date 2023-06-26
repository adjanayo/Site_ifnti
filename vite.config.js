import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/sass/login.css',
                'resources/js/login.js',
                'resources/sass/dash.css',
                'resources/js/dash.js',
            ],
            refresh: true,
        }),
    ],
});

