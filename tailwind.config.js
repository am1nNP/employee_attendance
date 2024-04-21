/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {
      screens: {
        'sm': '320px'
      },
    },
  },
  plugins: [],
}

