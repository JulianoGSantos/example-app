const mix = require('laravel-mix');
const vite = require('vite').vite;

mix.extend('vite', new class {
    webpackConfig(config) {
        return vite.mergeConfig(config);
    }
});

mix.vite();