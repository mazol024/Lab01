<?php
/**
 * Created by PhpStorm.
 * User: olegmazhanov
 * Date: 11/09/2018
 * Time: 19:27
 */
$counter = 1;
if (isset($_COOKIE['counter'])) {
    $counter = (int) $_COOKIE['counter'];
}
echo "<p> You have been here $counter time(s) recently</p>";
setcookie('counter', $counter+1, time()+3600, '/');
?>