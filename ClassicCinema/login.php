<?php

if (isset($_POST["loginUser"]) && isset($_POST["loginPassword"])) {

       $conn = new mysqli('sapphire.otago.ac.nz', 'omazhanov', 'pwd123', 'omazhanov_dev');
       if ($conn->connect_errno) {
        // Something went wrong connecting
        echo "Conection error!   Exitting...";
        exit();
    }

    $loginUser = $_POST["loginUser"];
    $loginPassword = $_POST["loginPassword"];
    $loginPassword = sha1($loginPassword);
    $stmt = $conn->prepare("select * from users where username = ?");
    $stmt->bind_param("sss", $loginUser);
    $result = $stmt->execute();
    while($row = $result->fetch_assoc()) {
        $dbUser = $row["username"];
        $dbPassword = $row["password"];
    }
    $result->free();
    $conn->close();
    if ($dbUser === $loginUser && $dbPassword === $loginPassword) {
        echo "Success!";
        $_SESSION[’authenticatedUser’] = $loginUser;
        ?>
        <script>
            $("#login").hide();
            $("#logout").show();
        </script>
        <?php
    } else {

    }

}
?>