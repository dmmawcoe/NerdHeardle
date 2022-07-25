import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/components/game.css',
                'resources/js/components/app.ts',
            ],
            refresh: true,
        }),
    ],
});
