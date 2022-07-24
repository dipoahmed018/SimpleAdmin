import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from "@vue-vite-plugin"

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
            ],
            refresh: true,
        }),

        vue({
            template: {
                compilerOptions: {
                  // ...
                },
                transformAssetUrls: {
                  // ...
                }
              }
        })
    ],
});
