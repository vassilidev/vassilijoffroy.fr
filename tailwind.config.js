/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js", "./resources/**/*.vue", "./public/**/*.html", "*.{js,ts,jsx,tsx,mdx}"],
    theme: {
        extend: {
            colors: {
                'primary-blue': '#2596be',
                'primary-green': '#6bb210',
                'primary-dark': '#03102b',
            },
            fontFamily: {
                sans: ['Inter', 'system-ui', 'sans-serif'],
            },
            animation: {
                'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                'glow': 'glow 2s ease-in-out infinite alternate',
                'bounce-slow': 'bounce 2s infinite',
                'fade-in': 'fadeIn 0.5s ease-in-out',
                'slide-up': 'slideUp 0.5s ease-out',
                'scale-in': 'scaleIn 0.3s ease-out',
            },
            keyframes: {
                glow: {
                    '0%': {
                        boxShadow: '0 0 5px rgba(107, 178, 16, 0.5)'
                    },
                    '100%': {
                        boxShadow: '0 0 20px rgba(107, 178, 16, 0.8), 0 0 30px rgba(107, 178, 16, 0.6)'
                    }
                },
                fadeIn: {
                    '0%': {
                        opacity: '0'
                    },
                    '100%': {
                        opacity: '1'
                    }
                },
                slideUp: {
                    '0%': {
                        transform: 'translateY(20px)',
                        opacity: '0'
                    },
                    '100%': {
                        transform: 'translateY(0)',
                        opacity: '1'
                    }
                },
                scaleIn: {
                    '0%': {
                        transform: 'scale(0.95)',
                        opacity: '0'
                    },
                    '100%': {
                        transform: 'scale(1)',
                        opacity: '1'
                    }
                }
            },
            spacing: {
                '18': '4.5rem',
                '88': '22rem',
                '128': '32rem',
            },
            borderRadius: {
                '4xl': '2rem',
            },
            boxShadow: {
                'glow-blue': '0 0 20px rgba(37, 150, 190, 0.5)',
                'glow-green': '0 0 20px rgba(107, 178, 16, 0.5)',
                'glow-dark': '0 0 20px rgba(3, 16, 43, 0.3)',
            },
            backdropBlur: {
                xs: '2px',
            },
            screens: {
                'xs': '475px',
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
