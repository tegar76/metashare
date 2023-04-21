function base_url() {
	var pathparts = location.pathname.split("/");
	if (location.host == "localhost:8080" || location.host == "localhost") {
		var url = location.origin + "/" + pathparts[1].trim("/") + "/"; // http://localhost/siberhyl/
	} else {
		var url = location.origin + "/"; // http://localhost/
	}
	return url;
}
const BASEURL = base_url();

let music = document.getElementById("music");

//buka undangan
document.querySelector("#buka").addEventListener("click", function () {
	setTimeout(function close(event) {
		document.querySelector("#cover").style.display = "block";
		document.querySelector("#mempelai").style.display = "block"; /*block*/
		document.querySelector("#waktu").style.display = "block"; /*block*/
		document.querySelector("#galery").style.display = "block"; /*block*/
		document.querySelector("#pesan").style.display = "flex"; /*flex*/
		document.querySelector(".navigasi").style.display = "flex";
		document.querySelector(".music-and-gift").style.display = "flex";
		document.querySelector("#sampul").style.display = "none";
	}, 1000);
});

//------Scroll Section Active Link------------

const sections = document.querySelectorAll("section[id]");

function scrollActive() {
	const scrollY = window.pageYOffset;

	sections.forEach((current) => {
		const sectionHeight = current.offsetHeight,
			sectionTop = current.offsetTop - 50,
			sectionId = current.getAttribute("id");

		if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
			document
				.querySelector(".nav-menu a[href*=" + sectionId + "]")
				.classList.add("active-link");
		} else {
			document
				.querySelector(".nav-menu a[href*=" + sectionId + "]")
				.classList.remove("active-link");
		}
	});
}

window.addEventListener("scroll", scrollActive);

//-----------------Countdown Waktu Akad----------------

//Mengatur akhir perhitungan mundur
// Mengatur waktu akhir perhitungan mundur
var countDownDate = new Date("August 21, 2023 09:00:00").getTime();

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

//----------------- Musik -----------------
let mc = document.getElementById("music");
let pm = document.getElementById("setm");

function setmus() {
	if (mc.paused) {
		mc.play();
		pm.src = BASEURL + "assets/icons/green-shades/in in-play.svg";
	} else {
		mc.pause();
		pm.src = BASEURL + "assets/icons/green-shades/in in-pause.svg";
	}
}

//music
function playLang() {
	music.play();
}

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
