<?php

//Include Configuration File
include('config.php');
include('login.php');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Login using Google Account</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body onload="checkMode()">
    <div class="container">
        <div class="row mt-3">
            <div class="col-12 text-right">
                <button class="btn btn-secondary toggle-mode" onclick="toggleMode()">Toggle Dark/Light Mode</button>
            </div>
        </div>
        <h2 class="text-center mt-3">Inicio de sesión con <img src="img/logoGoogle.png" alt="Google Logo"></h2>
        <br />
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card text-center">
                    <?php
                    if ($login_button == '') {
                        echo '<div class="card-header">Welcome User</div><div class="card-body">';
                        echo '<img src="' . $_SESSION["user_image"] . '" class="rounded-circle"/>';
                        echo '<h3><b>Name :</b> ' . $_SESSION['user_first_name'] . ' ' . $_SESSION['user_last_name'] . '</h3>';
                        echo '<h3><b>Email :</b> ' . $_SESSION['user_email_address'] . '</h3>';
                        echo '<a href="logout.php" class="btn btn-primary btn-block">Logout</a></div>';
                    } else {
                        echo '<div class="card-header">Login</div><div class="card-body">';
                        echo '<div align="center">' . $login_button . '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>
</body>
</html>
