//==================== Script Landing Page (Sampul) ==============
//Scipt when page refesh back top
window.onbeforeunload = function () {
	window.scrollTo(0, 0);
};

/*Disable Scroll*/
function disableScroll() {
	scrollTop = window.pageYOffset || document.documentElement.scrollTop;
	scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

	window.onscroll = function () {
		window.scrollTo(scrollLeft, scrollTop);
	};
}
disableScroll();

//enable scroll
function enableScroll() {
	let btnCover = document.getElementById("btn");
	let gmAction = document.getElementById("gm");
	let msc = document.getElementById("music");
	let bdy = document.querySelector("body");
	let cWA = document.getElementById("contWa");

	window.onscroll = function () {
		btnCover.style.display = "none";
		cWA.style.display = "block";
		bdy.style.overflowY = "auto";
		bdy.style.overflowX = "auto";
		scrollFunction();
	};

	function scrollFunction() {
		if (
			document.body.scrollTop > 300 ||
			document.documentElement.scrollTop > 300
		) {
			gmAction.style.display = "block";
			msc.play();
		} else {
			gmAction.style.display = "none";
		}
	}
}

//-----------------Countdown Waktu Akad----------------

//Mengatur akhir perhitungan mundur
// Mengatur waktu akhir perhitungan mundur
// Mengatur waktu akhir perhitungan mundur
var getCountDown = document.querySelector("#countDownTime").value;
var countDownDate = new Date(getCountDown).getTime();

// Memperbarui hitungan mundur setiap 1 detik
var x = setInterval(function () {
	// Untuk mendapatkan tanggal dan waktu hari ini
	var now = new Date().getTime();

	// Temukan jarak antara sekarang dan tanggal hitung mundur
	var distance = countDownDate - now;

	// Perhitungan waktu untuk hari, jam, menit dan detik
	var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	var seconds = Math.floor((distance % (1000 * 60)) / 1000);

	// Keluarkan hasil dalam elemen dengan id = "demo"
	var textDays = document.getElementById("hari");
	textDays.innerHTML = days < 10 ? "0" + days : days;
	var textHours = document.getElementById("jam");
	textHours.innerHTML = hours < 10 ? "0" + hours : hours;
	var textMinutes = document.getElementById("menit");
	textMinutes.innerHTML = minutes < 10 ? "0" + minutes : minutes;
	var textSeconds = document.getElementById("detik");
	textSeconds.innerHTML = seconds < 10 ? "0" + seconds : seconds;

	// Jika hitungan mundur selesai, tulis beberapa teks
	if (distance < 0) {
		clearInterval(x);

		document.getElementById("hari").innerHTML = "00";
		document.getElementById("jam").innerHTML = "00";
		document.getElementById("menit").innerHTML = "00";
		document.getElementById("detik").innerHTML = "00";
	}
}, 1000);

//-------------Modal Berikan Hadiah --------------------

let bGift = document.getElementById("btnGift");
let modal = document.getElementById("myModal");
let close = document.getElementById("in-close");

bGift.onclick = function () {
	modal.style.display = "block";
	//bGift.style.display = "none";
};

close.onclick = function () {
	modal.style.display = "none";
	//bGift.style.display = "block";
};

window.onclick = function () {
	if (event.target == myModal) {
		modal.style.display = "none";
		bGift.style.display = "block";
	}
};

//--------- Copy Virtual Acount--------
function copyToClipboard(id) {
	var r = document.createRange();
	r.selectNode(document.getElementById(id));
	window.getSelection().removeAllRanges();
	window.getSelection().addRange(r);
	document.execCommand("copy");
	window.getSelection().removeAllRanges();

	//notif Copy Succes
	document.getElementById("notf-copy").style.display = "block";

	setTimeout(function () {
		document.getElementById("notf-copy").style.display = "none";
	}, 1200);
}
//==================== END Script Landing Page (Sampul) ==============
