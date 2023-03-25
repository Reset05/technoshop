<?php
error_reporting(-1);
session_start();
include_once '../core/db.php'; 
include_once '../core/funcs.php';
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
    <link rel="stylesheet" href="/style/style.css">
    <link rel="stylesheet" href="/style/reset.css">
    <title>TechnoShop</title>
</head>
<body>

    <!-- Вход-->
    <section class="modal__window modal__window__signin none">
        <div class="container__window">
            <div class="title__modal">
                <h2>Вход</h2>
            </div>
            <div class="signin">
                <div class="exit">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <form action="" method="post">
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

                <p class="text__signup">Если у вас нет аккаунат, можете его <a class="link__reg" href="">зарегестрировать.</a></p>
            </div>
        </div>
    </section>

    <!-- Регистрация -->
    <section class="modal__window modal__window__reg none">
        <div class="container__window">
            <div class="title__modal">
                <h2>Регистрация</h2>
            </div>
            <div class="signin">
                <div class="exit__reg">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <form action="" method="post">
                    <div class="block__form">
                        <input class="inp__form" required type="text" name="login" id="">
                        <p class="text__form">Логин</p>
                    </div>

                    <div class="block__form">
                        <input class="inp__form" required type="password" name="pass" id="">
                        <p class="text__form">Пароль</p>
                    </div>

                    <div class="block__form">
                        <input class="inp__form" required type="text" name="pass" id="">
                        <p class="text__form">Почта</p>
                    </div>

                    <p class="p__submit"><input class="inp__submit" type="submit" value="Войти"></p>
                </form>

                <p class="text__signup">Если у вас есть аккаунат, можете <a class="link__login" href="">войти в него.</a></p>
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
    
    <section class="menu">
        <!-- Меню с ссылками на разделы сайта -->
        <div class="container container__menu">

            <div class="logo__category">
                <div class="logo">
                    <a href="/index.php"><h2 class="logo__text">TechnoShop</h2></a>
                </div>
                <div class="category__menu">
                    <a class="link__menu" href="">Главная</a>
                    <a class="link__menu" href="">Контакты</a>
                    <a class="link__menu" href="">Магазин</a>
                    <a class="link__menu" href="">Новости</a>
                </div>
            </div>

            <div class="info"> 
                <p class="info__text"><span><i class="fa-regular fa-envelope"></i> info@Tshop.com</span> | <span><i class="fa-solid fa-phone"></i> +7(900)000-00-00 </span></p>
            </div>
        </div>

        <!-- Меню с поиском -->
        <div class="container container__search">

            <div class="shop__category">
                <a class="link__sc" href=""><i class="fa-solid fa-bars-staggered"></i>Категории Магазина</a>
            </div>

           <div class="form">
           <form method="GET" action="../handler/search.php">
                        <input class="inp__search" type="text" name="filter" id="" placeholder="Введите здесь">
                        <button class="inp__submit" type="submit">Поиск товара</button>
                    </form>
           </div>

           <div class="login__cart">
                <a class="link__login" href=""><i class="fa-regular fa-user"></i> <span class="login__text">Вход / Регистрация</span></a>
                <span> |  </span>
                <a id="get-cart" class="link__cart" href=""><i class="fa-solid fa-cart-shopping"></i></a>
           </div>

        </div>
    </section>


<main>
    <section>
        <div class="container container__product">

            <!-- Фото с товаром -->
            <div class="photo__product">
                <div class="oversize__photo">
                    <img src="" alt="">
                </div>
                <div class="minisize__photo">
                    <div class="img"></div>
                    <div class="img"></div>
                    <div class="img"></div>
                </div>
            </div>

            <div class="desc__product">
                <div class="title__product">
                    <h2>Title</h2>
                </div>
                <div class="score__product">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <div class="desc">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto facilis nostrum fugit suscipit culpa porro perferendis laborum rem odit voluptatibus tempore blanditiis quaerat in est, voluptates expedita dicta aut repellat.</p>
                </div>
                <div class="block__buy">
                    <div class="price__product">
                        <p>$300</p>
                    </div>
                    <button class="btn__buy__product">Купить</button>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container container__characteristic">
            <div class="header">
                <a href="">Характеристики</a>
                <span> | </span>
                <a href="">Отзывы</a>
            </div>
            <div class="describe">
                <div class="type__desc">
                    <h3>Бренд</h3>
                    <p>Название бренда</p>
                </div>
                <div class="type__desc">
                    <h3>Тип</h3>
                    <p>Название типа</p>
                </div>
                <div class="type__desc">
                    <h3>Модель</h3>
                    <p>Название модели</p>
                </div>
                <div class="type__desc">
                    <h3>Цвет</h3>
                    <p>Название цвета</p>
                </div>
                <div class="type__desc">
                    <h3>Гарантия</h3>
                    <p>Срок гарантии</p>
                </div>
            </div>
        </div>
    </section>

</main>

<footer>
    
    <!-- Контакты -->
    <div class="container container__contact">
        <div class="logo">
            <a href="/index.html"><h2 class="logo__text">TechnoShop</h2></a>
        </div>
        <div class="contacts">
            <span><i class="fa-regular fa-envelope"></i> info@Tshop.com</span>
            <span><i class="fa-solid fa-phone"></i> +7(900)000-00-00 </span>
        </div>
    </div>

</footer>


    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/e841cfff06.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/cart.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/modal.js"></script>

</body>
</html>