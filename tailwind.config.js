/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        screens: {
            'xs': {'min': '321px', 'max': '640px'},
            // => @media (min-width: 640px and max-width: 640px) { ... }

            'sm': {'min': '641px', 'max': '767px'},
            // => @media (min-width: 640px and max-width: 767px) { ... }

            'md': {'min': '768px', 'max': '1023px'},
            // => @media (min-width: 768px and max-width: 1023px) { ... }

            'lg': {'min': '1024px', 'max': '1279px'},
            // => @media (min-width: 1024px and max-width: 1279px) { ... }

            'xl': {'min': '1280px', 'max': '1535px'},
            // => @media (min-width: 1280px and max-width: 1535px) { ... }
        }
    },
    plugins: [],
};
