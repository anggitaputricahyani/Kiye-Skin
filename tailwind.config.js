/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      colors: {
        primary: '#E5E1DA', // Tambahkan tanda # untuk warna hex
        secondary: '#AAD7D9', // Mengganti warna dengan nama `secondary` agar lebih jelas
      },
    },
  },
  plugins: [],
};
