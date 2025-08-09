const plugin = require('tailwindcss/plugin')

const gen = (max, step = 4) =>
	//change the function to gen(4000, 1) if you want divisible by 1
	Object.fromEntries(
		Array.from({length: Math.floor(max / step) + 1}, (_, i) => {
			const n = i * step
			return [String(n), `${n}px`]
		})
	)
module.exports = {
	theme: {
		extend: {
			spacing: gen(4000, 1),
			width: gen(4000, 1),
			height: gen(4000, 1),
			minWidth: gen(4000, 1),
			minHeight: gen(4000, 1),
			maxWidth: gen(4000, 1),
			maxHeight: gen(4000, 1),
			borderRadius: gen(500, 1),
			lineHeight: gen(100, 1),
			colors: {
				black: 'black',
				white: 'white',
				dev: 'red',
				primary: '#ffab56', //--express-orange
				secondary: '#4e88b6', //--freight-blue
				tertiary: '#849fad', //--grayish-blue
				'textcolor': '#313f4a', //--cargo-grey
				'cargogrey': '#313f4a', //--cargo-grey
				'expressorange': '#ffab56',
				'freightblue': '#4e88b6',
				'brightgray': '#efefef',
				'lightgrey': 'lightgrey',
			},
		},
		fontSize: {
			'2xs': ['10px', {lineHeight: '12px'}],
			xs: ['12px', {lineHeight: '14px'}],
			sm: ['14px', {lineHeight: '17px'}],
			base: ['16px', {lineHeight: '20px'}],
			reg: ['16px', {lineHeight: '20px'}],
			md: ['18px', {lineHeight: '22px'}],
			lg: ['20px', {lineHeight: '24px'}],
			xl: ['24px', {lineHeight: '28px'}],
			'2xl': ['30px', {lineHeight: '36px'}],
			'3xl': ['40px', {lineHeight: '49px'}],
			'4xl': ['82px', {lineHeight: '100px'}],
			//additional
			'22': ['22px', {lineHeight: '27px'}],
			'36': ['36px', {lineHeight: '42px'}],
			'37': ['37px', {lineHeight: '45px'}],
			'45': ['45px', {lineHeight: '55px'}],
		},
	},
	plugins: [
		plugin(function ({matchUtilities, theme}) {
			matchUtilities(
				{
					lh: (value) => ({
						lineHeight: value,
					}),
				},
				{values: theme('lineHeight')}
			)
		}),
	],
}