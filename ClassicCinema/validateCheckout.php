<?php
$scriptList = array('jquery/jquery-3.3.1.min.js', 'cookies.js', 'cart.js', 'showcart.js');
include("header.php");
include ("validationFunctions.php");
?>
<main>

    <p> Your Submit form did not pass validation: </p><br>
    <?php
    if (isset($_POST['submit'])) {
        $deliveryName = htmlentities($_POST['deliveryName']);
        $deliveryEmail = htmlentities($_POST['deliveryEmail']);
        $deliveryAddress1 = htmlentities($_POST['deliveryAddress1']);
        $deliveryCity = htmlentities($_POST['deliveryCity']);
        $deliveryPostcode = htmlentities($_POST['deliveryPostcode']);
        $cardNumber = htmlentities($_POST['cardNumber']);
    ?>
        <p><em> <?php
                if ( isEmpty($deliveryName)) {
                    echo "Please input Personal Name!";
                }
                ?></em></p>
        <p><em> <?php
                if ( isEmpty($deliveryCity) ) {
                    echo "Please input City name!";
                }
                ?></em></p>

            <p><em> <?php
                if ( !isEmail($deliveryEmail) ) {
                    echo "Please input correct e-mail address!";
                }
                ?>
            </em></p>
    <?php
    }
    ?>

</main>
<?php include("footer.php"); ?>
</body></html>