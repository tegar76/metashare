//==================== Script Sampul ==========================
//Untuk Memunculkan halaman Sampul
window.addEventListener("load", function () {
	setTimeout(function open(event) {
		document.querySelector(".sampul").style.display = "block"; //block
		document
			.querySelector(".sampul")
			.classList.add(
				"animate__animated",
				"animate__fadeInTopLeft",
				"animate__delay-3.6s"
			);
	}, 1000);
});

//Untuk Button Buka Undangan
document.querySelector("#buka").addEventListener("click", function () {
	setTimeout(function close(event) {
		//document.querySelector(".sampul").style.display="none";
		document
			.querySelector(".sampul")
			.classList.add(
				"animate__animated",
				"animate__fadeOutTopRight",
				"animate__delay-1.5s"
			);
	}, 1000);
});
//===================== Script Sampul End =======================

//==================== Script Landing Page (Cover) ==============
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
var countDownDate = new Date("Jan 15, 2023 13:43:00").getTime();

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
		pm.src = "assets/st_0001/icon/in in-play.svg";
	} else {
		mc.pause();
		pm.src = "assets/st_0001/icon/in in-pause.svg";
	}
}

function playLang() {
	mc.play();
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

//--------- Copy Virtual Acount BCA--------
function copy_VA_BCA() {
	var copyVA = document.getElementById("myInput_VA_BCA");
	copyVA.select();
	copyVA.setSelectionRange(0, 99999);
	navigator.clipboard.writeText(copyVA.value);
	alert("Copied: " + copyVA.value);
}

//--------- Copy Virtual Acount BRI--------
function copy_VA_BRI() {
	var copyVA = document.getElementById("myInput_VA_BRI");
	copyVA.select();
	copyVA.setSelectionRange(0, 99999);
	navigator.clipboard.writeText(copyVA.value);
	alert("Copied: " + copyVA.value);
}

//--------- Copy Virtual Acount MANDIRI--------
function copy_VA_MANDIRI() {
	var copyVA = document.getElementById("myInput_VA_MANDIRI");
	copyVA.select();
	copyVA.setSelectionRange(0, 99999);
	navigator.clipboard.writeText(copyVA.value);
	alert("Copied: " + copyVA.value);
}

//--------- Copy Virtual Acount BSI--------
function copy_VA_BSI() {
	var copyVA = document.getElementById("myInput_VA_BSI");
	copyVA.select();
	copyVA.setSelectionRange(0, 99999);
	navigator.clipboard.writeText(copyVA.value);
	alert("Copied: " + copyVA.value);
}

//--------- Copy Virtual Acount CIMBNIAGA--------
function copy_VA_CIMBNIAGA() {
	var copyVA = document.getElementById("myInput_VA_CIMBNIAGA");
	copyVA.select();
	copyVA.setSelectionRange(0, 99999);
	navigator.clipboard.writeText(copyVA.value);
	alert("Copied: " + copyVA.value);
}

//--------- Copy Virtual Acount CIMBNIAGA--------
function copy_VA_DANA() {
	var copyVA = document.getElementById("myInput_VA_DANA");
	copyVA.select();
	copyVA.setSelectionRange(0, 99999);
	navigator.clipboard.writeText(copyVA.value);
	alert("Copied: " + copyVA.value);
}

//==================== END Script Landing Page (Cover) ==============
