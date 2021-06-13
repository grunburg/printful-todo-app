const colors = require('tailwindcss/colors')

module.exports = {
  purge: [],
  darkMode: false,
  theme: {
    colors: {
      transparent: 'transparent',
      gray: colors.gray,
      blue: colors.blue,
      green: colors.green,
      red: colors.red
    },
    extend: {
      ringWidth: {
        '3': '3px'
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
