<?php include "./include/header.php"; ?>

<?php include "./vendor/db.php" ?>

<?php
$query = "SELECT * FROM catalog";
$result = mysqli_query($connection, $query);





?>

<!---- ......WRAPPER----->
<div class="wrapper">
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
                    <div class="custom-select" style="width: 100%;">
                        <select>
                            <option value="0">Сортировать по:</option>
                            <option value="0">Сортировать по:</option>
                            <option value="1">По убыванию цены <span class="span_arrow_option">&#8595;</span></option>
                            <option value="2">По увеличению цены <span class="span_arrow_option">&#8593;</span></option>
                            <option value="3">По дате</option>
                            <option value="4">По рейтингу</option>
                        </select>
                    </div>

                </div>
                <!--colors-->
                <div class="search__colors">
                    <div class="search__colorw-container">
                        
                    </div>
                </div>
                <!-- SORT BUTTON-->
                <div class="search_button">

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
                                echo $table_price . " ₼";
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

<script>
    var x, i, j, l, ll, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select");
    l = x.length;
    for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        /*for each element, create a new DIV that will act as the selected item:*/
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < ll; j++) {
            /*for each option in the original select element,
            create a new DIV that will act as an option item:*/
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function(e) {
                /*when an item is clicked, update the original select box,
                and the selected item:*/
                var y, i, k, s, h, sl, yl;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                sl = s.length;
                h = this.parentNode.previousSibling;
                for (i = 0; i < sl; i++) {
                    if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        yl = y.length;
                        for (k = 0; k < yl; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                }
                h.click();
            });
            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function(e) {
            /*when the select box is clicked, close any other select boxes,
            and open/close the current select box:*/
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
    }

    function closeAllSelect(elmnt) {
        /*a function that will close all select boxes in the document,
        except the current select box:*/
        var x, y, i, xl, yl, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i)
            } else {
                y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
            }
        }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);
</script>


<script src="./js/script.js"></script>
</body>

</html>
</body>

</html>