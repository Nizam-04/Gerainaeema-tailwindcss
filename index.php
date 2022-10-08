<?php
  // Koneksi ke database
  $conn = mysqli_connect("localhost", "root", "", "gerainaeema");

  // Ambil data dari tabel products / query data products
  $result = mysqli_query($conn, "SELECT * FROM products");
  
  // Ambil data (fetch) products dari object result
  // while($products = mysqli_fetch_assoc($result)) {
  //   var_dump($products);
  // }
?>
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
            <div class="py-4 px-3">
              <h3 class="text-base font-medium mb-2 truncate text-left">Haura Series Set</h3>
              <h3 class="text-base font-medium text-left">Rp350.000</h5>
            </div>
          </div>
        </div>
        <div class="w-1/2 px-4 lg:w-1/3">
          <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
            <img src="dist/img/ameera.jpeg" alt="Haura Series" class="w-full">
            <div class="py-4 px-3">
              <h3 class="text-base font-medium mb-2 truncate text-left">Ameera Series Set</h3>
              <h3 class="text-base font-medium text-left">Rp190.000</h5>
            </div>
          </div>
        </div>
        <div class="w-1/2 px-4 lg:w-1/3">
          <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
            <img src="dist/img/cadar-haura.jpeg" alt="Haura Series" class="w-full">
            <div class="py-4 px-3">
              <h3 class="text-base font-medium mb-2 truncate text-left">Cadar Haura</h3>
              <h3 class="text-base font-medium text-left">Rp15.000</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Popular Products Section End -->

  <!-- Testimony Section Start -->
  <section class="pt-16 pb-16 bg-white">
    <div class="w-full overflow-hidden">
      <div class="flex relative top-0 right-0 testimony-slide text-center">
        <div class="w-full flex-shrink-0">
          <img src="https://cf.shopee.co.id/file/82b03085c9d4981b59ba83ec0debc697_tn" class="block mx-auto rounded-full mb-6">
          <h4>i*****i, Via <a href="https://shopee.co.id/READY-HAURA-SERIES-SET-i.38109918.6340931988?xptdk=19177e01-1dd5-43ce-a551-0cbd7208da92" class="text-gerainaeema hover:text-dark hover:underline">Shopee</a></h4>
          <p>Alhamdulillah paketnya sdh nyampe, cmn 3 hari aja nyampe Sulawesi, gamisnyaa lucu :") <br> Kakak adminnya jg baik sekali responnya🥰🥺 Syukron katsiron yaa🙏😊</p>
        </div>
        <div class="w-full flex-shrink-0">
          <img src="https://cf.shopee.co.id/file/2f0c4eb6f839ae55d7e1ee17e91d3e09_tn" class="block mx-auto rounded-full mb-6">
          <h4>t*****6, Via <a href="https://shopee.co.id/CADAR-HAURA-i.38109918.3163773510?xptdk=9a269546-3222-47a9-a6c8-fdda4085f7be" class="text-gerainaeema hover:text-dark hover:underline">Shopee</a></h4>
          <p>kualitas baik, tdk ada yg Cacat atau kurang suatu apa pun, toko amanah, OK mantap👍🏻👍🏻👍🏻👍🏻👍🏻</p>
        </div>
        <div class="w-full flex-shrink-0">
          <img src="https://cf.shopee.co.id/file/25c25cfdfec41f46bb58d76b7b9ebd28_tn" class="block mx-auto rounded-full mb-6">
          <h4>rurohalmaghfiroh, Via <a href="https://shopee.co.id/BIG-SALE-AMEERA-SERIES-i.38109918.7949812694?sp_atk=8885af0b-ab61-459d-ae7b-6c31a5ccbb1f&xptdk=8885af0b-ab61-459d-ae7b-6c31a5ccbb1f" class="text-gerainaeema hover:text-dark hover:underline">Shopee</a></h4>
          <p>Alhamadulillah paket udah sampai, kualitas produk baik, original dan sesuai, recomended :) Terimakasih seler.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimony Section End -->

  <!-- Script Section Start (Not Visible) -->
    <!-- JS -->
    <script type="module" src="dist/js/script.js"></script>
    
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!-- Script Section End (Not Visible) -->
  </body>
</html>
