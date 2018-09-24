<!DOCTYPE html>

<html lang="en">

<?php
session_start();
$scriptList = array('jquery/jquery-3.3.1.min.js', 'carousel_closure.js');
include('header.php');
?>

<main >
    <p>
        Welcome to Classic Cinema, your online store for classic film.
    </p>

    <div id="register">

    </div>

</main>

<?php include ("footer.php");?>

</body>
</html>


<?php

$showForm = true;
if (isset($_POST["submit"])) {
    $showForm = false;
    // Validate form. If there is an error
    // set $showForm = true;
    echo "User Validation:  ";
    $loginUser = htmlentities($_POST['loginUser']);
    $loginPassword = htmlentities($_POST['loginPassword']);
    $loginEmail = htmlentities($_POST['loginEmail']);
    ?> <br><?php
    echo "Connecting ...";
    $conn = new mysqli('sapphire.otago.ac.nz', 'omazhanov', 'pwd123', 'omazhanov_dev');
    ?> <br><?php
    if ($conn->connect_errno) {
// Something went wrong connecting
        echo "Conection error!   Exitting...";
        exit();
    }
    $query = "SELECT * FROM Users WHERE username = $loginUser";
    $result = $conn->query($query);
    if ($result->num_rows === 0) {
// OK, there is no user with that username
        echo "No users with that name";
    } else {
// Problem -- username is already taken
        echo "Username: $loginUser already taken ";
    }
    $result->free();
    $conn->close();
}
if ($showForm) {
    ?>
<form  action="<?php echo  $_SERVER["PHP_SELF"]; ?>" method="POST">
                <label for="loginUser">Username: </label>
                <input type="text" name="loginUser" id="loginUser" width="15"><br>
                <label for="loginPassword">Password: </label>
                <input type="password" name="loginPassword" id="loginPassword" minlength="8" ><br>
                <label for="loginEmail">E-mail: </label>
                <input type="text" name="loginEmail" id="loginEmail" width="15"><br>
                <input type="submit" id="submit" name="submit">
            </form>
<?php   }

?>