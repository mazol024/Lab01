<!DOCTYPE html>

<html lang="en">

<?php
$scriptList = array('jquery/jquery-3.3.1.min.js', 'showHIde_closure.js', 'cookies.js', 'cart.js', 'showReview.js');
include('header.php');
?>
<main>
    <h2>Orders </h2>

<?php
$orders = simplexml_load_file('./secure/orders.xml');
foreach ($orders->order as $order) {
    $name = $order->delivery->name;
    echo "</p>Name: $name<p>";
    $email = $order->delivery->email;
    echo "</p>E-mail: $email<p>";
    $address = $order->delivery->address;
    echo "</p>Address: $address<p>";
    $city = $order->delivery->city;
    echo "</p>City: $city<p>";
    $postcode = $order->delivery->postcode;
    echo "</p>Postcode: $postcode<p>";
    foreach ($order->items as $items) {
        ?> <div class="film"><?php
        foreach ($items->item as $oneitem) {
            $vtitle = $oneitem->title;
            echo "</p>Title: $vtitle<p>";
            $vprice = $oneitem->price;
            echo "</p>Price: $vprice<p>";
        }
        ?> </div><?php
    }
    ?>  <hr> <?php
}
?>
</main>


<?php include ("footer.php");?>

</body>
</html>
