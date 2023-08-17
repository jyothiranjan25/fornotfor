<?php
if ($connection) {
    // echo "Database Connected";
} else {
    header("Location: database/dbconfig.php");
}


if (isset($_GET['logout_btn'])) {

    session_destroy();
    header("Location: login.php");
}



if (!$_SESSION['email']) {
    header('Location: login.php');
}
