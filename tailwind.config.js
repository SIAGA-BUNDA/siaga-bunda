module.exports = {
  content: ["./app/**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        'custom-green': '#4D5A32',
      },
    },
  },
  plugins: [require("daisyui")],
};
