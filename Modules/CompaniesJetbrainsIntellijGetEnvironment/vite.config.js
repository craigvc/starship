import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        outDir: '../../public/build-companiesjetbrainsintellijgetenvironment',
        emptyOutDir: true,
        manifest: true,
    },
    plugins: [
        laravel({
            publicDirectory: '../../public',
            buildDirectory: 'build-companiesjetbrainsintellijgetenvironment',
            input: [
                __dirname + '/resources/assets/sass/app.scss',
                __dirname + '/resources/assets/js/app.js'
            ],
            refresh: true,
        }),
    ],
});

//export const paths = [
//    'Modules/CompaniesJetbrainsIntellijGetEnvironment/resources/assets/sass/app.scss',
//    'Modules/CompaniesJetbrainsIntellijGetEnvironment/resources/assets/js/app.js',
//];