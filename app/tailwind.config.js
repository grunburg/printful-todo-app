const colors = require('tailwindcss/colors')

module.exports = {
  purge: [],
  darkMode: false,
  theme: {
    colors: {
      gray: colors.trueGray,
      amber: colors.amber
    },
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
