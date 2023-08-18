/** @type {import('tailwindcss').Config} */
export default {
  content: ["*"],
  theme: {
    extend: {},
  },
  plugins: [],

  breakpoints: {
    sm: '640px',
    md: '768px',
    lg: '1024px',
    xl: '1280px',
  },


  variants: {



    extends:{



      display:['group-focus'],
      opacity:['group-focus'],
      inset:['group-focus']
    },
  },

  plugins:[],
}

