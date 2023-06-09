<?php if(!empty($_SESSION['cart'])): ?>
    <?php foreach($_SESSION['cart'] as $id => $item): ?>
                <div data-id="<?php echo $id ?>" class="cartitem">
                    <div class="logoitem">
                    <img class="imgitem" src="../img/product/<?php echo $item['img'] ?>" alt="">
                    </div>
                    <div class="textitem">
                    <h3><?php echo $item['title'] ?></h3>
                        <div class="counter">
                            <p data-counter class="count"><?php echo $item['qty'] ?></p>
                        </div>
                        <p class="price__cart"><?php echo $item['price'] ?></p>
                    </div>
               </div>
               <?php endforeach; ?>
            <div class="title__total">Итого: <?php echo $_SESSION['cart.sum'] ?></div>
            <?php else: ?>
                <p>Корзина пуста...</p>
            <?php endif; ?>
            <div class="btn__buy__cart">
                <?php if (!empty($_SESSION['cart'])): ?>
                <button>Купить</button>
                <?php endif; ?>
            </div>