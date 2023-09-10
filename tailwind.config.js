/** @type {import('tailwindcss').Config} */
const colors = require("tailwindcss/colors")
const defaultTheme = require("tailwindcss/defaultTheme")
const themeChange = require("theme-change")
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            colors: {
                "meteorite": {
                    50: "#f6f4fe",
                    100: "#eeebfc",
                    200: "#dfdafa",
                    300: "#c7bcf6",
                    400: "#ab95f0",
                    500: "#8f6ae8",
                    600: "#7e4add",
                    700: "#6f38c9",
                    800: "#5d2fa8",
                    900: "#4d288a",
                    950: "#3a1d72",
                },
                "san-marino": {
                    50: "#f4f7fb",
                    100: "#e7eff7",
                    200: "#cadced",
                    300: "#9cbedd",
                    400: "#679cc9",
                    500: "#3f78a9",
                    600: "#326697",
                    700: "#29527b",
                    800: "#264666",
                    900: "#243c56",
                    950: "#182739",
                },
                "seance": {
                    50: "#fcf4ff",
                    100: "#f9e9fe",
                    200: "#f2d1fd",
                    300: "#eaadfa",
                    400: "#df7df5",
                    500: "#cd4bea",
                    600: "#b42bce",
                    700: "#9721aa",
                    800: "#881f97",
                    900: "#6a1d72",
                    950: "#45064c",
                },
            },
            fontFamily: {
                main: ["Noto Sans Osmanya", "sans-serif"],
            },
        },
    },
    daisyui: {
        themes: true,
    },
    plugins: [require("@tailwindcss/typography"), require("daisyui"), themeChange],
}
