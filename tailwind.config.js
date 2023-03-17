const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],
    blocklist: [        
    ],
    theme: {
        container: {
            center: true,
            padding: '1rem',
        },
        extend: {
            fontFamily: {
                sans: ['Lato', ...defaultTheme.fontFamily.sans],                
                mono: ['JetBrains Mono', ...defaultTheme.fontFamily.mono],
            },
            colors: {
                'canvas-sidebar-bg-dark': '#202123',
                'canvas-bg-dark': '#343541',
                'canvas-bg-light': '#f8f8f8',
                'canvas-sidebar-bg-light': '#ffffff',

                'moon-raker': {
                    '50': '#f7f5fd',
                    '100': '#f1edfa',
                    '200': '#e3def6',
                    '300': '#d0c5ef',   // main
                    '400': '#b6a1e4',
                    '500': '#9c7bd7',
                    '600': '#8b5ec9',
                    '700': '#7b4bb6',
                    '800': '#673f98',
                    '900': '#55357d',
                },
                'sandwisp': {
                    '50': '#fcfbea',
                    '100': '#f8f7c9',
                    '200': '#f3ee97',   // main
                    '300': '#ebde59',
                    '400': '#e4cb2b',
                    '500': '#d4b41e',
                    '600': '#b78e17',
                    '700': '#926716',
                    '800': '#7a5219',
                    '900': '#68441b',
                },
                'swirl': {
                    '50': '#f7f6f5',
                    '100': '#edebe7',
                    '200': '#d0cac0', // main
                    '300': '#c3bbae',
                    '400': '#aa9d8d',
                    '500': '#988777',
                    '600': '#8c796a',
                    '700': '#756359',
                    '800': '#60534c',
                    '900': '#4f443f',
                },
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'), 
        require('@tailwindcss/typography'),
        require('@headlessui/tailwindcss')({ prefix: 'ui' })
    ],
};
