<?php
ob_start();
session_start();
?>


<?php
if ($_SESSION['active'] == null) {
    header("Location: ../admin.php");
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <div class="wrapper">
        <div class="header__div">
            <div class="header__content">
                <a href="../../index.php">Back to website</a>
                <a href="../vendor/logout.php">Logout !</a>
            </div>
        </div>
        <div class="content__page__wrapper">
            <div class="left_navigation">
                    <div class="page__wrapper_element">
                        <a href="./page.php?page=main">Главная</a>
                        <a href="./page.php?page=catalog">Каталог товаров</a>
                        <a href="./page.php?page=content">Контент на сайте</a>
                        <a href="./page.php?page=foto">Данные связи и тд.</a>
                    </div>
            </div>

            <div class="conetnt__wrapper">
                <?php
                $source = $_GET['page'];

                switch ($source) {
                    case 'main':
                        include "../includes/statistics.php";
                        break;

                    case 'catalog':
                        include "../includes/catalog.php";
                        break;

                    case 'content':
                        include "../includes/content.php";
                        break;

                    case 'foto':
                        include "../includes/foto.php";
                        break;

                    default:
                        include "../includes/statistics.php";
                }

                ?>

            </div>
        </div>

    </div>
    <div class="footer__div">

    </div>

</body>

</html>