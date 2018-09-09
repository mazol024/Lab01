<!DOCTYPE html>

<html lang="en">

    <?php
        $scriptList = array('jquery/jquery-3.3.1.min.js', 'carousel_closure.js');
        include('header.php');
    ?>

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

            <div id="carousel">

            </div>

        </main>

        <?php include ("footer.php");?>

    </body>
</html>