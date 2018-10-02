<head>
    <title>Classic Cinema</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="leaflet/leaflet.css"/>
    <?php
    if (session_id() === "") {
        session_start();
    }
    $_SESSION["lastPage"] = basename($_SERVER["PHP_SELF"]);
    if (isset($scriptList) && is_array($scriptList)) {
        foreach ($scriptList as $script) {
            echo "<script src='$script'></script>";
        }
    }
    ?>
    <?php
    function addReviewForm($xmlFileName) {
        if (isset($_SESSION['authenticatedUser'])) {
            echo "<form action='writeReview.php' method='POST'>";
            echo "<input type='hidden' name='xmlFileName' value='$xmlFileName'>";
            echo "<label for='rating'>Rating:</label>";
            echo "<select name='rating' id='rating'>";
            echo "<option value=1>1</option>";
            echo "<option value=2>2</option>";
            echo "<option value=3>3</option>";
            echo "<option value=4>4</option>";
            echo "<option value=5>5</option>";
            echo "</select>";
            echo "<input type='submit' id='reviewForm' name='reviewForm'>";
            echo "</form>";
        }
    }
    ?>
</head>
<body>

<header>
    <h1>Classic Cinema</h1>
    <div id="user">
        <div id="login">
            <form id="loginForm" action="login.php" method="POST">
                <label for="loginUser">Username: </label>
                <input type="text" name="loginUser" id="loginUser" required><br>
                <label for="loginPassword">Password: </label>
                <input type="password" name="loginPassword" id="loginPassword" required><br>
                <input type="submit" id="loginSubmit" value="Login">
            </form>
            <form id="register" action="register.php" method="post">
                <input type="submit" id="register" value="Register">
            </form>
        </div>



        <div id="logout">
            <p>Welcome, <span id="logout"><?php echo $_SESSION["authenticatedUser"]; ?></span></p>
            <form id="logoutForm" action="logout.php" method="post">
                <input type="submit" id="logoutSubmit" value="Logout">
            </form>
        </div>
    </div>
</header>

<nav >
    <ul>
        <?php
            if ($currentPage === 'index.php') {
                echo "<li> Home";
            } else {
                echo "<li> <a href='index.php'>Home</a>";
            }
            if ($currentPage === 'classic.php') {
                echo "<li> Classics";
            } else {
                echo "<li> <a href='classic.php'>Classics</a>";
            }
            if ($currentPage === 'scifi.php') {
                echo "<li> Sci&nbsp;Fi";
            } else {
                echo "<li> <a href='scifi.php'>Sci&nbsp;Fi</a>";
            }
            if ($currentPage === 'hitchcock.php') {
                echo "<li> Hitchcock";
            } else {
                echo "<li> <a href='hitchcock.php'>Hitchcock</a>";
            }
            ?>
        <hr>
            <?php

            if ($currentPage === 'contact.php') {
                echo "<li> Contact";
            } else {
                echo "<li> <a href='contact.php'>Contact</a>";
            }
            if ($currentPage === 'orders.php') {
                echo "<li> Orders";
            } else {
                echo "<li> <a href='orders.php'>Orders</a>";
            }
            if ($currentPage === 'checkout.php') {
                echo "<li> Shopping Cart";
            } else {
                echo "<li> <a href='checkout.php'>Shopping Cart</a>";
            }
            if ( isset($_SESSION["authenticatedUser"])) {
                ?><script>
                    $("#logout").show();
                    $("#login").hide();
                </script> <?php
            } else {
                ?><script>
                    $("#logout").hide();
                    $("#login").show();
                </script><?php
            }
            ?>
    </ul>
</nav>



