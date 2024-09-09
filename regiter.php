<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="shortcut icon" href="./img/idn hsi.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./src/output.css" />
  </head>
  <body>
    <section class="bg-slate-200 min-h-screen flex items-center justify-center">
      <div class="bg-slate-200 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">
        <div class="md:w-1/2 px-16">
          <h2 class="font-bold text-2xl text-[#002D74]">Daftar</h2>
          <p class="text-[#002D74]">Daftarkan diri anda disini!</p>
          <form class="flex flex-col gap-4" action="">
            <input
              class="p-2 mt-8 rounded-xl border"
              type="text"
              name="name"
              placeholder="name"
              id=""
            />
            <input
              class="p-2 rounded-xl border"
              type="text"
              name="Email"
              placeholder="Email"
              id=""
            />
            <div class="relative">
              <input
                class="p-2 rounded-xl border w-full"
                type="password"
                name="password"
                placeholder="password"
                id=""
              />
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="gray"
                class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2"
                viewBox="0 0 16 16"
              >
                <path
                  d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"
                />
                <path
                  d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"
                />
              </svg>
            </div>
            <button class="bg-[#002D74] text-white rounded-lg py-2 hover:scale-110 duration-300">
              <a href="index.html">Daftar!</a>
            </button>
          </form>

          <div class="mt-10 grid grid-cols-3 items-center text-gray-100">
            <hr class="border-gray-400" />
            <p class="text-center text-slate-800 text-sm">or</p>
            <hr class="border-gray-400" />
        </div>
        <button class="bg-white border gap-2 py-2 w-full rounded-xl mt-5 flex justify-center items-center text-sm hover:scale-110 duration-300">
        <img src="./img/google.png" alt=""> 
        Daftar lewat google</button>
        <p class="mt-3 text-xs border-gray-400 py-4">forgot your password</p>
        </div>

        <div class="w-1/2 md:block hidden">
          <img class="rounded-2xl" src="./img/login.jpg" alt="" />
        </div>
      </div>
    </section>
  </body>
</html>
