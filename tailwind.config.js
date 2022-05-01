module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {},
        container: {
            center: true,
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}
