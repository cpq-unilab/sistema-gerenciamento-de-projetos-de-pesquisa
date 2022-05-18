module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {},
        container: {
            center: true,
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('flowbite/plugin')
    ],
}
