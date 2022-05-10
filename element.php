<?php include "./include/header.php"; ?>

<?php include "./vendor/db.php" ?>

<?php

    $table__id = $_GET['plate_id'];

    $query = "SELECT * FROM catalog WHERE id = $table__id";

    $select_info_plate = mysqli_query($connection, $query);

    $row = mysqli_fetch_assoc($select_info_plate);

    $element_id = $row['id'];
    $element_title = $row['title'];
    $elemen_price = $row['price'];
    $elemen_description = $row['description'];
    $elemen_size = $row['size'];
    $elemen_color = $row['color'];
    $elemen_image = $row['image'];
    $elemen__category_id = $row['category_id'];

?>




<!---- ......WRAPPER----->
<div  class="wrapper">
    <?php include "./include/navigation.php"; ?>
<br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="element__plate__wrapper">
        <div class="element__plate_gallery">
            <div class="element__plate__image" style="background-image: url('./img/<?php echo $elemen_image ?>');"></div>
        </div>

        <div class="element__plate__description">
            <!--ELEMENT NAME--->
            <div class="element__plate__name">
            Супер тарелка номер <?php echo $element_id; ?>
            </div>
            <!-- ELEMENT PRICE--->
            <div class="element__plate__price">
                Стоимость товара: <span class="plate__price-span">
                <?php echo $elemen_price; ?>        
            </span> ₼
            </div>
            <?php
                echo $elemen_description;
            ?>
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
            l
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