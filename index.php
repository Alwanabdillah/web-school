<?php

require 'koneksi.php';

$artikels = getdata("SELECT * FROM artikels limit 3");

var_dump($artikels)

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="./img/idn hsi.png" type="Image/icon">
  <title>SMA TI HSI-IDN</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="./src/output.css" />
</head>

<body class="text-blue-500 dark:text-white bg-white dark:bg-blue-600">
  <nav class="navbar backdrop-blur-md bg-white/20 py-3 px-7 w-full fixed z-50">
    <div class="container mx-auto flex items-center justify-between">
      <div class="flex items-center">
        <img src="./img/idn hsi.png" alt="" class="h-full w-full" />
      </div>

      <div class="hidden md:flex items-center gap-16">

        <a href="#" class="text-[#2c1810] dark:text-white font-bold text-lg hover:text-blue-500">Home</a>
        <a href="#about" class="text-[#2c1810] dark:text-white font-bold text-lg hover:text-blue-500">About</a>
        <a href="#gallery" class="text-[#2c1810] dark:text-white font-bold text-lg hover:text-blue-500">Gallery</a>
        <a href="#footer" class="text-[#2c1810] dark:text-white font-bold text-lg hover:text-blue-500">Contact</a>
        <a href="#berita" class="text-[#2c1810] dark:text-white font-bold text-lg hover:text-blue-500">News</a>
        <div class="ml-80">
          <div class="flex items-center gap-2">
            <button class="w-10 h-5 p-0.5 rounded-full bg-blue-500 dark:bg-white">
              <div class="w-4 h-4 transition-all bg-white rounded-full dark:bg-blue-500 dark:translate-x-5"></div>
            </button>
          </div>
        </div>
      </div>
      <div
        onclick="openNavbar()"
        class="toggle h-16 flex items-center md:hidden">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-6 w-6 fill-[#02546480] cursor-pointer"
          viewBox="0 0 256 256">
          <path
            class="fill-[#025480]"
            d="M228,128a12,12,0,0,1-12,12H40a12,12,0,0,1,0-24H216A12,12,0,0,1,228,128ZM40,76H216a12,12,0,0,0,0-24H40a12,12,0,0,0,0,24ZM216,180H40a12,12,0,0,0,0,24H216a12,12,0,0,0,0-24Z"></path>
        </svg>
      </div>
  </nav>

  <aside
    class="w-[350px] h-[300px] bg-blur-lg bg-white bg-opacity-90 fixed z-50 transition-all duration-200 ease-in-out translate-x-full sm:hidden">
    <div
      class="content backdrop-blur h-full flex items-center justify-center relative z-[99]">
      <button onclick="closeNavbar()" class="absolute right-6 top-7">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="fill-[#018491] w-6 h-6"
          viewBox="0 0 256 256">
          <path
            d="M208.49,191.51a12,12,0,0,1-17,17L128,145,64.49,208.49a12,12,0,0,1-17-17L111,128,47.51,64.49a12,12,0,0,1,17-17L128,111l63.51-63.52a12,12,0,0,1,17,17L145,128Z"></path>
        </svg>
      </button>

      <ul class="flex flex-col gap-8 text-center">
        <li>
          <a onclick="closeNavbar()" class="text-base text-[#2c1810] dark:text-blue-500 font-semibold hover:text-blue-500" href="index.html">Home</a>
        </li>
        <li>
          <a onclick="closeNavbar()" class="text-base text-[#2c1810] dark:text-blue-500 font-semibold hover:text-blue-500" href="#about">About</a>
        </li>
        <li>
          <a onclick="closeNavbar()" class="text-base text-[#2c1810] dark:text-blue-500 font-semibold hover:text-blue-500" href="#gallery">Gallery</a>
        </li>
        <li>
          <a onclick="closeNavbar()" class="text-base text-[#2c1810] dark:text-blue-500 font-semibold hover:text-blue-500" href="#footer">Contact</a>
        </li>
      </ul>
    </div>
  </aside>

  <section class="px-10 pt-32 hero md:px-32 flex">
    <div class="container flex flex-col md:flex-row items-center gap-9 md:gap-14">
      <div class="flex flex-col gap-7">
        <h1
          class="text-4xl font-bold text-gray-900 dark:text-white md:text-6xl leading-[1.1]">
          Selamat datang <span class="text-gray-900 dark:text-white font-bold hover:text-blue-500 cursor-pointer dark:hover:text-blue-200"> SMA TI HSI-IDN </span>
        </h1>
        <p class="text-sm md:text-lg text-gray-800  dark:text-white">
          Lembaga pendidikan islam yang fokus melahirkan para programing muda dan mahir dalam bidang agama dan teknologi.
        </p>
        <div>
          <button
            class="bg-blue-500 dark:bg-white text-sm md:text-lg font-bold text-white dark:text-blue-500 hover:dark:text-white p-3 rounded-full hover:bg-blue-400 hover:dark:bg-blue-500 hover:scale-200 duration-300"><a href="regiter.html">Register Now!</a>
          </button>
        </div>
      </div>
      <div>
        <img
          src="./img/logo-idn2.png"
          alt="Right Image"
          width="750"
          height="750"
          class="object-cover rounded-md shadow-lg hover:scale-110 duration-300" />
      </div>
    </div>
  </section>
  <section id="about" class="flex flex-col md:flex-row items-center mt-20 md:mt-36 px-10 md:px-32 mb-16 gap-10 md:gap-24">
    <div>
      <img
        src="./img/logo-hero.png"
        alt="Left Image"
        class="h-80 w-100 object-cover rounded-md shadow-lg hover:scale-110 duration-300" />
    </div>
    <div class="flex flex-col gap-5">
      <h2 class="text-4xl md:text-6xl font-bold mb-3 leading-[1.2] text-gray-800  dark:text-white">
        Program Kami:
      </h2>
      <ul
        class="list-disc pl-5 flex flex-col gap-3 text-gray-700  dark:text-white font-medium">
        <li class="text-lg md:text-xl">Kelas 10 : Tahfidz, Diniyyah, Belajar Android Studio</li>
        <li class="text-lg md:text-xl">Kelas 11 : Tahfidz, Diniyyah, Belajar UI/UX Design, Canva dan Figma</li>
        <li class="text-lg md:text-xl">Kelas 12 : Tahfidz, Diniyyah, Belajar Bahasa Pemrograman, HTML, CSS, JS, PHP, Laravel</li>
      </ul>
    </div>
  </section>

  <section id="about" class="flex flex-col items-center mt-20 md:mt-36 px-10 md:px-32 mb-16 gap-5 md:gap-5">
    <h1 class="text-center  text-gray-800 dark:text-white font-bold text-4xl md:text-6xl mb-16">ekstrakurikuler</h1>
    <div class="flex flex-col md:flex-row gap-5">
      <div class="max-w-sm bg-blur-md border border-gray-200 dark:border-blue-400 rounded-lg shadow-md hover:scale-110 duration-300">
        <a href="#">
          <img class="rounded-t-lg " src="./img/eskul1.png" alt="" />
        </a>
        <div class="p-5">
          <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900  dark:text-white">Futsal</h5>
          </a>
          <p class="mb-3 font-normal text-gray-700 dark:text-white">Futsal ialah sebuah permainan bola yang dimainkan oleh dua tim, yang masing-masing timnya memiliki jumlah anggota yakni lima orang.</p>

        </div>
      </div>
      <div class="max-w-sm bg-blur-md border border-gray-200 dark:border-blue-400 rounded-lg shadow-md hover:scale-110 duration-300">
        <a href="#">
          <img class="rounded-t-lg " src="./img/eskul2.png" alt="" />
        </a>
        <div class="p-5">
          <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900  dark:text-white">Voli</h5>
          </a>
          <p class="mb-3 font-normal text-gray-700  dark:text-white">Bola voli merupakan permainan beregu yang bertujuan untuk memukul bola ke arah bidang lapangan lawan untuk mendapatkan poin.</p>

        </div>
      </div>
      <div class="max-w-sm bg-blur-md border border-gray-200 dark:border-blue-400 rounded-lg shadow-md hover:scale-110 duration-300">
        <a href="#">
          <img class="rounded-t-lg " src="./img/eskul3.png" alt="" />
        </a>
        <div class="p-5">
          <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900  dark:text-white">Panahan</h5>
          </a>
          <p class="mb-3 font-normal text-gray-700  dark:text-white">Panahan adalah jenis olahraga yang menggunakan busur dan anak panah untuk menembak sasaran.</p>

        </div>
      </div>
    </div>
  </section>

  <section class="flex flex-col md:flex-row items-center justify-center mt-20 md:mt-36 px-10 md:px-32 mb-16 gap-10 md:gap-24">
    <div class="flex flex-col gap-5">
      <h2 class="text-4xl md:text-6xl font-bold mb-3 leading-[1.2] text-gray-800 dark:text-white">
        Jurusan IT:
      </h2>
      <ul
        class="list-disc pl-5 flex flex-col gap-3 text-gray-700  dark:text-white font-medium">
        <li class="text-lg md:text-xl">DMM (Desain Multimedia)</li>
        <li class="text-lg md:text-xl">TKJ (Teknik Komputer dan Jaringan)</li>
        <li class="text-lg md:text-xl">RPL (Rekayasa Perangkat Lunak)</li>
      </ul>
    </div>
    <div>
      <img
        src="./img/logo-hero.png"
        alt="Left Image"
        class="h-80 w-100 object-cover rounded-md shadow-lg hover:scale-110 duration-300" />
    </div>
  </section>

  <section id="gallery" class="flex flex-col md:flex-row items-center my-28 md:mt-36 px-10 md:px-32 mb-16 gap-10 md:gap-24">
    <div>
      <h1 class="text-center font-bold text-4xl md:text-6xl mb-16">The Gallery</h1>
      <div
        class="grid grid-cols-1 sm:grid-cols-3 gap-3">
        <img
          src="./img/gallery1.png"
          alt=""
          width="500"
          height="500"
          class="object-cover rounded-md shadow-2xl hover:scale-110 duration-300" />
        <img
          src="./img/gallery3.png"
          alt=""
          width="500"
          height="500"
          class="object-cover rounded-md shadow-2xl hover:scale-110 duration-300" />
        <img
          src="./img/gallery2.png"
          alt=""
          width="500"
          height="500"
          class="object-cover rounded-md shadow-2xl hover:scale-110 duration-300" />

        <img
          src="./img/gallery5.png"
          alt=""
          width="500"
          height="500"
          class="object-cover rounded-md shadow-2xl hover:scale-110 duration-300" />
        <img
          src="./img/gallery4.png"
          alt=""
          width="500"
          height="500"
          class="object-cover rounded-md shadow-2xl hover:scale-110 duration-300" />
        <img
          src="./img/gallery6.png"
          alt=""
          width="500"
          height="500"
          class="object-cover rounded-md shadow-2xl hover:scale-110 duration-300" />
      </div>
    </div>
  </section>

  <section id="berita" class="flex flex-col items-center mt-28 md:mt-36 px-10 md:px-32 mb-16 gap-10 md:gap-24">

    <h2 class="text-2xl md:text-4xl font-bold mb-3 leading-[1.1] text-gray-800  dark:text-white">
      Berita Terbaru!
    </h2>
    <div class="flex flex-col md:flex-row gap-5 z-10">
      <?php foreach ($artikels as $artikel): ?>
        <div class="max-w-sm bg-blur-md border border-gray-200 dark:border-blue-400 rounded-lg      shadow-md hover:scale-110 duration-300">
          <a href="#">
            <img class="rounded-t-lg " src="./img/<?= $artikel['image'] ?>" alt="<?= $artikel['image'] ?>" />
          </a>
          <div class="p-5">
            <a href="#">
              <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900  dark:text-white"><?= $artikel['title'] ?></h2>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-white truncate"><?= $artikel['content'] ?></p>
            <button
              class="bg-blue-500 dark:bg-white text-sm md:text-lg font-base text-white dark:text-blue-500 hover:dark:text-white p-2 mt-5 rounded-full hover:bg-blue-600 hover:dark:bg-blue-500 hover:scale-200 duration-300 hover:shadow-lg"><a href="berita1.html">Selengkapnya</a>
            </button>
          </div>
        </div>
      <?php endforeach; ?>
  </section>

  <section class="flex flex-col md:flex-row items-center mt-28 md:mt-36 px-10 md:px-32 mb-16 gap-10 md:gap-24">
    <div class="flex flex-col gap-5">
      <h2 class="text-4xl md:text-6xl font-bold mb-3 leading-[1.1] text-gray-800  dark:text-white">
        Jagoan IT Pinter NGAJI
      </h2>
      <div
        class="flex flex-col gap-3 text-gray-800  dark:text-white font-medium">
        <p class="text-lg md:text-xl">Kalau yang lain bisa, kamu harus lebih dari bisa.</p>
      </div>
    </div>
    <div>
      <img
        src="./img/about.png"
        alt=""
        class="h-80 w-full object-cover rounded-md shadow-lg" />
    </div>
  </section>

  <footer id="footer" class="p-10 bg-blue-500 dark:bg-blue-700 flex flex-col gap-12">
    <div class="flex flex-col md:flex-row items-center justify-around px-24 gap-28">
      <div>
        <img src="./img/idn hsi.png" alt="Logo" class="h-full w-full" />
      </div>

      <div class="flex gap-24">
        <div class="flex flex-col gap-3">
          <h4 class="text-xl font-bold text-white">Follow us</h4>
          <div class="flex flex-col md:flex-row items-center gap-4">
            <a href="https://www.instagram.com/smaithsiidn/" target="_blank"><img
                src="./img/instagram-icon.png"
                alt="Icon 1"
                class="h-8 w-8 object-cover" /></a>
            <a href="https://github.com/Alwanabdillah" target="_blank"><img
                src="./img/github-icon.png"
                alt="Icon 1"
                class="h-8 w-8 object-cover" /></a>
            <a href="https://www.linkedin.com/in/alwan-abdillah-208315274/" target="_blank"><img
                src="./img/linkedin-icon.png"
                alt="Icon 1"
                class="h-8 w-8 object-cover" /></a>
          </div>
        </div>
        <div class="flex flex-col gap-3">
          <h4 class="text-xl font-bold text-white">Useful Links</h4>
          <ul class="flex flex-col text-decoration-none gap-2 text-gray-700  dark:text-white">
            <li><a href="#" class="text-white">Our Projects</a></li>
            <li><a href="#" class="text-white">FAQs</a></li>
            <li><a href="#" class="text-white">Updates</a></li>
          </ul>
        </div>
      </div>
      <div class="flex flex-col gap-3">
        <h4 class="text-xl font-bold text-white">Contacts</h4>
        <ul class="flex flex-col text-decoration-none gap-2 text-gray-700  dark:text-white">
          <li><a href="/" class="text-white">Address: Baledono, Purworejo</a></li>
          <li><a href="/" class="text-white">Email: abdillahalwan67@gmail.com</a></li>
          <li><a href="/" class="text-white">Phone Number: +62 81389571258</a></li>
        </ul>
      </div>
    </div>
    </div>
    <div class="copyright flex flex-col justify-center items-center p-6 gap-1">
      <p class="text-[1rem] text-white">&copy; All Copyrights Reserved</p>
      <p class="font-semibold text-[.7rem] text-center text-white">Developed by <span class="text-blue-200 text-[11px]">Alwan Abdillah</span></p>
    </div>

  </footer>
  <script>
    const sidebar = document.querySelector("aside");

    function openNavbar() {
      sidebar.classList.add("translate-x-0");
      sidebar.classList.remove("translate-x-full");
    }

    function closeNavbar() {
      sidebar.classList.remove("translate-x-0");
      sidebar.classList.add("translate-x-full");
    }

    function toggleDarktheme() {
      if (localStorage.getItem('theme') === "dark") {
        localStorage.setItem("theme", "light");
        document.documentElement.classList.remove("dark");
      } else {
        localStorage.setItem("theme", "dark");
        document.documentElement.classList.add("dark");
      }
    }

    document
      .querySelector("button")
      .addEventListener("click", toggleDarktheme);

    if (localStorage.getItem("theme") === "dark") {
      document.documentElement.classList.add("dark");
    }
  </script>
</body>

</html>