document.addEventListener("DOMContentLoaded", function () {
	function textLimiter() {
		var elementsWithTextLimit = document.querySelectorAll('[scn-text-limit]');
		elementsWithTextLimit.forEach(function (element) {
			var numberOfLines = parseInt(element.getAttribute('scn-text-limit'));
			if (!isNaN(numberOfLines)) {
				element.style.overflow = 'hidden';
				element.style.textOverflow = 'ellipsis';
				element.style.display = '-webkit-box';
				element.style.webkitLineClamp = numberOfLines;
				element.style.webkitBoxOrient = 'vertical';
			}
		});
	}

	textLimiter();
});