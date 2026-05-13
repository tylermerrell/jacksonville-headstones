import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            colors: {
                evergreen: {
                    DEFAULT: '#2C4C3B',
                    light: '#3d6b55',
                    dark: '#1e3328',
                    deeper: '#111f18',
                },
                sage: {
                    DEFAULT: '#8B9D8B',
                    light: '#E2E8E4',
                    dark: '#6b7d6b',
                },
                bronze: {
                    DEFAULT: '#A67C52',
                    light: '#c4986e',
                    dark: '#8a6340',
                },
                stone: {
                    DEFAULT: '#F9F8F6',
                    dark: '#ede9e3',
                },
                granite: {
                    DEFAULT: '#333333',
                    light: '#555555',
                    dark: '#111111',
                },
            },
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                serif: ['Cormorant Garamond', ...defaultTheme.fontFamily.serif],
            },
        },
    },

    plugins: [forms],
};
