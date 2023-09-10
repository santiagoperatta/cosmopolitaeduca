/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
	  "./resources/**/*.blade.php",
	  './storage/framework/views/*.php',
	  "./resources/**/*.js",
	  "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php"
	],
	theme: {
	  extend: {},
	},
	plugins: [],
  }