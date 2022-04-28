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
                        КАТЕГОРИИ
                    </div>
                    <div class="search__block_categories-list">
                        <p class="search__block_categories-p">
                            <a href="#"> <span>Тарелки </span> <span class="arrow__span">&#10095;</span></a>
                        </p>
                        <p class="search__block_categories-p">
                            <a href="#"><span>Кружки</span> <span class="arrow__span">&#10095;</span></a>
                        </p>
                        <p class="search__block_categories-p">
                            <a href="#"><span>Игрушки</span> <span class="arrow__span">&#10095;</span></a>
                        </p>
                        <p class="search__block_categories-p">
                            <a href="#"><span>Вазы</span> <span class="arrow__span">&#10095;</span></a>
                        </p>
                    </div>
            </div>
            <form action="">
            <!--SORT BY--->
            <div class="search__sort__by">

                <div class="search__sort__by-name">
                        Сортировка
                    </div>
                    <div class="search__sort__by-container">
                        <select name="sort_by" id="">
                        <option value="">Сортировать</option>
                            <option value="">Сортировка по цене: от низкого к высокому</option>
                            <option value="">Сортировка по цене: от высокому к низкому</option>
                            <option value="">Сортировка по дате добавления</option>
                            <option value="">Сортировка по количеству заказов</option>
                        </select>
                    </div>

            </div>
            <!--colors-->
            <div class="search__colors">

            </div>
            </form>
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