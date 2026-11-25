import typography from '@tailwindcss/typography';
import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: ['./resources/views/**/*.blade.php', './resources/js/**/*.js'],
    theme: {
        extend: {
            colors: {
                ink: {DEFAULT: '#102A43', soft: '#3E5266'},
                seine: {DEFAULT: '#17698F', light: '#E3F0F6'},
                call: {DEFAULT: '#6BB210', dark: '#5A9A0B', light: '#EEF7E2'},
                paper: '#F3F6F8',
                line: '#D8E0E7',
            },
            fontFamily: {
                sans: ['"Atkinson Hyperlegible Next"', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [typography],
};
