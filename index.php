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

  <!-- Script Section Start (Not Visible) -->
  <!-- JS -->
  <script type="module" src="dist/js/script.js"></script>
  
  <!-- Ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!-- Script Section End (Not Visible) -->
  </body>
</html>
