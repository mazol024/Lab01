<head>
    <title>Classic Cinema</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="leaflet/leaflet.css"/>
    <?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    if (isset($scriptList) && is_array($scriptList)) {
        foreach ($scriptList as $script) {
            echo "<script src='$script'></script>";
        }
    }
    ?>
</head>
<body>

<header>
    <h1>Classic Cinema</h1>
    <div id="user">
        <div id="login">
            <form id="loginForm">
                <label for="loginUser">Username: </label>
                <input type="text" name="loginUser" id="loginUser"><br>
                <label for="loginPassword">Password: </label>
                <input type="password" name="loginPassword" id="loginPassword"><br>
                <input type="submit" id="loginSubmit" value="Login">
            </form>
        </div>

        <div id="logout">
            <p>Welcome, <span id="logoutUser"></span></p>
            <form id="logoutForm">
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
            /*if ($currentPage === 'showcart.php') {
                echo "<li> Shopping Cart";
            } else {
                echo "<li> <a href='showcart.php'>Shopping Cart</a>";
            }*/
            if ($currentPage === 'validateCheckout.php') {
                echo "<li> Shopping Cart";
            } else {
                echo "<li> <a href='validateCheckout.php'>Shopping Cart</a>";
            }
        ?>
    </ul>
</nav>



