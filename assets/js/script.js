$(document).ready(function () {		
	$("a").click(function (event) {

		if (this.hash!=="") {
			event.preventDefault();
			var hash = this.hash;
			
			$('html').animate({
				scrollTop: $(hash).offset().top

			},500, function () {
				window.location.hash = hash;
			});
		}

	});

});

var letterArr = [];

document.onkeyup = function (event) {
	var konami = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65, 13];
	letterArr.push(event.keyCode);
	if (letterArr.length>11) {
		letterArr.shift();
	}
	if (konami.join('')===letterArr.join('')) {
		document.getElementById('main').setAttribute('src', 'assets/images/contra.jpg')
		var snd  = new Audio();
		var src  = document.createElement("source");
		src.type = "audio/mpeg";
		src.src  = "assets/audio/Contra.mp3";
		snd.appendChild(src);
		snd.play();
		alert('congratulations! 30 extra lives!');
	}
}

