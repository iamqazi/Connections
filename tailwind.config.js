/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"], // Scans all PHP files in your project
  theme: {
    extend: {
      colors: {
        customBlue: "#023564",
        customSearch: "#C9DCEF",
      },
      spacing: {
        60: "60px",
      },
    },
  },
  plugins: [],
};
