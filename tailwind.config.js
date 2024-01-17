/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: 
    {
      spacing: 
      {
        'sidebar': '55px',
      }
    },
  },
  plugins: [],
}

