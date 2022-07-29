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
                main: "#2CCE97",
                secondary: "#27608A",
                secondaries: "#27608A",
                isGray: "#D9D9D9",
                "is-gray-low": "#8B8B8B",
                "white-low": "#EDEDEF",
                "secondary-mid": "#0093FF",
                "black-low": "#464646",
                "is-gray": "#D9D9D9",
            },
            fontFamily: {
                rasa: "Rasa, sans-serif",
                majalla: "Majalla, sans-serif",
            },
        },
    },
    plugins: [],
};
