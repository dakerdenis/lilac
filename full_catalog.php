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
    <!-- SEARCH CATALOG-->
    <div class="catalog__search__wrapper">
        <!--SEARCH BLOCK DIV--->
        <div class="searc__block__wrapper">
            <!--CATEGORIES-->
            <div class="search__block_categories">
                    <div class="search__block_categories-title">
                        CATEGORIES
                    </div>
                    <div class="search__block_categories-list">
                        <p class="search__block_categories-p">
                            Тарелки
                        </p>
                        <p class="search__block_categories-p">
                            Кружки
                        </p>
                        <p class="search__block_categories-p">
                            Игрушки
                        </p>
                        <p class="search__block_categories-p">
                            Вазы
                        </p>
                    </div>
            </div>
            <!--SORT BY--->
            <div class="search__sort__by">

            </div>
            <!--TAGS-->
            <div class="search__tags">

            </div>

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

            <div class="catalog__wrapper__image-div" style="background-image: url('./img/<?php echo $table_image ?>');">
            </div>


        <div class="c__table__wrapper">
                <div class="c_plate__title_price_wrapper">
                    <div class="c_plate__title">
                        <?php
                            echo $table_title;
                        ?>
                    </div>
                    <div class="c_plate__price">
                        <?php
                            echo $table_price . " ₼" ;
                        ?>
                    </div>
                </div>

                <div class="c_plate__link_button">
                    <a href="" class="c_table_link_button-a">ЗАКАЗАТЬ</a>
                </div>
        </div>

    </div>
<?php
}
?>
</div>
    <!--END MAIN CATALOG-->   


</div>

     
    <?php include "./include/footer.php"; ?>

</div><!-- WRAPPER ENDS-->



<script src="./js/script.js"></script>
</body>

</html>
</body>

</html>