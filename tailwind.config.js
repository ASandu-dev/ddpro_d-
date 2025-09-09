/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "web/themes/custom/ddpro/templates/**/*.{twig,html,js}",
    "web/themes/custom/ddpro/**/*.{php,theme}",
    // Also include any JS files that might use Tailwind classes
    "web/themes/custom/ddpro/js/**/*.js",
  ],
  theme: {
    fontFamily: {
      'josefin': ['Josefin Sans', 'sans-serif'], // Added fallback
    },
    screens: {
      'xs': '360px',
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
    },
    extend: {
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
      },
      colors: {
        // Primary brand colors
        'primary-teal': '#19bf2c',
        'secondary-orange': '#EF8766',
        'light-gray': '#F4F7FB',
        'dark-gray': '#1D1E20',

        // Additional color variations for better usage
        'primary': {
          50: '#f0fdf0',
          100: '#dcfce7',
          500: '#19bf2c',
          600: '#16a226',
          700: '#15803d',
          900: '#14532d',
        },
        'secondary': {
          50: '#fef7f0',
          100: '#feecdc',
          500: '#EF8766',
          600: '#ea7c5c',
          700: '#dc6537',
        },
        'gray': {
          50: '#F4F7FB',
          900: '#1D1E20',
        }
      }
    }
  },
  plugins: [],
}