const plugin = require("tailwindcss/plugin");
const gen = (max, step = 4) =>
	//change the function to gen(4000, 1) if you want divisible by 1
	Object.fromEntries(
		Array.from({length: Math.floor(max / step) + 1}, (_, i) => {
			const n = i * step;
			return [String(n), `${n}px`];
		}),
	);
const genDecimal = (max, step = 0.1) =>
	Object.fromEntries(
		Array.from({length: Math.floor(max / step) + 1}, (_, i) => {
			const n = (i * step).toFixed(1).replace(".", "_"); // replace dot with underscore
			return [n, `${(i * step).toFixed(1)}px`];
		}),
	);
module.exports = {
	// important: true,
	content: [
		"./**/*.php", // theme PHP
		"./assets/js/**/*.js",
	],
	theme: {
		extend: {
			fontFamily: {sans: ['Arial', 'sans-serif', 'Inter', 'system-ui', '-apple-system']},
			spacing: gen(4000, 1),
			width: gen(4000, 1),
			height: gen(4000, 1),
			minWidth: gen(4000, 1),
			minHeight: gen(4000, 1),
			maxWidth: gen(4000, 1),
			maxHeight: gen(4000, 1),
			borderRadius: gen(500, 1),
			lineHeight: gen(100, 1),
			letterSpacing: genDecimal(100, 0.1),
			colors: {
				black: "black",
				white: "white",
				dev: "red",
				primary: "#ffab56", //--express-orange
				secondary: "#4e88b6", //--freight-blue
				tertiary: "#849fad", //--grayish-blue
				textcolor: "#313f4a", //--cargo-grey
				cargogrey: "#313f4a", //--cargo-grey
				expressorange: "#ffab56",
				freightblue: "#4e88b6",
				brightgray: "#efefef",
				lightgrey: "lightgrey",
			},
		},
		fontSize: {
			"2xs": ["10px", {lineHeight: "12px"}],
			xs: ["12px", {lineHeight: "14px"}],
			sm: ["14px", {lineHeight: "17px"}],
			base: ["16px", {lineHeight: "20px"}],
			reg: ["16px", {lineHeight: "20px"}],
			md: ["18px", {lineHeight: "22px"}],
			lg: ["20px", {lineHeight: "24px"}],
			xl: ["24px", {lineHeight: "28px"}],
			"2xl": ["30px", {lineHeight: "36px"}],
			"3xl": ["40px", {lineHeight: "49px"}],
			"4xl": ["82px", {lineHeight: "100px"}],
			//additional
			22: ["22px", {lineHeight: "27px"}],
			36: ["36px", {lineHeight: "42px"}],
			37: ["37px", {lineHeight: "45px"}],
			45: ["45px", {lineHeight: "55px"}],
		},
	},
  //another option of you want to have desktop first and then mobile
  /*screens: {
    lg: { max: '1279px' },
    md: { max: '991px' },
    sm: { max: '767px' },
    xs: { max: '479px' },
  },*/
	plugins: [
		plugin(function ({matchUtilities, theme}) {
			matchUtilities(
				{
					lh: (value) => ({
						lineHeight: value,
					}),
				},
				{values: theme("lineHeight")},
			);
		}),
	],
};
