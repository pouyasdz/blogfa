/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./public/assets/js/**/*.js",
  ],
  theme: {
    extend: {
      fontFamily:{
        'vazir':["Vazirmatn", "sans-serif"]
      },
      width:{
        '100':'100px',
        '200':'200px',
        '300':'300px',
        '400':'400px',
        '500':'500px',
        '600':'600px',
        '700':'700px',
        '800':'800px',
        '900':'900px',
        '1000':'1000px',
      },
      height:{
        '100':'100px',
        '200':'200px',
        '300':'300px',
        '400':'400px',
        '500':'500px',
        '600':'600px',
        '700':'700px',
        '800':'800px',
        '900':'900px',
        '1000':'1000px',
      }
    },
  },
  plugins: [],
}