<?php
if (session_id() === "") {
    session_start();
}
        unset($_SESSION['$loginUser']);
        unset($_SESSION["authenticatedUser"]);
        session_destroy();
 /*       if ( $_SESSION["lastPage"] !== 'register.php') {
            header("Location: " . $_SESSION["lastPage"]);

        } else {
            header("Location: " . "index.php");
        }*/
        header("Location: " . "index.php");
        exit;
?>