module.exports = {
  purge: [
    './resources/**/*.blade.php',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        colors :{
            'primary-kids' : '#B34C93',
            'purple-light' : '#D95AB2',
            'primary-other' : '#edca16',
            'yellow-teens' : "#FFDD00",
            'semi-black' : '#29313E'
        },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
