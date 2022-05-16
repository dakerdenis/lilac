<?php
ob_start();
session_start();
?>


<?php
    if($_SESSION['active']==null){
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
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, laborum voluptas. Ducimus enim, ab et fugiat incidunt eos rerum eligendi atque repellat! Voluptatibus delectus perspiciatis doloremque accusamus aut amet eum.</p>
        <a href="../vendor/logout.phps">Logout !</a>
    </div>



</body>

</html>