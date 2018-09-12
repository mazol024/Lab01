<?php
session_start();
/**
 * Created by PhpStorm.
 * User: olegmazhanov
 * Date: 11/09/2018
 * Time: 23:07
 */
$fields = array("deliveryName","deliveryEmail","deliveryAddress1",
    "deliveryCity","deliveryPostcode","cardNumber","cardValidation",
    "cardType","cardMonth","cardYear");
$name = $_SESSION['deliveryName'];
echo "Name is $name";
foreach ($fields as $item) {

    if (isset($_SESSION[$item])) {
        $item = $_SESSION[$item];
        echo "value=$item";

    }

}
?>
