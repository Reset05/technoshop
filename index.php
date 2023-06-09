<?php
error_reporting(-1);
session_start();
require_once 'core/db.php';
require_once 'core/funcs.php';

$products = get_products();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/reset.css">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>

    <title>TechnoShop</title>
</head>
<body>
    <!-- Вход-->
    <div class="modal-background none" id="modal-bg">
        <div class="modal__window modal__window__signin none" id="modal-signin">
            <div class="container__window">
                <div class="title__modal">
                    <h2>Вход</h2>
                </div>
                <div class="signin">
                    <div class="exit">
                        <i class="fa-solid fa-xmark btn-exit"></i>
                    </div>
                    <form action="core/signin.php" method="post">
                        <div class="block__form">
                            <input class="inp__form" required type="text" name="login" id="">
                            <p class="text__form">Логин</p>
                        </div>

                        <div class="block__form">
                            <input class="inp__form" required type="password" name="pass" id="">
                            <p class="text__form">Пароль</p>
                        </div>

                        <p class="p__submit"><input class="inp__submit" type="submit" value="Войти"></p>
                    </form>

                    <p class="text__signup">Если у вас нет аккаунат, можете его <a class="link__reg" id="btn-reg">зарегестрировать.</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Регистрация -->
    <section class="modal__window modal__window__reg none" id="modal-signup">
        <div class="container__window">
            <div class="title__modal">
                <h2>Регистрация</h2>
            </div>
            <div class="signin">
                <div class="exit__reg">
                    <i class="fa-solid fa-xmark btn-exit"></i>
                </div>
                <form action="core/signup.php" method="post">
                    <div class="block__form">
                        <input class="inp__form" required type="text" name="login" id="">
                        <p class="text__form">Логин</p>
                    </div>

                    <div class="block__form">
                        <input class="inp__form" required type="password" name="pass" id="">
                        <p class="text__form">Пароль</p>
                    </div>

                    <div class="block__form">
                        <input class="inp__form" required type="text" name="email" id="inp-reg-email">
                        <p class="text__form">Почта</p>
                    </div>
                    <div class="block__error none" >
                        <p>Некорректный Email</p>
                    </div>

                    <p class="p__submit"><input id="btn-submit-reg" class="inp__submit" type="submit" value="Войти"></p>
                </form>

                <p class="text__signup">Если у вас есть аккаунат, можете <a class="link__login" id="btn-log">войти в него.</a></p>
            </div>
        </div>
    </section>

<!-- Корзина -->
<section class="carts none cart-modal" id="cart-modal">
<div class="container container__cart">
            <div class="exit__cart"><i class="fa-regular fa-circle-xmark"></i></div>
            <h3 class="title__cart">Корзина</h3>
            <div class="container-cartitem">
                <div class="modal-cart-content">

                </div>
</div>
</div>
</div>
</section>

    <!-- Меню -->

    <section class="menu">
        <!-- Меню с ссылками на разделы сайта -->
        <div class="container container__menu">

            <div class="logo__category">
                <div class="logo">
                    <a href="index.php"><h2 class="logo__text">TechnoShop</h2></a>
                </div>
                <div class="category__menu">
                    <a class="link__menu light" href="">Главная</a>
                    <a class="link__menu" href="#footer__contact">Контакты</a>
                    <a class="link__menu" href="pages/shop.php">Магазин</a>
                    <a class="link__menu" href="#news">Новости</a>
                </div>
            </div>

            <div class="info"> 
                <p class="info__text"><span><i class="fa-regular fa-envelope"></i> info@Tshop.com</span> | <span><i class="fa-solid fa-phone"></i> +7(900)000-00-00 </span></p>
            </div>
        </div>

        <!-- Меню с поиском -->
        <div class="container container__search">

            <div class="shop__category">
                <a class="link__sc" href="pages/shop.php"><i class="fa-solid fa-bars-staggered"></i>Категории Магазина</a>
            </div>

           <div class="form">
           <form method="GET" action="handler/search.php">
                    <input class="inp__search" type="text" name="query" id="" placeholder="Введите здесь">
                    <button class="btn__submit" type="submit">Поиск <i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
           </div>

           <div class="login__cart">
           <?php
if (isset($_SESSION['login'])) {
    $login = $_SESSION['login'];
    echo '<a class="link__login link__logacc" href=""><i class="fa-regular fa-user"></i> <span class="login__text">' . $login . '</span></a>';
    echo '<form class="logout none" method="post" action="core/logout.php"><button type="submit" name="logout">Выход</button></form>';
  } else {
    echo '<a class="link__login" href=""><i class="fa-regular fa-user"></i> <span class="login__text" id="btn-open">Вход / Регистрация</span></a>';
  }
  ?>
                <span> |  </span>
                <a id="get-cart" class="link__cart" href=""><i class="fa-solid fa-cart-shopping"></i></a>
           </div>

        </div>
    </section>

<main>

    <!-- Баннер с категориями магазина -->
    <section class="banner">

        <div class="container container__banner">

            <div class="block__category">
                <a href="handler/search-link-category.php?category=2" name="category[]"><i class="fa-solid fa-computer"></i> Компьютеры и ноутбуки <span><i class="fa-solid fa-angle-right"></i></span></a>
                <a href="handler/search-link-category.php?category=1" name="category[]"><i class="fa-solid fa-mobile"></i> Смартфоны и фототехника <span><i class="fa-solid fa-angle-right"></i></span></a>
                <a href="handler/search-link-category.php?category=3" name="category[]"><i class="fa-solid fa-microchip"></i> Комплектующие для ПК <span><i class="fa-solid fa-angle-right"></i></span></a>
                <a href="handler/search-link-category.php?category=4" name="category[]"><i class="fa-solid fa-tv"></i> ТВ <span><i class="fa-solid fa-angle-right"></i></span></a>
                <a href="handler/search-link-category.php?category=5" name="category[]"><i class="fa-solid fa-gamepad"></i></i> Консоли <span><i class="fa-solid fa-angle-right"></i></span></a>
            </div>

            <div class="block__banner">
  <div class="slider">
    <?php
      $sql = "SELECT img_banner FROM banner";
      $result = mysqli_query($mysqli, $sql);

      while ($product = mysqli_fetch_assoc($result)) {
        echo '<div class="slider__item">
                <img src="img/banner/' . $product['img_banner'] . '" alt="Slide">
              </div>';
      }
    ?>
  </div>
</div>
 </div>


    </section>

    <!-- Секция с популярным в магазине -->
    <section class="popular">

        <div class="container container__popular">

            <h2>Популярное</h2>
            
            <div class="block__cards">

            <?php if(!empty($products)): ?>
                <?php foreach($products as $product): ?>
                <div class="card__border">
                    <div class="card">
                        <div class="img__card">
                        <?php if($product['sale']): ?>
                            <div class="sale">
                                <p>SALE</p>
                            </div>
                            <?php endif; ?>
                            <img class="img__card" src="img/product/<?= $product['img'] ?>" alt="">
                        </div>
                        <div class="block__title">
                        <a href="pages/product.php?id=<?= $product['id'] ?>"><?= $product['title'] ?></a>
                        </div>
                        <div class="block__desc">
                            <p><?= $product['content'] ?></p>
                        </div>
                        <div class="block__score">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <div class="block__curr">
                            <div class="block__price">
                                <?php if ($product['old_price']): ?>
                                <p class="first__price"><?= $product['old_price'] ?></p>
                                <?php endif; ?>
                                <p class="last__price"><?= $product['price'] ?></p>
                            </div>
                            <a href="?cart=add&id=<?= $product['id']?>" class="btn__buy add-to-cart" data-id="<?= $product['id']?>"><i class="fa-solid fa-cart-shopping"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
            </div>
        </div>

    </section>

    <!-- Секция с последними новостями магазина -->
    <section id="news" class="news">

        <div class="container container__news">

            <h2>Последние новости</h2>

            <div class="block__news">

               <?php
$stmt = $pdo->query("SELECT * FROM news ORDER BY created_at DESC LIMIT 5");
$news = $stmt->fetchAll();
foreach ($news as $item) {
    echo '<div class="card__news">';
    echo '<div class="img__news">';
    echo '<img class="img__news" src="../img/news/' . $item['image'] . '" alt="">';
    echo '</div>';
    echo '<div class="block__data">';
    echo '<a href="pages/news.php?id=' . $item['id'] . '">' . $item['created_at'] . '</a>';
    echo '</div>';
    echo '<div class="desc__news">';
    echo '<p>' . $item['description'] . '</p>';
    echo '</div>';
    echo '</div>';
}
               ?>

            </div>

        </div>

    </section>

</main>

<footer>
    
    <!-- Контакты -->
    <div id="footer__contact" class="container container__contact">
        <div class="logo">
            <a href="index.html"><h2 class="logo__text">TechnoShop</h2></a>
        </div>
        <div class="contacts">
            <span><i class="fa-regular fa-envelope"></i> info@Tshop.com</span>
            <span><i class="fa-solid fa-phone"></i> +7(900)000-00-00 </span>
        </div>
    </div>

</footer>


    <script>
       let sliderItems = document.querySelectorAll('.slider__item');
let currentSlide = 0;

function showSlide(n) {
  if (n < 0) {
    currentSlide = sliderItems.length - 1;
  } else if (n >= sliderItems.length) {
    currentSlide = 0;
  }
  
  for (let i = 0; i < sliderItems.length; i++) {
    sliderItems[i].classList.remove('active');
  }
  
  sliderItems[currentSlide].classList.add('active');
  
  currentSlide++;
  
  setTimeout(function() {
    showSlide(currentSlide);
  }, 5000); // интервал смены слайдов в миллисекундах
}

showSlide(currentSlide);
    </script>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/e841cfff06.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/cart.js"></script>
    <script src="js/main.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/valuesCheck.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

</body>
</html>