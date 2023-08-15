/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                white: '#ffffff',
                dark: '#000000',
                primary: {
                    100: '#E8F5E2',
                    200: '#C6DBBD',
                    300: '#98C588'
                },
                gray: {
                    650: '#6C7667'
                }
            },
            borderRadius: {
                32: '32px',
            }
        },
    },
    plugins: [],
}
