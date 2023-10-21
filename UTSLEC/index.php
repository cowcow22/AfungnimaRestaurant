<?php
session_start();
require('db.php');

$jenismenu = [
  "appetizer" => "Appetizer",
  "main course" => "Main Course",
  "dessert" => "Dessert",
  "seafood" => "Sea Food",
  "vegetables" => "Vegetables",
  "drink" => "Drink"
];

$sql = "SELECT role FROM login";
$stmt = $db->prepare($sql);
$stmt->execute();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Afungnima Restaurant IF330-B Kelompok 3</title>
  <meta name="title" content="Afungnima Restaurant">
  <meta name="description" content="This is a Afungnima Restaurant">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="preload" as="image" href="./assets/images/hero-slider-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-3.jpg">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />

</head>

<style>
  .menu-details {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease;
  }

  .menu-details-active {
    max-height: 1000px;
    transition: max-height 2s ease;
  }
</style>

<body id="top">
  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">Afungnima</p>
  </div>
  <header class="header" style="padding-block: 0px;" data-header>
    <div class="container">
      <a href="index.php" class="logo">
        <h2 class="headline-1 section-title">Afungnima</h2>
      </a>
      <nav class="navbar" data-navbar>
        <button class="close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>
        <ul class="navbar-list">
          <li class="navbar-item">
            <a href="index.php" class="navbar-link hover-underline active">
              <div class="separator"></div>
              <span class="span">Home</span>
            </a>
          </li>
          <li class="navbar-item">
            <a href="#sectionkategori" class="navbar-link hover-underline">
              <div class="separator"></div>
              <span class="span">Menus</span>
            </a>
          </li>
          <li class="navbar-item">
            <a href="aboutus.php" class="navbar-link hover-underline">
              <div class="separator"></div>
              <span class="span">About Us</span>
            </a>
          </li>
        </ul>
      </nav>
      <a href="loginregister.php" class="btn btn-secondary mt-3 mb-3">
        <span class="text text-1">Login</span>
        <span class="text text-2" aria-hidden="true">Login</span>
      </a>
      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>
      <div class="overlay" data-nav-toggler data-overlay></div>
    </div>
  </header>
  <main>
    <article>
      <section class="hero text-center" aria-label="home" id="home">
        <ul class="hero-slider" data-hero-slider>
          <li class="slider-item active" data-hero-slider-item>
            <div class="slider-bg">
              <img src="./assets/images/hero-slider-1.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>
            <p class="label-2 section-subtitle slider-reveal">Traditional & Hygine</p>
            <h1 class="display-1 hero-title slider-reveal">
              For the love of <br>
              delicious food
            </h1>
            <p class="body-2 hero-text slider-reveal">
              Come with family & feel the joy of mouthwatering food
            </p>
            <a href="loginregister.php" class="btn btn-primary slider-reveal">
              <span class="text text-1">Register</span>
              <span class="text text-2" aria-hidden="true">Register</span>
            </a>
          </li>
          <li class="slider-item" data-hero-slider-item>
            <div class="slider-bg">
              <img src="./assets/images/hero-slider-2.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>
            <p class="label-2 section-subtitle slider-reveal">delightful experience</p>
            <h1 class="display-1 hero-title slider-reveal">
              Flavors Inspired by <br>
              the Seasons
            </h1>
            <p class="body-2 hero-text slider-reveal">
              Feel the Flavors inside your mouth
            </p>
            <a href="loginregister.php" class="btn btn-primary slider-reveal">
              <span class="text text-1">Register</span>
              <span class="text text-2" aria-hidden="true">Register</span>
            </a>
          </li>
          <li class="slider-item" data-hero-slider-item>
            <div class="slider-bg">
              <img src="./assets/images/hero-slider-3.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>
            <p class="label-2 section-subtitle slider-reveal">amazing & delicious</p>
            <h1 class="display-1 hero-title slider-reveal">
              Where every flavor <br>
              tells a story
            </h1>
            <p class="body-2 hero-text slider-reveal">
              Tell your family and your friend <br>
              Here is the most delicious Restaurant
            </p>
            <a href="loginregister.php" class="btn btn-primary slider-reveal">
              <span class="text text-1">Register</span>
              <span class="text text-2" aria-hidden="true">Register</span>
            </a>
          </li>
        </ul>
        <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
          <ion-icon name="chevron-back"></ion-icon>
        </button>
        <button class="slider-btn next" aria-label="slide to next" data-next-btn>
          <ion-icon name="chevron-forward"></ion-icon>
        </button>
      </section>
      <section class="section service bg-black-10 text-center" aria-label="service" id="sectionkategori">
        <div class="container">
          <p class="section-subtitle label-2">Flavors For Royalty</p>
          <h2 class="headline-1 section-title">We Offer Top Notch</h2>
          <p class="section-text">
            Our Menu Category
          </p>
          <ul class="grid-list">
            <li>
              <div class="service-card">
                <a href="#sectionappetizer" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="https://st4.depositphotos.com/3860131/24657/i/450/depositphotos_246574494-stock-photo-deviled-eggs-stuffed-eggs-filled.jpg" alt="Makanan Appetizer" class="h-full w-full object-cover object-center">
                  </figure>
                </a>
                <div class="card-content">
                  <h3 class="title-4 card-title">
                    <a href="#sectionappetizer">Appetizers</a>
                  </h3>
                  <a href="#sectionappetizer" class="btn-text hover-underline label-2">View Menu</a>
                </div>
              </div>
            </li>
            <li>
              <div class="service-card">
                <a href="#sectionmain course" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="https://st2.depositphotos.com/3210553/9823/i/450/depositphotos_98232150-stock-photo-pan-fried-salmon-with-tender.jpg" alt="Makanan Utama" class="h-full w-full object-cover object-center">
                  </figure>
                </a>
                <div class="card-content">
                  <h3 class="title-4 card-title">
                    <a href="#sectionmain course">Main Course</a>
                  </h3>
                  <a href="#sectionmain course" class="btn-text hover-underline label-2 mb-7">View Menu</a>
                </div>
              </div>
            </li>
            <li>
              <div class="service-card">
                <a href="#sectiondessert" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="https://st.depositphotos.com/1744806/2387/i/450/depositphotos_23875029-stock-photo-dessert-cheesecake.jpg" alt="Makanan Penutup" class="h-full w-full object-cover object-center">
                  </figure>
                </a>
                <div class="card-content">
                  <h3 class="title-4 card-title">
                    <a href="#sectiondessert">Dessert</a>
                  </h3>
                  <a href="#sectiondessert" class="btn-text hover-underline label-2">View Menu</a>
                </div>
              </div>
            </li>
            <li>
              <div class="service-card">
                <a href="#sectionseafood" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="https://st.depositphotos.com/1158226/2406/i/450/depositphotos_24068577-stock-photo-shrimps-fried-on-pan-with.jpg" alt="Seafood" class="h-full w-full object-cover object-center">
                  </figure>
                </a>
                <div class="card-content">
                  <h3 class="title-4 card-title">
                    <a href="#sectionseafood">Seafood</a>
                  </h3>
                  <a href="#sectionseafood" class="btn-text hover-underline label-2">View Menu</a>
                </div>
              </div>
            </li>
            <li>
              <div class="service-card">
                <a href="#sectionvegetables" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="https://st.depositphotos.com/1018248/2279/i/450/depositphotos_22790206-stock-photo-vegetarian-food-on-white-dish.jpg" alt="Sayuran" class="h-full w-full object-cover object-center">
                  </figure>
                </a>
                <div class="card-content">
                  <h3 class="title-4 card-title">
                    <a href="#sectionvegetables">Vegetables</a>
                  </h3>
                  <a href="#sectionvegetables" class="btn-text hover-underline label-2">View Menu</a>
                </div>
              </div>
            </li>
            <li>
              <div class="service-card">
                <a href="#sectiondrink" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="https://st2.depositphotos.com/1761693/11003/i/450/depositphotos_110035832-stock-photo-assortment-of-iced-fruit-drinks.jpg" alt="Minuman" class="h-full w-full object-cover object-center">
                  </figure>
                </a>
                <div class="card-content">
                  <h3 class="title-4 card-title">
                    <a href="#sectiondrink">Drinks</a>
                  </h3>
                  <a href="#sectiondrink" class="btn-text hover-underline label-2">View Menu</a>
                </div>
              </div>
            </li>
          </ul>
          <img src="./assets/images/shape-1.png" width="246" height="412" loading="lazy" alt="shape" class="shape shape-1 move-anim">
          <img src="./assets/images/shape-2.png" width="343" height="345" loading="lazy" alt="shape" class="shape shape-2 move-anim">
        </div>
      </section>
      <br>
      <div class="container">
        <p class="section-subtitle text-center label-2">Special Selection</p>
        <h2 class="headline-1 section-title text-center">Delicious Menu</h2>
        <br>
        <?php foreach ($jenismenu as $key => $value) : ?>
          <section id="section<?= $key ?>">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
              <h2 class="text-5xl font-bold text-white"><?= $value ?></h2>
              <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
                <?php
                $sql = "SELECT * FROM daftarmenu WHERE jenismenu = ?";
                $stmt = $db->prepare($sql);
                $stmt->execute([$key]);

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) :
                ?>
                  <div style="display: flex; flex-direction:column">
                    <div class="group relative" data-aos="zoom-in" onclick="toggleDetails(<?= $row['idmenu'] ?>)">
                      <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                        <?php echo "<img src='fotomenu/" . $row["fotomenu"] . "' class='h-full w-full object-cover object-center'>"; ?>
                      </div>
                      <h3 class="mt-3 text-sm text-white mb-5">
                        <p class="text-2xl font-semibold text-white my-1"><?= $row['namamenu'] ?></p>
                      </h3>
                    </div>
                    <div id="details_<?= $row['idmenu'] ?>" class="menu-details">
                      <p class="text-base text-white my-1"><?= $row['deskripsimenu'] ?></p>
                      <br>
                      <div style="display: flex; justify-content: space-between;">
                        <p class="text-base font-semibold text-white my-1">Harga: Rp<?= $row['hargamenu'] ?></p>
                        <button type="button" onclick="pesan(<?= $row['idmenu'] ?>)" class="flex gap-3 mb-5 cursor-pointer text-white font-semibold bg-gradient-to-r from-gray-800 to-black px-7 py-3 rounded-full border border-gray-600 hover:scale-105 duration-200 hover:text-gray-500 hover:border-gray-800 hover:from-black hover:to-gray-900">
                          Pesan
                        </button>
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>
              </div>
            </div>
          </section>
          <br>
        <?php endforeach; ?>
    </article>
  </main>
  <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>
  <script>
    function login() {
      window.location.href = 'loginregister.php';
    }

    function register() {
      window.location.href = 'loginregister.php';

    }

    function toggleDetails(idmenu) {
      const detailsElement = document.getElementById(`details_${idmenu}`);
      detailsElement.classList.toggle('menu-details-active');
    }

    function pesan(idmenu) {
      <?php if (isset($_SESSION['user_id']) && $role = 'user') : ?>
        console.log(`Tambahkan menu dengan ID ${idmenu} ke keranjang pemesanan`);
      <?php else : ?>
        window.location.href = 'loginregister.php';
      <?php endif; ?>
    }
  </script>
  <script src="./assets/js/script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>