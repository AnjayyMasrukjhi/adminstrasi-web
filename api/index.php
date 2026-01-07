<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <style>
      @import url("https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap");

:root {
  --primary-color: #2887ff;
  --primary-color-dark: #2476da;
  --text-dark: #0a0a0a;
  --text-light: #737373;
  --extra-light: #f3f4f6;
  --white: #ffffff;
  --max-width: 1200px;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

.section__container {
  max-width: var(--max-width);
  margin: auto;
  padding: 5rem 1rem;
}

.section__header {
  margin-bottom: 5px;
  font-size: 2.5rem;
  font-weight: 700;
  color: var(--text-dark);
  text-align: center;
}

.section__description {
  max-width: 600px;
  margin-inline: auto;
  color: var(--text-light);
  text-align: center;
}

.btn {
  padding: 0.75rem 1.5rem;
  outline: none;
  border: none;
  font-size: 1rem;
  white-space: nowrap;
  color: var(--white);
  background-color: var(--primary-color);
  border-radius: 5rem;
  transition: 0.3s;
  cursor: pointer;
}

.btn:hover {
  background-color: var(--primary-color-dark);
}

.logo {
  font-size: 1.75rem;
  font-weight: 800;
  color: var(--text-dark);
}

img {
  display: flex;
  width: 100%;
}

a {
  text-decoration: none;
  transition: 0.3s;
}

ul {
  list-style: none;
}

html,
body {
  scroll-behavior: smooth;
}

body {
  font-family: "DM Sans", sans-serif;
}

nav {
  position: fixed;
  isolation: isolate;
  top: 0;
  width: 100%;
  z-index: 9;
}

.nav__header {
  padding: 1rem;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  background-color: var(--primary-color);
}

.nav__logo .logo {
  font-size: 1.5rem;
  color: var(--white);
}

.nav__menu__btn {
  font-size: 1.5rem;
  color: var(--white);
  cursor: pointer;
}

.nav__links {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 2rem;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  gap: 2rem;
  background-color: var(--primary-color);
  transition: transform 0.5s;
  z-index: -1;
}

.nav__links.open {
  transform: translateY(100%);
}

.nav__links a {
  font-weight: 600;
  color: var(--white);
  white-space: nowrap;
}

.nav__links a:hover {
  color: var(--text-dark);
}

.nav__btns {
  display: none;
}

header {
  margin-top: 5rem;
  padding-inline: 1rem;
  position: relative;
  isolation: isolate;
  overflow: hidden;
}

header::before {
  position: absolute;
  content: "";
  height: 100%;
  width: calc(100% - 2rem);
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-image: url("assets/header-bg.jpg");
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
  border-radius: 3rem;
  z-index: -1;
}

.header__container {
  display: grid;
}

.header__content {
  padding: 4rem 1rem;
}

.header__content p {
  margin-bottom: 5px;
  font-size: 1rem;
  font-weight: 600;
  color: var(--text-dark);
  text-align: center;
}

.header__content h1 {
  margin-bottom: 2rem;
  font-size: 4.5rem;
  font-weight: 600;
  color: var(--text-dark);
  line-height: 5.5rem;
  text-align: center;
}

.header__btns {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 1rem;
}

.header__btns .btn {
  padding: 1rem 2rem;
}

.header__btns a {
  padding: 9px 13px;
  font-size: 1.5rem;
  color: var(--primary-color);
  background-color: var(--white);
  border-radius: 100%;
}

.header__btns a:hover {
  color: var(--white);
  background-color: var(--primary-color);
}

.destination__container :is(.section__header, .section__description) {
  text-align: left;
  margin-inline-start: unset;
}

.destination__grid {
  margin-top: 4rem;
  display: grid;
  gap: 2rem 1rem;
}

.destination__card img {
  border-radius: 1.5rem;
  box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.2);
}

.destination__card__details {
  padding: 1rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 1rem;
}

.destination__card__details h4 {
  margin-bottom: 5px;
  font-size: 1.2rem;
  font-weight: 600;
  columns: var(--text-dark);
}

.destination__card__details p {
  columns: var(--text-light);
}

.destination__rating {
  padding: 5px 10px;
  font-size: 0.9rem;
  white-space: nowrap;
  color: var(--white);
  background-color: var(--primary-color);
  border-radius: 1rem;
  transition: 0.3s;
}

.destination__card:hover .destination__rating {
  background-color: var(--primary-color-dark);
}

.journey__grid {
  margin-top: 2rem;
  display: grid;
  gap: 0 1rem;
}

.journey__card {
  position: relative;
  isolation: isolate;
  padding-top: 4rem;
  overflow: hidden;
}

.journey__card__bg {
  padding: 2rem;
  background-color: var(--extra-light);
  border-top-right-radius: 1rem;
  border-top-left-radius: 1rem;
}

.journey__card__bg span {
  display: inline-block;
  margin-bottom: 4rem;
  font-size: 1.75rem;
  color: var(--primary-color);
}

.journey__card__bg h4 {
  font-size: 1.2rem;
  font-weight: 600;
  color: var(--text-dark);
}

.journey__card__content {
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  height: 100%;
  padding: 2rem;
  background-color: var(--primary-color);
  border-top-right-radius: 1rem;
  border-top-left-radius: 1rem;
  transition: 0.3s;
}

.journey__card:hover .journey__card__content {
  top: 0;
}

.journey__card__content span {
  display: inline-block;
  margin-bottom: 1rem;
  padding: 7px 9px;
  font-size: 1rem;
  color: var(--white);
  border: 2px solid var(--white);
  border-radius: 100%;
}

.journey__card__content h4 {
  margin-bottom: 1rem;
  font-size: 1.2rem;
  font-weight: 600;
  color: var(--white);
}

.journey__card__content p {
  color: var(--extra-light);
}

.showcase__container {
  display: grid;
  gap: 2rem;
  overflow: hidden;
}

.showcase__image img {
  max-width: 400px;
  margin-inline: auto;
  box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.2);
}

.showcase__content h4 {
  margin-bottom: 2rem;
  font-size: 3rem;
  font-weight: 600;
  color: var(--text-dark);
}

.showcase__content p {
  margin-bottom: 1rem;
  color: var(--text-light);
}

.showcase__content .btn {
  width: 100%;
  margin-top: 2rem;
  padding: 1.5rem;
  font-weight: 600;
  color: var(--text-dark);
  background-image: url("assets/header-bg.jpg");
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  border-radius: 5px;
}

.banner__container {
  display: grid;
  gap: 2rem;
}

.banner__card {
  padding: 2rem 1rem;
  text-align: center;
  background-color: var(--extra-light);
  border-radius: 2rem;
  box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.1);
}

.banner__card h4 {
  font-size: 5rem;
  font-weight: 500;
  color: var(--primary-color);
}

.banner__card p {
  color: var(--text-light);
}

.discover__grid {
  margin-top: 4rem;
  display: grid;
  gap: 2rem;
}

.discover__card {
  padding: 2rem 1rem;
  text-align: center;
  transition: 0.3s;
  border-radius: 1rem;
}

.discover__card:hover {
  box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.1);
}

.discover__card span {
  display: inline-block;
  margin-bottom: 1rem;
  padding: 10px 15px;
  font-size: 1.5rem;
  color: var(--primary-color);
  background-color: rgba(40, 135, 255, 0.1);
  border-radius: 100%;
}

.discover__card h4 {
  max-width: 150px;
  margin-inline: auto;
  margin-bottom: 1rem;
  font-size: 1.2rem;
  font-weight: 700;
  color: var(--text-dark);
}

.destination__card p {
  color: var(--text-light);
}

.swiper {
  margin-top: 4rem;
  width: 100%;
}

.swiper-slide {
  min-width: 375px;
}

.client__card {
  padding: 5px;
  background-color: var(--extra-light);
  border-radius: 1rem;
  transition: 0.3s;
}

.client__card:hover {
  background-color: var(--primary-color);
}

.client__content {
  padding: 1rem;
  background-color: var(--white);
  border-radius: calc(1rem - 5px);
}

.client__rating {
  margin-bottom: 1rem;
  color: var(--primary-color);
}

.client__content p {
  color: var(--text-dark);
}

.client__details {
  padding: 1rem;
  display: flex;
  align-items: center;
  gap: 1rem;
}

.client__details img {
  max-width: 50px;
  border-radius: 100%;
}

.client__details h4 {
  font-size: 1.1rem;
  font-weight: 600;
  color: var(--text-dark);
  transition: 0.3s;
}

.client__card:hover h4 {
  color: var(--white);
}

.client__details h5 {
  font-size: 1rem;
  font-weight: 500;
  color: var(--text-light);
  transition: 0.3s;
}

.client__card:hover h5 {
  color: var(--extra-light);
}

footer {
  background-color: var(--extra-light);
}

.footer__container {
  display: grid;
  gap: 4rem 2rem;
}

.footer__col p {
  max-width: 300px;
  margin-block: 2rem;
  color: var(--text-light);
}

.footer__socials {
  display: flex;
  align-items: center;
  gap: 1rem;
  flex-wrap: wrap;
}

.footer__socials a {
  display: inline-block;
  padding: 7px 10px;
  font-size: 1.25rem;
  color: var(--white);
  background-color: var(--primary-color);
  border-radius: 100%;
}

.footer__socials a:hover {
  background-color: var(--primary-color-dark);
}

.footer__col h4 {
  margin-bottom: 2rem;
  font-size: 1.2rem;
  font-weight: 600;
  color: var(--text-dark);
}

.footer__links {
  display: grid;
  gap: 1rem;
}

.footer__links a {
  display: flex;
  align-items: center;
  gap: 10px;
  color: var(--text-light);
}

.footer__links a:hover {
  color: var(--primary-color);
}

.footer__links a span {
  font-size: 1.25rem;
}

.footer__col form {
  display: grid;
  gap: 1rem;
}

.footer__col input {
  padding: 0.75rem;
  font-size: 1rem;
  color: var(--text-dark);
  background-color: var(--white);
  border: 1px solid var(--text-light);
  border-radius: 5px;
}

.footer__col input::placeholder {
  color: var(--text-light);
}

.footer__col .btn {
  border-radius: 5px;
}

.footer__bar {
  padding: 1rem;
  font-size: 0.9rem;
  color: var(--text-light);
  text-align: center;
}

@media (width > 540px) {
  .destination__grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .journey__grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .showcase__container {
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
  }

  .banner__container {
    grid-template-columns: repeat(2, 1fr);
  }

  .discover__grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .footer__container {
    grid-template-columns: repeat(2, 1fr);
  }

  .footer__col:last-child {
    grid-area: 2/1/3/2;
  }
}

@media (width > 768px) {
  nav {
    position: static;
    padding: 2rem 1rem;
    max-width: var(--max-width);
    margin-inline: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 2rem;
  }

  .nav__header {
    flex: 1;
    padding: 0;
    background-color: transparent;
  }

  .nav__logo .logo {
    color: var(--text-dark);
  }

  .nav__menu__btn {
    display: none;
  }

  .nav__links {
    position: static;
    width: fit-content;
    padding: 0;
    flex-direction: row;
    background-color: transparent;
    transform: none !important;
  }

  .nav__links a {
    color: var(--text-dark);
  }

  .nav__links a:hover {
    color: var(--primary-color);
  }

  .nav__links li:last-child {
    display: none;
  }

  .nav__btns {
    flex: 1;
    display: flex;
    justify-content: flex-end;
  }

  .nav__btns button {
    padding: 0.75rem 2rem;
    background-color: var(--text-dark);
  }

  header {
    margin-top: 0;
  }

  .header__container {
    grid-template-columns:
      minmax(0, 1fr)
      repeat(5, minmax(0, calc(var(--max-width) / 5)))
      minmax(0, 1fr);
  }

  .header__content {
    grid-column: 2/4;
    padding-block: 8rem;
  }

  .header__content :is(p, h1) {
    text-align: left;
  }

  .header__btns {
    justify-content: flex-start;
  }

  .header__image {
    grid-column: 4/8;
    position: relative;
    isolation: isolate;
    height: 100%;
  }

  .header__image img {
    position: absolute;
    top: 2rem;
    left: 0;
    height: 100%;
    width: unset;
  }

  .destination__grid {
    grid-template-columns: repeat(3, 1fr);
  }

  .journey__grid {
    grid-template-columns: repeat(3, 1fr);
  }

  .showcase__container {
    grid-template-columns: repeat(3, 1fr);
  }

  .showcase__content {
    grid-column: 2/4;
  }

  .banner__container {
    grid-template-columns: repeat(3, 1fr);
  }

  .discover__grid {
    grid-template-columns: repeat(3, 1fr);
  }

  .footer__container {
    grid-template-columns: 2fr 1fr 1fr 1.5fr;
  }

  .footer__col:last-child {
    grid-area: unset;
  }
}

@media (width > 1200px) {
  .header__content {
    padding-inline: 1rem 0;
  }

  .destination__grid {
    gap: 2rem;
  }
}

    </style>
  <title>Al-Hijrah Travel | Spesialis Umroh Terpercaya</title>
</head>

<body>
  <nav>
    <div class="nav__header">
      <div class="nav__logo">
        <a href="#" class="logo">Al-Hijrah</a>
      </div>
      <div class="nav__menu__btn" id="menu-btn">
        <i class="ri-menu-line"></i>
      </div>
    </div>
    <ul class="nav__links" id="nav-links">
      <li><a href="#home">BERANDA</a></li>
      <li><a href="#about">TENTANG</a></li>
      <li><a href="#tour">PAKET</a></li>
      <li><a href="#package">LAYANAN</a></li>
      <li><a href="#contact">KONTAK</a></li>
      <li><a href="#">DAFTAR UMROH</a></li>
    </ul>
    <div class="nav__btns">
      <button class="btn">DAFTAR UMROH</button>
    </div>
  </nav>
  <header id="home">
    <div class="header__container">
      <div class="header__content">
        <p>WUJUDKAN IMPIAN UMROH ANDA</p>
        <h1>Raih Berkah di Tanah Suci Bersama Kami!</h1>
      </div>
      <div class="header__image">
        <img src="https://www.pngarts.com/files/5/Airplane-PNG-Pic.png" alt="Kabah" />
      </div>
    </div>
  </header>

  <section class="section__container destination__container" id="about">
    <h2 class="section__header">Destinasi Umroh Pilihan</h2>
    <p class="section__description">
      Kunjungi Tempat-Tempat Bersejarah di Tanah Suci
    </p>
    <div class="destination__grid">
      <div class="destination__card">
        <img src="assets/masjidHaram.jpg" alt="Masjidil Haram" />
        <div class="destination__card__details">
          <div>
            <h4>Masjidil Haram</h4>
            <p>Makkah, Arab Saudi</p>
          </div>
          <div class="destination__rating">
            <span><i class="ri-star-fill"></i></span>
            5.0
          </div>
        </div>
      </div>
      <div class="destination__card">
        <img src="assets/nabawi.jpg" alt="Masjid Nabawi" />
        <div class="destination__card__details">
          <div>
            <h4>Masjid Nabawi</h4>
            <p>Madinah, Arab Saudi</p>
          </div>
          <div class="destination__rating">
            <span><i class="ri-star-fill"></i></span>
            5.0
          </div>
        </div>
      </div>
      <div class="destination__card">
        <img src="assets/JabalRahmah.jpg" alt="Jabal Rahmah" />
        <div class="destination__card__details">
          <div>
            <h4>Jabal Rahmah</h4>
            <p>Arafah, Arab Saudi</p>
          </div>
          <div class="destination__rating">
            <span><i class="ri-star-fill"></i></span>
            4.9
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section__container journey__container" id="tour">
    <h2 class="section__header">Perjalanan Umroh yang Mudah dan Nyaman!</h2>
    <p class="section__description">
      Perencanaan Sempurna untuk Ibadah Anda
    </p>
    <div class="journey__grid">
      <div class="journey__card">
        <div class="journey__card__bg">
          <span><i class="ri-bookmark-3-line"></i></span>
          <h4>Pendaftaran Mudah</h4>
        </div>
        <div class="journey__card__content">
          <span><i class="ri-bookmark-3-line"></i></span>
          <h4>Daftar dengan Cepat dan Praktis</h4>
          <p>
            Proses pendaftaran yang simple dan cepat. Cukup dengan beberapa klik,
            perjalanan umroh Anda sudah bisa terwujud. Kami membantu mengurus semua
            kebutuhan dari visa hingga akomodasi.
          </p>
        </div>
      </div>
      <div class="journey__card">
        <div class="journey__card__bg">
          <span><i class="ri-landscape-fill"></i></span>
          <h4>Paket Sesuai Kebutuhan</h4>
        </div>
        <div class="journey__card__content">
          <span><i class="ri-landscape-fill"></i></span>
          <h4>Pilihan Paket yang Fleksibel</h4>
          <p>
            Kami menyediakan berbagai pilihan paket umroh yang dapat disesuaikan
            dengan budget dan kebutuhan Anda. Mulai dari paket ekonomis hingga VIP,
            semua dirancang untuk kenyamanan ibadah Anda.
          </p>
        </div>
      </div>
      <div class="journey__card">
        <div class="journey__card__bg">
          <span><i class="ri-map-2-line"></i></span>
          <h4>Pembimbing Berpengalaman</h4>
        </div>
        <div class="journey__card__content">
          <span><i class="ri-map-2-line"></i></span>
          <h4>Dipandu oleh Ustadz Profesional</h4>
          <p>
            Tim pembimbing kami terdiri dari ustadz dan ustadzah yang berpengalaman.
            Mereka akan membimbing Anda dalam setiap ritual ibadah umroh dengan tuntunan
            yang benar sesuai sunnah.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="section__container showcase__container" id="package">
    <div class="showcase__image">
      <img src="https://i.pinimg.com/736x/7a/53/25/7a5325000a99534cf5cce8c0e097b9b9.jpg" alt="Umroh" />
    </div>
    <div class="showcase__content">
      <h4>WUJUDKAN UMROH IMPIAN BERSAMA AL-HIJRAH</h4>
      <p>
        Berangkat umroh adalah impian setiap muslim. Bersama Al-Hijrah Travel, kami
        hadir untuk mewujudkan impian spiritual Anda menuju Tanah Suci. Dengan
        pengalaman lebih dari 10 tahun melayani jamaah umroh, kami memahami betul
        kebutuhan dan harapan setiap jamaah yang ingin menunaikan ibadah dengan khusyuk
        dan nyaman.
      </p>
      <p>
        Al-Hijrah Travel menyediakan paket umroh dengan layanan terbaik, mulai dari
        pengurusan visa, tiket pesawat, hotel bintang yang dekat dengan Masjidil Haram
        dan Masjid Nabawi, transportasi yang nyaman, hingga bimbingan ibadah dari ustadz
        berpengalaman. Kami berkomitmen memberikan pelayanan terbaik agar ibadah umroh
        Anda menjadi pengalaman spiritual yang tak terlupakan.
      </p>
      <div class="showcase__btn">
        <a href="https://wa.me/6288705573482" target="_blank">
          <button class="btn">
            Konsultasi Gratis
            <span><i class="ri-arrow-right-line"></i></span>
          </button>
        </a>
      </div>
    </div>
  </section>

  <section class="section__container banner__container">
    <div class="banner__card">
      <h4>10+</h4>
      <p>Tahun Pengalaman</p>
    </div>
    <div class="banner__card">
      <h4>5000+</h4>
      <p>Jamaah Terlayani</p>
    </div>
    <div class="banner__card">
      <h4>4.9</h4>
      <p>Rating Kepuasan</p>
    </div>
  </section>

  <section class="section__container discover__container">
    <h2 class="section__header">Fasilitas Umroh Terbaik</h2>
    <p class="section__description">
      Nikmati Kenyamanan dan Kemudahan Sepanjang Perjalanan
    </p>
    <div class="discover__grid">
      <div class="discover__card">
        <span><i class="ri-hotel-line"></i></span>
        <h4>Hotel Berbintang</h4>
        <p>
          Hotel berkualitas dengan lokasi strategis dekat Masjidil Haram dan
          Masjid Nabawi, memberikan kenyamanan maksimal untuk istirahat setelah ibadah.
        </p>
      </div>
      <div class="discover__card">
        <span><i class="ri-flight-takeoff-line"></i></span>
        <h4>Penerbangan Nyaman</h4>
        <p>
          Tiket pesawat dengan maskapai terpercaya dan jadwal yang fleksibel,
          memastikan perjalanan Anda lancar dan nyaman dari awal hingga akhir.
        </p>
      </div>
      <div class="discover__card">
        <span><i class="ri-book-open-line"></i></span>
        <h4>Bimbingan Ibadah</h4>
        <p>
          Pembimbing profesional yang akan mendampingi dan membimbing Anda dalam
          setiap rangkaian ibadah umroh sesuai tuntunan yang benar.
        </p>
      </div>
    </div>
  </section>

  <section class="section__container client__container">
    <h2 class="section__header">Dipercaya Ribuan Jamaah</h2>
    <p class="section__description">
      Dengarkan Testimoni dari Jamaah yang Telah Merasakan Pelayanan Kami
    </p>
    <!-- Slider main container -->
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <div class="client__card">
            <div class="client__content">
              <div class="client__rating">
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
              </div>
              <p>
                Alhamdulillah, pengalaman umroh bersama Al-Hijrah Travel sangat berkesan.
                Pelayanannya luar biasa, pembimbing sangat sabar dan informatif. Hotel
                dekat dengan Masjidil Haram, memudahkan kami untuk beribadah. Terima kasih
                Al-Hijrah, semoga berkah selalu!
              </p>
            </div>
            <div class="client__details">
              <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&q=80" alt="jamaah" />
              <div>
                <h4>Ahmad Fadli</h4>
                <h5>Pengusaha</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="client__card">
            <div class="client__content">
              <div class="client__rating">
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
              </div>
              <p>
                Pertama kali umroh dan saya memilih Al-Hijrah Travel. Keputusan yang
                tepat! Semua sudah diatur dengan baik, tidak perlu pusing memikirkan
                apa-apa. Fokus ibadah saja. Makanannya enak, hotelnya nyaman, dan
                pembimbingnya sangat membantu. Insya Allah tahun depan umroh lagi!
              </p>
            </div>
            <div class="client__details">
              <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&q=80" alt="jamaah" />
              <div>
                <h4>Siti Rahma</h4>
                <h5>Guru</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="client__card">
            <div class="client__content">
              <div class="client__rating">
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
              </div>
              <p>
                Saya berangkat umroh bersama keluarga menggunakan paket dari Al-Hijrah.
                Semuanya sangat terorganisir dengan baik. Tour guide ramah dan membantu.
                Anak-anak juga enjoy karena semua sudah diatur. Pengalaman spiritual yang
                luar biasa. Jazakumullahu khairan!
              </p>
            </div>
            <div class="client__details">
              <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&q=80" alt="jamaah" />
              <div>
                <h4>Budi Santoso</h4>
                <h5>Dokter</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="client__card">
            <div class="client__content">
              <div class="client__rating">
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
              </div>
              <p>
                Pelayanan Al-Hijrah Travel sangat memuaskan. Dari proses pendaftaran
                hingga kepulangan, semuanya lancar. Ustadz pembimbing sangat menguasai
                materi dan sabar dalam menjelaskan. Hotel bintang 5 dekat Haram,
                transportasi nyaman. Highly recommended!
              </p>
            </div>
            <div class="client__details">
              <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=400&q=80" alt="jamaah" />
              <div>
                <h4>Nur Aini</h4>
                <h5>Dosen</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer id="contact">
    <div class="section__container footer__container">
      <div class="footer__col">
        <div class="footer__logo">
          <a href="#" class="logo">Al-Hijrah</a>
        </div>
        <p>
          Jelajahi Tanah Suci dengan kemudahan dan kekhusyukan melalui platform
          travel umroh kami yang terpercaya. Perjalanan spiritual Anda dimulai di sini,
          di mana perencanaan yang sempurna bertemu dengan pengalaman ibadah yang tak terlupakan.
        </p>
        <ul class="footer__socials">
          <li>
            <a href="#"><i class="ri-facebook-fill"></i></a>
          </li>
          <li>
            <a href="#"><i class="ri-instagram-line"></i></a>
          </li>
          <li>
            <a href="#"><i class="ri-youtube-line"></i></a>
          </li>
        </ul>
      </div>
      <div class="footer__col">
        <h4>Menu Cepat</h4>
        <ul class="footer__links">
          <li><a href="#">Beranda</a></li>
          <li><a href="#">Paket Umroh</a></li>
          <li><a href="#">Jadwal Keberangkatan</a></li>
          <li><a href="#">Galeri</a></li>
        </ul>
      </div>
      <div class="footer__col">
        <h4>Hubungi Kami</h4>
        <ul class="footer__links">
          <li>
            <a href="#">
              <span><i class="ri-phone-fill"></i></span> +62 812 3456 7890
            </a>
          </li>
          <li>
            <a href="#">
              <span><i class="ri-record-mail-line"></i></span> info@alhijrah.com
            </a>
          </li>
          <li>
            <a href="#">
              <span><i class="ri-map-pin-2-fill"></i></span> Jakarta, Indonesia
            </a>
          </li>
        </ul>
      </div>
      <div class="footer__col">
        <h4>Berlangganan</h4>
        <form action="/">
          <input type="text" placeholder="Masukkan email Anda" />
          <button class="btn">Berlangganan</button>
        </form>
      </div>
    </div>
    <div class="footer__bar">
      Copyright © 2024 Al-Hijrah Travel. All rights reserved.
    </div>
  </footer>

  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    const menuBtn = document.getElementById("menu-btn");
const navLinks = document.getElementById("nav-links");
const menuBtnIcon = menuBtn.querySelector("i");

menuBtn.addEventListener("click", (e) => {
  navLinks.classList.toggle("open");

  const isOpen = navLinks.classList.contains("open");
  menuBtnIcon.setAttribute("class", isOpen ? "ri-close-line" : "ri-menu-line");
});

navLinks.addEventListener("click", (e) => {
  navLinks.classList.remove("open");
  menuBtnIcon.setAttribute("class", "ri-menu-line");
});

const scrollRevealOption = {
  origin: "bottom",
  distance: "50px",
  duration: 1000,
};

ScrollReveal().reveal(".header__image img", {
  ...scrollRevealOption,
  origin: "right",
});
ScrollReveal().reveal(".header__content p", {
  ...scrollRevealOption,
  delay: 500,
});
ScrollReveal().reveal(".header__content h1", {
  ...scrollRevealOption,
  delay: 1000,
});
ScrollReveal().reveal(".header__btns", {
  ...scrollRevealOption,
  delay: 1500,
});

ScrollReveal().reveal(".destination__card", {
  ...scrollRevealOption,
  interval: 500,
});

ScrollReveal().reveal(".showcase__image img", {
  ...scrollRevealOption,
  origin: "left",
});
ScrollReveal().reveal(".showcase__content h4", {
  ...scrollRevealOption,
  delay: 500,
});
ScrollReveal().reveal(".showcase__content p", {
  ...scrollRevealOption,
  delay: 1000,
});
ScrollReveal().reveal(".showcase__btn", {
  ...scrollRevealOption,
  delay: 1500,
});

ScrollReveal().reveal(".banner__card", {
  ...scrollRevealOption,
  interval: 500,
});

ScrollReveal().reveal(".discover__card", {
  ...scrollRevealOption,
  interval: 500,
});

const swiper = new Swiper(".swiper", {
  slidesPerView: 3,
  spaceBetween: 20,
  loop: true,
});

  </script>
</body>

</html>
