<?php
session_start();
$scriptList = array('jquery/jquery-3.3.1.min.js', 'cookies.js', 'cart.js');
include("header.php");
include ("secure/validationFunctions.php");
?>
<main>

    <br>
    <?php
    $errorsList = array('Thank you for your puchase !');
    array_push( $errorsList,'You must fix Errors: ');
    if (isset($_POST['submit'])) {
    $deliveryName = htmlentities($_POST['deliveryName']);
    $_SESSION['deliveryName']=$deliveryName;
    $deliveryEmail = htmlentities($_POST['deliveryEmail']);
    $_SESSION['deliveryEmail']=$deliveryEmail;
    $deliveryAddress1 = htmlentities($_POST['deliveryAddress1']);
    $_SESSION['deliveryAddress1']=$deliveryAddress1;
    $deliveryCity = htmlentities($_POST['deliveryCity']);
    $_SESSION['deliveryCity']=$deliveryCity;
    $deliveryPostcode = htmlentities($_POST['deliveryPostcode']);
    $_SESSION['deliveryPostcode']=$deliveryPostcode;
    $cardNumber = htmlentities($_POST['cardNumber']);
    $_SESSION['cardNumber']=$cardNumber;
    $cardValidation = htmlentities($_POST['cardValidation']);
    $_SESSION['cardValidation']=$cardValidation;
    $cardType = htmlentities($_POST['cardType']);
    $_SESSION['cardType']=$cardType;
    $cardMonth = htmlentities($_POST['cardMonth']);
    $_SESSION['cardMonth']=$cardMonth;
    $cardYear = htmlentities($_POST['cardYear']);
    $_SESSION['cardYear']=$cardYear;

            if (isEmpty($deliveryName)) {
                array_push($errorsList, "Please, enter Personal Name!");
            }

            if (isEmpty($deliveryCity)) {
                array_push($errorsList, "Please, enter City name!");
            }

            if (isEmpty($deliveryAddress1)) {
                array_push($errorsList, "Please, enter correct delivery address!");
            }

            if (!isEmail($deliveryEmail)) {
                array_push($errorsList, "Please, enter correct e-mail address!");
            }

            if ((strlen($deliveryPostcode) < 4) || !isDigits($deliveryPostcode)) {
                    array_push($errorsList, "Please, enter correct ZIPcode!");

            }

                if ( !checkCardVerification($cardType,$cardValidation) ) {
                    array_push( $errorsList,"Please, enter correct CVC code!");
                }

                if ( !checkCardDate($cardMonth,$cardYear) ) {
                    array_push( $errorsList,"Your card has expired!");
                }

                if ( !checkCardNumber($cardType, $cardNumber) ) {
                    array_push( $errorsList, "Please, enter correct Card Number!");
                }
                if ( count($errorsList) < 3 ) {
                    ?><br><em><?php
                    echo $errorsList[0];
                    session_destroy();
                    ?></em> <script>Cookie.clear("ShoppingCart");</script><?php
                } else {
                    for ( $i = 1 ; $i < count($errorsList);$i++){
                        ?><br><em><?php
                        echo "\n $errorsList[$i]";
                        ?></em><?php
                    }
                }
    }
    ?>

</main>
<?php include("footer.php"); ?>
</body></html>