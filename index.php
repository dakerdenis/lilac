<?php include "./include/header.php"; ?>
<?php include "./include/navigation.php"; ?>


<!---- ......WRAPPER----->
<div class="wrapper">

    <!---FIRST BLOCK PROMO NAME AND PHOTO--->
    <div class="block__1-name">
        <!-- DIV WITH IMAGE--->
        <div class="block__name__wrapper">
            <!-- DIV WITH NAME AND DESC-->
            <div class="block__name__text">
                <span class="block__anme-span block__name__text-name">Lilac handmade</span>
                <span class="block__anme-span block__name__text-des">♥ Подарки ручной работы ♥</span>
                <span class="block__anme-span block__name__text-by">By Narmina Huseynli</span>
            </div>
        </div>
    </div>
    <!----------------------------------------->
    <!-- THREE BLOCKS PROMO --->
    <div class="block__2-promo">
        <!-- IMAGES-->
        <div class="block__2-promo-wrapper">
            

            <div class="block__2-promo- block__2-promo-1">
                <div class="block__2-promo-1-image">
                    <i class="fa-solid fa-hand-holding-heart"></i>
                </div>

            </div>

            <div class="block__2-promo- block__2-promo-2">
                <div class="block__2-promo-1-image">
                    <i class="fa-solid fa-award"></i>
                </div>

            </div>

            <div class="block__2-promo- block__2-promo-3">
                <div class="block__2-promo-1-image">
                    <i class="fa-solid fa-paintbrush"></i>
                </div>

            </div>
        </div>

        <!-- text-->
        <div class="block__2-promo-wrapper">

            

            <div class="block__2-promo-4 block__2-promo-1">

                <div class="block__2-promo-1-text">
                    Все подарки созданы в ручную
                </div>
            </div>

            <div class="block__2-promo-4 block__2-promo-2">

                <div class="block__2-promo-1-text">
                    Лучшее качество
                </div>
            </div>

            <div class="block__2-promo-4 block__2-promo-3">

                <div class="block__2-promo-1-text">
                    Уникальный дизайн специально по вашему заказу
                </div>
            </div>
        </div>
    </div>

    <!----------------------------------------->
    <div class="block__photo__1">
        <div class="block__photo__1-text">
            <span>Подарок созданный в ручную - уникальный.</span>
        </div>
    </div>



    
    <!--- ABOUT US AND WHAT WE DO ---->
    <div class="block__3-wedo">
        <div class="block__3-wedo-name">О нас</div>
        <div class="block__3-wedo_wrapper">
            <div class="block__3-wedo-1">
                <div class="block__3-wedo-1-imag"></div>
            </div>
            <div class="block__3-wedo-2" style="">
                <p>
                    Декупаж (фр. découpage — «резка») — техника декорирования различных предметов, основанная 
                    на присоединении рисунка, картины или орнамента (обычно вырезанного) к предмету и 
                    далее покрытии полученной композиции лаком ради сохранности, долговечности и особенного 
                    визуального эффекта. 
                    </p>
                <p>
                Я увлекаюсь этим видом искуства уже долгое время и это увлечение переросло в 
                    нечто большее. Предметы интерьера, стаканы, тарелки ,различный декор, вазы - 
                    декупаж можно применить к огромному количеству вещей вокруг нас что бы сделать их 
                    безумно красивыми. 
                </p>
                <p>
                Сейчас ,и вы можете оценить этот вид творчества во всей красе, и я создам для вас 
                    прекрасный подарок который будет радовать вас и ваших близких ♥
                </p>
               
            </div>
        </div>

    </div>

    <!-- CATALOGUE OF ELEMENTS  --->
    <div class="block__4-catalogue">
            <?php
                include "./include/catalog.php";
            ?>
    </div>

    <!--- CONNECT WITH US BLOCK--->
    <div class="block__5-connect">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum quis modi suscipit doloremque facere porro esse numquam unde harum minima molestiae, quos magnam veritatis velit! Ea consectetur tempore veritatis rerum.
    </div>



    <div class="block__footer__end">
    Lorem
</div>
</div><!-- WRAPPER ENDS-->

<script src="https://kit.fontawesome.com/5480a04e88.js" crossorigin="anonymous"></script>
  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>
</body>
</html>