// postcss.config.js
const tailwindcss = require('tailwindcss')

module.exports = {
    plugins: [
      require('tailwindcss'),
      require('postcss-import'),
      require('precss'),
      require('autoprefixer'),
    ]
  }