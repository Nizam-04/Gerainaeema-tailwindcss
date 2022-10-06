<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gerainaeema | Exclusive Syar'i</title>

    <!-- CSS -->
    <link rel="stylesheet" href="dist/css/output.css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="dist/ico/favicon.ico" type="image/x-icon">    
  </head>
  <body class="m-0 box-border">
  <!-- Header Start -->
  <?php require 'dist/components/header.html' ?>
  <!-- Header End -->

  <!-- Home Section Start -->
  <section id="home" class="pt-28">
    <div class="wrapper w-full max-w-3xl mx-auto overflow-hidden relative">
      <div class="prev-btn bg-transparent p-4 absolute top-1/2 -translate-y-1/2 text-5xl z-[100] cursor-pointer transition duration-[400ms] left-0"><ion-icon name="chevron-back-outline" class="pointer-events-none"></ion-icon></div>
      <div class="slides-container h-[800px] relative" style="transition: 500ms cubic-bezier(0.48, 0.15, 0.8, 1)">
        <div class="slide-image h-full absolute w-full">
          <img src="dist/img/haura.jpeg" class="w-full h-full object-cover">
        </div>
        <div class="slide-image h-full absolute w-full">
          <img src="dist/img/ameera.jpeg" class="w-full h-full object-cover">
        </div>
        <div class="slide-image h-full absolute w-full">
          <img src="dist/img/cadar-haura.jpeg" class="w-full h-full object-cover">
        </div>
      </div>
      <div class="next-btn bg-transparent p-4 absolute top-1/2 -translate-y-1/2 text-5xl z-[100] cursor-pointer transition duration-[400ms] right-0"><ion-icon name="chevron-forward-outline" class="pointer-events-none"></ion-icon></div>
    </div>
    <div class="navigation-dots flex h-8 items-center justify-center my-4 mx-0"></div>
  </section>
  <!-- Home Section End -->

  <!-- Popular Products Section Start -->
  <section class="bg-secondary pt-20 pb-20 flex justify-center">
    <div class="container max-w-6xl">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-16">
          <h2 class="font-semibold text-dark text-2xl mb-4">Popular Products</h2>
        </div>
      </div>
      <div class="flex flex-wrap px-4">
        <div class="w-1/2 px-4 lg:w-1/3">
          <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
            <img src="dist/img/haura.jpeg" alt="Haura Series" class="w-full">
            <div class="py-6 px-3">
              <h3 class="text-xl font-medium mb-2 truncate text-left">Haura Series Set</h3>
              <h3 class="text-xl font-medium text-left">Rp350.000</h5>
            </div>
          </div>
        </div>
        <div class="w-1/2 px-4 lg:w-1/3">
          <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
            <img src="dist/img/ameera.jpeg" alt="Haura Series" class="w-full">
            <div class="py-6 px-3">
              <h3 class="text-xl font-medium mb-2 truncate text-left">Ameera Series Set</h3>
              <h3 class="text-xl font-medium text-left">Rp190.000</h5>
            </div>
          </div>
        </div>
        <div class="w-1/2 px-4 lg:w-1/3">
          <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
            <img src="dist/img/cadar-haura.jpeg" alt="Haura Series" class="w-full">
            <div class="py-6 px-3">
              <h3 class="text-xl font-medium mb-2 truncate text-left">Cadar Haura</h3>
              <h3 class="text-xl font-medium text-left">Rp15.000</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Popular Products Section End -->

  <!-- Script Section Start (Not Visible) -->
    <!-- JS -->
    <script type="module" src="dist/js/script.js"></script>
    
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!-- Script Section End (Not Visible) -->
  </body>
</html>
