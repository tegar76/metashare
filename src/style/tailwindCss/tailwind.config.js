/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    '../../../**/**/**/**/*.{php, js}',
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'primary-blue-cyan': '#2989A8',
        'primary-blue-cyan-hover': '#005E7C',
        'secondary-blue-sky': '#56CCF2',
        'secondary-blue': '#2F80ED',
        'success': '#4ECB71',
        'success-hover': '#3ab35c',
        'danger': '#ff4d4d',
        'danger-hover': '#ff3333',
        'warning': '#ff9933',
        'warning-hover': '#e67300',

        // Font Tema 1
        'tema1-sampul': '#fff4e2',
        'tema1-cover': '#fff4e2',
        'tema1-main': '#F0EDE5',
        'tema1-dark-green': '#748c54ff',
        'tema1-pink': '#ef6351',
        'tema1-teal': '#618b95ff',
      },
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
        MontserratBold: [ "MontserratBold"],
        Montserrat: [ "Montserrat"],
        PrimaryPoppins: [ "Poppins"],
        KalunaScriptDemo: [ "KalunaScriptDemo"],
        RadicalsDemo: [ "RadicalsDemo"],
        ShareDong : [ "ShareDong"],
      },
      fontSize: {
        'tiny': '1.125rem',
        'md': '1.075rem',
        'base-md': '0.95rem',
        'base-sm': '0.9rem',
        'base-xs': '0.83rem',
        'base-1xs': '0.70rem',
        'base-2xs': '0.60rem',
      },

      screens: {
        '2xs': '380px', 
        '1xs': '450px',
        

        /*
          Ket: 
            2xs =   Exstra small devices 
            1xs =   Exstra small devices
            xs =    Exstra small devices
            sm =   Exstra small devices Landscape
            md =   Exstra small devices
            2xs =   Exstra small devices
        */
      },
      backgroundImage: {
        'primary-sm': "url('../../../assets/bg_img/bg_primary_sm2.png')",
        'sampul': "url('../../../assets/bg_img/bg_sampul.png')",
        'cover-full': "url('../../../assets/bg_img/bg_foto_cover_full.jpg')",
        'cover-crop': "url('../../../assets/bg_img/bg_foto_cover_crop.png')",
        'mp-primary-xl': "url('../../../assets/bg_img/bg_marketplace/mp_bg_primary_xl.svg')",
        'mp-primary-sm': "url('../../../assets/bg_img/bg_marketplace/mp_bg_primary_sm.svg')",
        'split-white-sky': "linear-gradient(to bottom left, #F9FDF7 50% , #F1F1F1 50%);",

        // Tema 1
        'tema1-sampul-bg-photo': "url('../../../assets/img/cover_250x250.png')",
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
      textShadow: {
        'tema1': '2px 2px 2px rgb(239, 99, 81)',
      },
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
    require('flowbite/plugin'),
    require('tailwindcss-textshadow'),
  ],
  future: {
    defaultLineHeights: true,
    purgeLayersByDefault: true,
    removeDeprecatedGapUtilities: true,
  },
  experimental: {
      additionalBreakpoint: true,
      extendedFontSizeScale: true,
      extendedSpacingScale: true,
  },
  
}
