<?php
    session_start();
    $message= " ";
    if(isset($_SESSION['wrong_password'])){
        $message = $_SESSION['wrong_password'];
    }?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style/style.css">

</head>

<body>
    <div class="wrapper">
        <form class="admin_form" action="./vendor/login.php" method="post">
            <p>Please Login to enter Admin Page</p>
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Email username</label>
                <input type="username" name="username" name id="form2Example1" class="form-control" />

            </div>
            <!-- Password input -->
            <div class="form-outline mb-4">

                <label class="form-label" for="form2Example2">Password</label>
                <input type="password" name="password" id="form2Example2" class="form-control" />

            </div>
            <!-- Submit button -->
            <button name="submit" type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
            <?php echo $message ?>
        </form>
    </div>
</body>
<?php
            unset($_SESSION['wrong_password']);
            session_destroy();
?>
</html>