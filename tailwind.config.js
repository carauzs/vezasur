module.exports = {
    mode: 'jit',
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        borderWidth: {
            7: '7px'
        },
        backgroundImage: theme => ({
            'hero-header': "url(/images/vezasur4.png)",
            'header-slider': "url('/images/top_header_slide.png')",
            'card-slider': "url('/images/bottom_header_slide.png')",
            'footer-slider': "url('/images/top_footer.png')",
        }),
        colors: {
            'red-theme': 'rgb(235, 35, 46)'
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
