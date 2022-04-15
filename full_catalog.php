<?php include "./include/header.php"; ?>

<?php include "./vendor/db.php" ?>

<?php
    $query = "SELECT * FROM catalog";
    $result = mysqli_query($connection, $query);

    $result2 = mysqli_fetch_assoc($result);
?>

    <!---- ......WRAPPER----->
<div class="wrapper">
    <?php include "./include/navigation.php"; ?>
    <!-- DESC OF CATALOG-->
    <div class="catalog__description">

    </div>
    <!-- MAIN CATALOG-->
    <div class="main__catalog__wrapper">
            
    </div>
    <!--END MAIN CATALOG-->
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <?php print_r($result2); ?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php include "./include/footer.php"; ?>

</div><!-- WRAPPER ENDS-->



<script src="./js/script.js"></script>
</body>
</html>
</body>
</html>