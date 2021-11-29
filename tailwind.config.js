const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require("tailwindcss/colors");

module.exports = {
    purge: ["./**/*.html", "./**/*.js"],
    darkMode: false,
    theme: {
        extend: {},
        colors: {
            // Now we build the full color palette, using all colors available
            // as shown at this link: https://tailwindcss.com/docs/customizing-colors#color-palette-reference
            transparent: "transparent",
            current: "currentColor",
            black: "#000",
            white: "#fff",
            bluegray: colors.blueGray,
            coolgray: colors.coolGray,
            gray: colors.gray,
            truegray: colors.trueGray,
            warmgray: colors.warmGray,
            red: colors.red,
            orange: colors.orange,
            amber: colors.amber,
            yellow: colors.yellow,
            lime: colors.lime,
            green: colors.green,
            emerald: colors.emerald,
            teal: colors.teal,
            cyan: colors.cyan,
            sky: colors.sky,
            blue: colors.blue,
            indigo: colors.indigo,
            violet: colors.violet,
            purple: colors.purple,
            fuchsia: colors.fuchsia,
            pink: colors.pink,
            rose: colors.rose,
        },
    },
    variants: {},
    corePlugins: {
        // ...
  
       container: false,
      },
    presets: [require('full-palette')],
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
