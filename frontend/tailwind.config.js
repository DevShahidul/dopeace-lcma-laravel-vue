/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')
module.exports = {
    // mode: 'jit',
    content: [
        "./index.html",
        "./src/**/*.{vue,js,ts,jsx,tsx}",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary : {
                    DEFAULT: '#14b3b2',
                    50: '#F3F9FA',
                    100: '#F2FEFF',
                    200: '#E4F6F8'
                },
                secondary: '#546fb2',
                green: {
                    DEFAULT: '#14b3b2',
                },
            },
            keyframes: {
                'fade-in-down': {
                    "from": {
                        transform: "translateY(-0.75rem)",
                        opacity: "0"
                    },
                    "to": {
                        transform: "translateY(0rem)",
                        opacity: "1"
                    }
                }
            },
            animation: {
                'fade-in-down': "fade-in-down 0.2s ease-in-out both",
            }
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}

