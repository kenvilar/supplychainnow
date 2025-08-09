const gen = (max, step = 4) =>
	Object.fromEntries(
		Array.from({length: Math.floor(max / step) + 1}, (_, i) => {
			const n = i * step
			return [String(n), `${n}px`]
		})
	)

module.exports = {
	theme: {
		extend: {
			spacing: gen(4000),
			width: gen(4000),
			height: gen(4000),
			minWidth: gen(4000),
			minHeight: gen(4000),
			maxWidth: gen(4000),
			maxHeight: gen(4000),
			borderRadius: gen(500),
		},
	},
}