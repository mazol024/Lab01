<?php
if (session_id() === "") {
    session_start();
}
if (isset($_POST["loginUser"]) && isset($_POST["loginPassword"])) {

       $conn = new mysqli('sapphire.otago.ac.nz', 'omazhanov', 'pwd123', 'omazhanov_dev');
       if ($conn->connect_errno) {
        // Something went wrong connecting
        echo "Conection error!   Exitting...";
           ?> <script>alert("Connection Error !")</script><?php
        //header('Location: index.php');
        exit();
    }
    $loginUser = $_POST["loginUser"];
    //$loginUser = "oleg";
    $loginPassword = $_POST["loginPassword"];
    $loginPassword = sha1($loginPassword);

    $result = $conn->query("SELECT * FROM users WHERE username = '$loginUser'");

    if ( $result->num_rows === 1 ) {
        $row = $result->fetch_assoc();
        $dbUser[] = $row["username"];
        $dbPassword[] = $row["password"];
        $dbRole[] = $row["role"];
        $result->free();
        $conn->close();
    } else {
        $result->free();
        $conn->close();
        echo "User does not exist!";
        header("Location: " . "register.php");
        exit;
    }

    if ($dbUser[0] === $loginUser && $dbPassword[0] === $loginPassword) {
        echo "Success!";
        $_SESSION["authenticatedUser"] = $loginUser;
        $_SESSION["userRole"] = $dbRole[0];
        if ( $_SESSION["lastPage"] !== 'register.php') {
            header("Location: " . $_SESSION["lastPage"]);
        } else {
            header("Location: " . "index.php");
        }
        exit;
    } else {
        echo "Loging Failed!";
        ?> <script>alert("Login Failed!")</script><?php
        unset($_SESSION['$loginUser']);
        if ( $_SESSION["lastPage"] !== 'register.php') {
            header("Location: " . $_SESSION["lastPage"]);
        } else {
            header("Location: " . "index.php");
        }
        exit;
    }

 } else {
    echo "Eneter username and password";
    ?> <script>alert("Enter Username&Password !")</script><?php
    if ( $_SESSION["lastPage"] !== 'register.php') {
        header("Location: " . $_SESSION["lastPage"]);
    } else {
        header("Location: " . "index.php");
    }
}

?>