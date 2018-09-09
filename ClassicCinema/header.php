<head>
    <title>Classic Cinema</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="leaflet/leaflet.css"/>
    <?php
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



