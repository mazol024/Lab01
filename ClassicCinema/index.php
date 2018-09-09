<!DOCTYPE html>

<html lang="en">

    <head>
        <title>Classic Cinema</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
<!--s
        <script src="carousel.js" ></script>
        <script src="carousel_objects.js" ></script>
-->
        <script src="jquery/jquery-3.3.1.min.js"></script>
        <script src="carousel_closure.js" ></script>

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
                <li> Home
                <li> <a href="classic.php">Classics</a>
                <li> <a href="scifi.php">Sci&nbsp;Fi</a>
                <li> <a href="hitchcock.php">Hitchcock</a>
                <hr>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="showcart.php">Shopping Cart</a></li>
            </ul>

        </nav>

        <main >
            <p>
                Welcome to Classic Cinema, your online store for classic film.
            </p>
            <!--<ul class="frontpage">
                <li ><a  href="classic.html"><img src="images/Metropolis.jpg" alt="Metropolis">Classic Films</a>
                <li ><a  href="scifi.html"><img src="images/Plan_9_from_Outer_Space.jpg" alt="Plan 9 from Outer Space">Science Fiction and Horror</a>
                <li ><a  href="hitchcock.html"><img src="images/The_Birds.jpg" alt="The Birds">Alfred Hitchcock</a>
            </ul>-->
            <div id="carousel">

            </div>

        </main>

        <?php include ("footer.php");?>
<!--        <footer >
            <p>
            Classic Cinema is not a real store. No products are available, and no money will be accepted.
            <p>
            All images from <a href="http://commons.wikimedia.org/wiki/Main_Page">Wikimedia Commons</a> and are believed to be in the public domain.
            </p>
        </footer>
-->
    </body>
</html>