/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                brand: {
                    navy: '#1e2f40',
                    teal: '#1bb496',
                    tealHover: '#15967d',
                },
                surface: {
                    bg: '#f0f2f5',
                    card: '#ffffff'
                }
            },
            fontFamily: {
                sans: ['Inter', 'sans-serif'],
            }
        }
    },
    plugins: [],
}