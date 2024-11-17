/** @type {import('tailwindcss').Config} */

const plugin = require("tailwindcss/plugin");
const colors = require("tailwindcss/colors");
const defaultTheme = require("tailwindcss/defaultTheme");

export default {
    darkMode: "class",
    content: [
        "./resources/views/*.blade.php",
        "./resources/views/**/*.blade.php",
    ],
    future: {
        hoverOnlyWhenSupported: true,
    },

    theme: {
        container: {
            center: true,
            padding: ".2rem",
        },

        extend: {
            fontFamily: {
                sans: ["Poppins", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                body: {
                    light: "#E4E9F7",
                    dark: "#0E1422",
                },
                primary: "#1E83E7",
                secondary: "#7c6fee9f",
            },
            typography(theme) {
              return {
                dark: {
                  css: {
                    color: theme("colors.gray.300"),
                    '[class~="lead"]': { color: theme("colors.gray.400") },
                    a: { color: theme("colors.gray.100") },
                    strong: { color: theme("colors.gray.100") },
                    "ul > li::before": { backgroundColor: theme("colors.gray.700") },
                    hr: { borderColor: theme("colors.gray.800") },
                    blockquote: {
                      color: theme("colors.gray.100"),
                      borderLeftColor: theme("colors.gray.800"),
                    },
                    h1: { color: theme("colors.gray.100") },
                    h2: { color: theme("colors.gray.100") },
                    h3: { color: theme("colors.gray.100") },
                    h4: { color: theme("colors.gray.100") },
                    code: { color: theme("colors.gray.100") },
                    "a code": { color: theme("colors.gray.100") },
                    pre: {
                      color: theme("colors.gray.200"),
                      backgroundColor: theme("colors.gray.800"),
                    },
                    thead: {
                      color: theme("colors.gray.100"),
                      borderBottomColor: theme("colors.gray.700"),
                    },
                    "tbody tr": { borderBottomColor: theme("colors.gray.800") },
                  },
                },
              };
            },
            // typography: {
            //     DEFAULT: {
            //         css: {
            //             "h1, h2, h3, h4, h5, h6": {
            //                 "a:not([href^=http])": {
            //                     color: colors.inherit,
            //                     "font-weight": defaultTheme.fontWeight.bold,
            //                     "text-decoration": "none",
            //                     "&::before": {
            //                         content: '"# "',
            //                         "font-weight":
            //                             defaultTheme.fontWeight.normal,
            //                         opacity: defaultTheme.opacity[50],
            //                     },
            //                 },
            //             },
            //             a: {
            //                 "font-weight": "inherit",
            //                 color: colors.indigo[600],
            //             },
            //             'iframe[src^="https://www.youtube.com"]': {
            //                 width: "100% !important",
            //                 height: "auto !important",
            //                 "aspect-ratio": defaultTheme.aspectRatio.video,
            //                 "border-radius": defaultTheme.borderRadius.md,
            //                 "box-shadow": defaultTheme.boxShadow.lg,
            //             },
            //             pre: {
            //                 padding: "1rem",
            //             },
            //         },
            //     },
            // },
        },
    },
    variants: {
        extend: { typography: ["dark"] },
    },
    plugins: [
        require("@tailwindcss/typography"),
        // require('@tailwindcss/forms'),
        plugin(({ theme, addUtilities }) => {
            const neonUtilities = {};
            const colors = theme("colors");
            for (const color in colors) {
                if (typeof colors[color] == "object") {
                    const color1 = colors[color]["200"];
                    const color2 = colors[color]["500"];
                    neonUtilities[`.neon-${color}`] = {
                        boxShadow: `0 0 5px ${color1}, 0 0 20px ${color2}`,
                    };
                }
            }
            addUtilities(neonUtilities);
        }),
    ],
};
