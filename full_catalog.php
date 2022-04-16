<?php include "./include/header.php"; ?>

<?php include "./vendor/db.php" ?>

<?php
$query = "SELECT * FROM catalog";
$result = mysqli_query($connection, $query);





?>

<!---- ......WRAPPER----->
<div  class="wrapper">
    <?php include "./include/navigation.php"; ?>
    <!-- DESC OF CATALOG-->
    <div style="margin-top: 70px" class="catalog__description">
            Каталог
    </div>
    <!-- MAIN CATALOG-->
    <div class="main__catalog__wrapper">

        <?php

        while ($row = mysqli_fetch_assoc($result)) {
            $table__id = $row['id'];
            $table_title = $row['title'];
            $table_price = $row['price'];
            $table_description = $row['description'];
            $table_size = $row['size'];
            $table_color = $row['color'];
            $table_image = $row['image'];
            $table__category_id = $row['category_id'];

        ?>
            <div class="catalog__wrapper__element">
                <div class="c__table__image">
                    <div class="c__table__image-image" style="background-image: url('./img/<?php echo $table_image ?>');">
                    </div>
                </div>

                <div class="c__table__wrapper">
                    <div class="c__table__title">
                        <?php echo $table_title; ?>
                    </div>
                    <div class="c_table__price_link_wrapper">
                        <div class="c__table__price">
                            <?php
                            echo $table_price;
                            ?>
                        </div>
                        <div class="c__table__link">
                            <a href="./element.php?tableid=<?php echo $table__id; ?>" class="c__table__link-a">
                                Заказать <?php echo $table__id  ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>




        <?php
        }

        ?>



    </div>
    <!--END MAIN CATALOG-->
    <br><br><br><br><br><br><br><br><br><br><br><br><br>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php include "./include/footer.php"; ?>

</div><!-- WRAPPER ENDS-->



<script src="./js/script.js"></script>
</body>

</html>
</body>

</html>