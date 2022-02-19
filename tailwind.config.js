const defaultTheme = require("tailwindcss");
module.exports = {
    purge: {
        content: [
            './resources/views/**/*.blade.php',
            './vendor/livewire-ui/modal/resources/views/*.blade.php',
            './storage/framework/views/*.php',
        ],
        options: {
            safelist: [
                'sm:max-w-2xl'
            ]
        }
    },
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [require('@tailwindcss/forms')],
}
