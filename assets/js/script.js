$(document).ready(function () {		
	$("a").click(function (event) {

		if (this.hash!=="") {
			event.preventDefault();
			var hash = this.hash;
			console.log(window.location.hash);
			$('html').animate({
				scrollTop: $(hash).offset().top

			},500, function () {
				window.location.hash = hash;
			});
		}
	});
});