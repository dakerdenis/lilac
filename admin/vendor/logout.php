<?php include "../../vendor/db.php" ?>
<?php
session_start();

?>
<?php
$_SESSION['active'] = null;
header("Location: ../admin.php");
session_unset();
?>