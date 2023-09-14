/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                primary: "#0f172a",
            },
            fontFamily: {
                roboto: ["Roboto", ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                bgpt: "url(./img/yoimg.png",
            },
        },
    },
    plugins: [],
};
