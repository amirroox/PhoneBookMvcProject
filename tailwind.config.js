module.exports = {
  content: [
    "./views/**/*.{php,html,js}",
    "./node_modules/@themesberg/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Work Sans', 'sans-serif']
      }
    },
    screens: {
      'xs': '320px',
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px'
    }
  },
  plugins: [
    require('@themesberg/flowbite/plugin')
  ]
}
