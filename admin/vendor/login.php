<?php include "../../vendor/db.php" ?>
<?php
    session_start();

?>
<?php
    if(isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

            $query = "SELECT * FROM users WHERE username = '{$username}' ";
            $select_all_users = mysqli_query($connection, $query);
            if(!$select_all_users){
                die("QUERY FAILED" . mysqli_error($connection));
            }


            while($row =  mysqli_fetch_array($select_all_users)){
                $db_id = $row['id'];
                $db_username = $row['username'];
                $db_password = $row['password'];

            }


            if($username !== $db_username && $password !== $db_password){
                header("Location: ../admin.php");
                $_SESSION['wrong_password'] = "Wrong Password or username !";
            } else if($username == $db_username && $password == $db_password){
                $_SESSION['active'] = "active_user";
                header("Location: ../includes/page.php");
            } else {
                header("Location: ../admin.php");
            }
    }


?>