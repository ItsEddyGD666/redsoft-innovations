/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {
      fontFamily: {
        'tilt': ['Tilt Warp', 'sans-serif']
      },
      colors: {
        'azul-logo': 'hsl(184.968, 73%, 42%)',
        'azul-dark': 'hsl(184.918, 88%, 27%)'
      },
      backgroundImage: {
        'open-menu': "url('../assets/img/menu-2.svg')",
        'close-menu': "url('../assets/img/x.svg')",
        'circuito': "url(../assets/img/vishnu-mohanan-pfR18JNEMv8-unsplash.jpg)"
      }
    },
  },
  plugins: [
    require('tailwindcss-animated')
  ],
}

