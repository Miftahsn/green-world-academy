/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.{js,jsx,ts,tsx}",
    'node_modules/flowbite-react/lib/esm/**/*.js',
  ],
  theme: {
    extend: {
      fontFamily:{
        elsie:['Elsie', 'serif'],
        space: ['Space Grotesk', 'sans-serif'],
      },
      colors:{
        primary: '#656d4a',
        secondary: '#737c54',
        secondary2: '#808960',
        light: '#FFFFF',
        dark: '#000000',
        brown: '#b6ad90',
        Green1: '#386641',
        Green2: '#6a994e',
        Green3: '#3B6B15',
      },
    },
  },
  plugins: [require('flowbite/plugin')],
}

