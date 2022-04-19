<?php include "./include/header.php"; ?>

<?php include "./vendor/db.php" ?>

<?php

    $table__id = $_GET['tableid'];



?>




<!---- ......WRAPPER----->
<div  class="wrapper">
    <?php include "./include/navigation.php"; ?>
<br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="element__plate__wrapper">
        <div class="element__plate_gallery">
            
        </div>

        <div class="element__plate__description">
            <!--ELEMENT NAME--->
            <div class="element__plate__name">
            Супер тарелка номер 1
            </div>
            <!-- ELEMENT PRICE--->
            <div class="element__plate__price">
                Стоимость товара: <span class="plate__price-span">24 </span> ₼
            </div>
            <!--- ELEMENT CHARACTERISTICS--->
            <div class="element__characters_wrapper">
                <!-- ELEMENT TYPE--->
                <div class="element__type__fromDB">
                    Тип товара: <span class="element__typeof-span"> тарелки</span>
                </div>
                <!--element SIZE-->
                <div class="element__plate__size">
                    25 на 25 сантиметров
                </div>
                <!--ELEMENT COLORS--->
                <div class="element__used_colors">
                    Используемые цвета: <span class="element__used_colors-span">Красный, синий, зеленый</span>
                </div>
                <!-- ELEMENT USED MATERIAL-->
                <div class="element__used__material">
                    Используемые материалы: <span class="element__used__material-span">Фарфор, натуральные краски, глина</span>
                </div>
                <!--ELEMENT KLEIN DESC--->
                <div class="element__small__desc">
                    <p class="element__small__desc-p">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque id nulla suscipit natus debitis nobis laboriosam labore explicabo. Autem saepe sed eum culpa cupiditate sapiente maxime explicabo debitis nisi harum!
                    </p>
                </div>
            </div>
        </div>

        <div class="element__plate__buying-option">

        </div>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <?php include "./include/footer.php"; ?>
</div><!-- WRAPPER ENDS-->



<script src="./js/script.js"></script>
</body>

</html>
</body>

</html>