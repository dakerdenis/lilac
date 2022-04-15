<?php include "./include/header.php"; ?>



<!---- ......WRAPPER----->
<div class="wrapper">
<?php include "./include/navigation.php"; ?>

    <!---FIRST BLOCK PROMO NAME AND PHOTO--->
    <div class="block__1-name">
        <!-- DIV WITH IMAGE--->
        <div class="block__name__wrapper">
            <!-- DIV WITH NAME AND DESC-->
            <div class="block__name__text">
                <span class="block__anme-span block__name__text-name">Lilac handmade</span>
                <span class="block__anme-span block__name__text-des"> Подарки ручной работы </span>
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
        <div class="connect__with__me"> 
            <p class="connect__p">
            Свяжитесь со мной !
            </p>
        </div>

        <div class="connect__with__me_wrapper">
            <div class="connect__with_me_1">
                <p class="connect__with__me_1-p">
                Длительность выполнения заказа зависит от сложности работы, <br>  от 1 до 3х дней.
                </p>
                <p class="connect__with__me_1-p">
                Вы можете выбрать что то из имеющегося в каталоге,либо заказать уникальный дизайн и я воплощу это в жизнь.
                </p>
                <p class="connect__with__me_1-p2">
                Доставка по метро абсолютно бесплатно !
                </p>
                <img src="./images_page/21.jpg" alt="" class="connect__with_me__img">
            </div>

            
            <div class="connect__with_me_1">
            <p class="connect__with__me_1-p">
            Свяжитесь со мной любым удобным для вас способом, либо сделайте заказ напрямую с нашего каталога !
                </p>
            <p class="connect__with__me_1-p3">
            +994 50 323 54 22
                </p>
                <p class="connect__with__me_1-p4">
                lilac@daker.website
                </p>

                <div class="image__wrapper__contact_with_me">
                        <a href="" class="connect__with__me_1-link">
                            <img src="./images_page/insta.png" alt="">
                        </a>
                        <a href="" class="connect__with__me_1-link">
                            <img src="./images_page/Icon-WhatsApp-PNG.png" alt="" srcset="">
                        </a>
                </div>
            </div>
        </div>

    </div>


    <?php include "./include/footer.php"; ?>

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

<script src="./js/script.js"></script>
</body>
</html>