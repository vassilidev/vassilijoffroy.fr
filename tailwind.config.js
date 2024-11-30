import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                'dracula-bg': '#282A36',
                'dracula-current-line': '#44475A',
                'dracula-foreground': '#F8F8F2',
                'dracula-comment': '#6272A4',
                'dracula-cyan': '#8BE9FD',
                'dracula-green': '#50FA7B',
                'dracula-orange': '#FFB86C',
                'dracula-pink': '#FF79C6',
                'dracula-purple': '#BD93F9',
                'dracula-red': '#FF5555',
                'dracula-yellow': '#F1FA8C',
            },
        },
    },
    plugins: [],
};
