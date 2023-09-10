import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    //Aggiungiamo un alias per la cartella /resources/
    resolve: {
        alias: {
            '~resources': '/resources/',
<<<<<<< HEAD
            //'~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap')
=======
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap')
>>>>>>> 3b62eab80cee43f9a004be450b1c42f6e2084e89
        }
    },
});
