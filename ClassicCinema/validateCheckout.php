<?php
$scriptList = array('jquery/jquery-3.3.1.min.js', 'cookies.js', 'cart.js', 'showcart.js');
include("header.php");
include ("validationFunctions.php");
?>
<main>

    <br>
    <?php
    $errorsList = array('Thank you for your puchase !');
    array_push( $errorsList,'You must fix Errors: ');
    if (isset($_POST['submit'])) {
        $deliveryName = htmlentities($_POST['deliveryName']);
        $deliveryEmail = htmlentities($_POST['deliveryEmail']);
        $deliveryAddress1 = htmlentities($_POST['deliveryAddress1']);
        $deliveryCity = htmlentities($_POST['deliveryCity']);
        $deliveryPostcode = htmlentities($_POST['deliveryPostcode']);
        $cardNumber = htmlentities($_POST['cardNumber']);
        $cardValidation = htmlentities($_POST['cardValidation']);
        $cardType = htmlentities($_POST['cardType']);
        $cardMonth = htmlentities($_POST['cardMonth']);
        $cardYear = htmlentities($_POST['cardYear']);
    ?>
        <p><em> <?php
                if ( isEmpty($deliveryName)) {
                    array_push($errorsList, "Please input Personal Name!");
                }
                ?></em></p>
        <p><em> <?php
                if ( isEmpty($deliveryCity) ) {
                    array_push($errorsList, "Please input City name!");
                }
                ?></em></p>
        <p><em> <?php
                if ( !isEmail($deliveryEmail) ) {
                    array_push( $errorsList,"Please input correct e-mail address!");
                }
                ?></em></p>
        <p><em> <?php
                if ( !isDigits($deliveryPostcode) ) {
                    array_push( $errorsList,"Please input correct ZIPcode!");
                }
                ?></em></p>
        <p><em> <?php
                if ( !checkCardVerification($cardType,$cardValidation) ) {
                    array_push( $errorsList,"Please input correct CVC code!");
                }
                ?></em></p>
        <p><em> <?php
                if ( !checkCardDate($cardMonth,$cardYear) ) {
                    array_push( $errorsList,"Your card has expired!");
                }
                ?></em></p>
        <p><em> <?php
                if ( !checkCardNumber($cardType, $cardNumber) ) {
                    array_push( $errorsList, "Please input correct Card Number!");
                }
                if ( count($errorsList) < 3 ) {
                    echo $errorsList[0];
                } else {
                    for ( $i = 1 ; $i < count($errorsList);$i++){
                        ?><br><em><?php
                        echo "\n $errorsList[$i]";
                        ?></em><?php
                    }
                }
                ?></em></p>

        <?php
    }
    ?>

</main>
<?php include("footer.php"); ?>
</body></html>