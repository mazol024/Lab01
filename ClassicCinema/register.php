<!DOCTYPE html>

<html lang="en">
<?php
if (session_id() === "") {
    session_start();
}

$scriptList = array('jquery/jquery-3.3.1.min.js', 'carousel_closure.js');
include('header.php');
?>
<main id="main">
    <p>
        Welcome to Classic Cinema, your online store for classic film.
        <br>
        New user registration form.
    </p>

    <div id="register">

        <?php

        $showForm = true;
        if (isset($_POST["submit1"]) && ($_POST["newPassword1"] === $_POST["newPassword"])) {

            $showForm = false;
            // Validate form. If there is an error
            // set $showForm = true;
            echo "User Validation:  ";

            $newUser = htmlentities($_POST['newUser']);
            $newPassword = htmlentities($_POST['newPassword']);
            $newEmail = htmlentities($_POST['newEmail']);
            ?><hr> <br><?php

            $conn = new mysqli('sapphire.otago.ac.nz', 'omazhanov', 'pwd123', 'omazhanov_dev');
            ?> <br><?php
            if ($conn->connect_errno) {
            // Something went wrong connecting
                echo "Conection error!   Exitting...";
                exit();
            }
            $sql = "SELECT * FROM users where username = '$newUser' ";
            $result = $conn->query($sql);

            if ($result->num_rows === 0) {
                // OK, there is no user with that username
                echo "No users with that name...";
                ?><br><?php
                echo "User created.";
                $newPassword = sha1($newPassword);
                $role = "user";
                $stmt = $conn->prepare("INSERT INTO users (username, password, email, role) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("ssss", $newUser, $newPassword, $newEmail, $role);
                $stmt->execute();
                $stmt->close();
                $conn->close();
                $stmtQuery->close();
            } else {
                    echo "Username: $newUser already taken. ";
                    echo "<table><tr><th>User Name</th><th>Password</th><th>E-mail address</th></tr>";
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["username"] . "</td><td>" . $row["password"] . "</td><td> " . $row["email"] . "</td></tr>";
                    }
                    echo "</table>";

// Problem -- username is already taken

            }
            $result->free();
            $conn->close();
        }
        if ($showForm) {
            if ( $_POST["newPassword1"] !== $_POST["newPassword"] ) {
                echo "Please , reenter password correctly";
            }
            ?>
            <div id="register">
            <form  action="<?php echo  $_SERVER["PHP_SELF"]; ?>" method="POST" >
                <label for="newUser">Username: </label>
                <input type="text" name="newUser" id="newUser"  size="25" minlength="3" required><br>
                <label for="newPassword">Password: </label>
                <input type="password" name="newPassword" id="newPassword" size="25" minlength="8" required><br>
                <label for="newPassword">Password: </label>
                <input type="password" name="newPassword1" id="newPassword1" size="25" minlength="8" required><br>
                <label for="newEmail">E-mail: </label>
                <input type="text" name="newEmail" id="newEmail" size="25" minlength="6" required><br>
                <input type="submit" id="submit1" name="submit1">
            </form>
            </div>
        <?php   }

        ?>
    </div>

</main>

<?php include ("footer.php");?>

</body>
</html>

