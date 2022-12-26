/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            gridTemplateColumns: {
                'weather': '2fr 8fr 2fr',
            },
            spacing: {
                '128': '32rem',
            }

        },
    },
    plugins: [],
}