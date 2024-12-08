const { default: daisyui } = require("daisyui");

module.exports = {
  content: ["./app/**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        'custom-green': '#4D5A32',
      },
    },
  },
  daisyui :{
    themes :["light"],
  },
  plugins: [require("daisyui")],
};
