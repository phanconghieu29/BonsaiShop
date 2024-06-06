import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css','resources/css/footer.css' , 'resources/css/header.css', 'resources/js/app.js', 'resources/css/about.css'],
            refresh: true,
        }),
    ],
});
