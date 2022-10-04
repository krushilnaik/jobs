/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      maxWidth: {
        main: "1400px",
      },
    },
  },
  plugins: [require("@tailwindcss/typography")],
};
