/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
    ],
  theme: {colors: {
    "chil-blue": "#1F3A93",
    "chil-red": "#800000",
  },
    extend: {},
  },
  plugins: [require("flowbite/plugin")],
}

