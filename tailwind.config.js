import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'oqsc-text': '#EFEFEF',
                'oqsc-heading-start': '#F1C107',
                'oqsc-heading-end': '#9F7C14',
                'oqsc-bg': '#08080A',
                'oqsc-cta': '#FAA315',
                'oqsc-cta-hover': '#086788',
            }
        },
        // colors: {
        //     'oqsc-text': '#EFEFEF',
        //     'oqsc-heading-start': '#F1C107',
        //     'oqsc-heading-end': '#9F7C14',
        //     'oqsc-bg': '#08080A',
        //     'oqsc-cta': '#FAA315',
        //     'oqsc-cta-hover': '#086788',
        //
        //
        //
        // }
    },

    plugins: [forms, typography],
};
