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
                secondary: "#25314b",
                profile: {
                    primary: "#1b2238",
                    secondary: "#f7f7f7",
                },
                yellow: {
                    primary: "#FACC15",
                    secondary: "#CA8A04",
                },
                skyblue: {
                    primary: "#209cee",
                    secondary: "#006bb3",
                },
                red: {
                    primary: "#e11b1b",
                },
                grey: {
                    primary: "#f4f4f4",
                },
                blue: {
                    primary: "#212529",
                },
                green: {
                    primary: "#a3e635",
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
