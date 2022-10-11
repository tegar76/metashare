/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./../../../**/*.{php, js}'],
  theme: {
    extend: {
      spacing: {
        '3/10': '30%',
        '3/20': '15%',
        '1/10' : '10%',
        '7/10' : '73%',
        '8/10' : '80%',
      },
      fontFamily: {
        BacktoBlack: [ "BacktoBlack"],
        GreatVibes: [ "GreatVibes"],
        Montserrat: [ "Montserrat"],
        MontserratBold: [ "MontserratBold"],
      },
      fontSize: {
        'tiny': '1.125rem',
        'md': '1.075rem',
        'base-md': '0.95rem',
        'base-sm': '0.9rem',
        'base-xs': '0.8rem',
        'base-1xs': '0.7rem',
      },

      screens: {
        'xs': '500px',
      },
      backgroundImage: {
        'primary-sm': "url('../../../assets/bg_img/bg_primary_sm2.png')",
        'sampul': "url('../../../assets/bg_img/bg_sampul.png')",
        'cover-full': "url('../../../assets/bg_img/bg_foto_cover_full.jpg')",
        'cover-crop': "url('../../../assets/bg_img/bg_foto_cover_crop.png')",
      },
      animation: {
        'spin-slow': 'spin 2s linear infinite',
        'bounce-one-time': 'bounce 5s ease-in-out',
        fade: 'fadeOut 2s ease-in-out',
        fadeLeft: 'fadeLeft 0s ease-in-out',
        fadeRight: 'fadeRight 3s ease-in-out',
        wiggleLeft: 'wiggleLeft 2s ease-in-out infinite',
        wiggleRight: 'wiggleRight 2s ease-in-out infinite',
        fadeIn: 'fadeIn 3s ease-in-out',
        resize: 'resize 3s ease-in-out',
        fadeAlert: 'fadeAlert 3s ease-in-out',
      },

      // that is actual animation
      keyframes: theme => ({
        fadeOut: {
          '0%': { 
            opacity: 0,
            transform: 'translateY(300px)'
           },
          '100%': { 
            transform: 'translateY(0)'
           },
        },
        fadeLeft: {
          '0%': { 
            opacity: 0,
            transform: 'translateX(-300px)'
           },
          '100%': { 
            transform: 'translateY(0)'
           },
        },
        fadeRight: {
          '0%': { 
            opacity: 0,
            transform: 'translateX(300px)'
           },
          '100%': { 
            transform: 'translateY(0)'
           },
        },
        wiggleLeft: {
          "0%, 100%": { transform: "rotate(-10deg)" },
          "50%": { transform: "rotate(10deg)" },
        },
        wiggleRight: {
          "0%, 100%": { transform: "rotate(10deg)" },
          "50%": { transform: "rotate(-10deg)" },
        },
        fadeIn: {
          '0%': { 
            opacity: 0,
           },
           '40%': { 
            opacity: 40,
           },
           '80%': { 
            opacity: 80,
           },
          '100%': { 
            opacity: 100,
           },
        },
        resize: {
          '0%': { 
            width: 0,
           },
          '100%': { 

           },
        },
        fadeAlert: {
          '0%': { 
            opacity: 0,
           },
           '40%': { 
            opacity: 40,
           },
           '70%': { 
            opacity: 80,
           },
          '100%': { 
            opacity: 100,
           },
        },
      }),
      columns: {
        '4xs': '14rem',
        '5xs': '12rem',
      }
    },
  },
  variants: {},
  corePlugins: {
    aspectRatio: false,
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
    require('tailwindcss-animate'),
    require('@tailwindcss/forms'),
    require('tw-elements/dist/plugin'),
  ],
}
