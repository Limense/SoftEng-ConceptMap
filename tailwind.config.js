/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            textShadow: {
                arcade: "4px 4px 0px rgba(0, 0, 0, 1)",
            },

            colors: {
                primary: "#0f1524",
                secondary: "#2e2c3d",
                yellow: {
                    primary: "#FACC15",
                    secondary: "#CA8A04",
                },
                skyblue: {
                    primary: "#2cbaff",
                },
                red: {
                    primary: "#e11b1b",
                },
                grey: {
                    primary: "#f4f4f4",
                },
            },
            fontFamily: {
                "press-start": ['"Press Start 2P"', "cursive"],
                mulish: ['"mulish"', "sans-serif"],
                pixelify: ['"Pixelify Sans"', "sans-serif"],
            },
        },
    },
    plugins: [],
};
