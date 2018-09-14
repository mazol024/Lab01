<?php
$cart = json_decode($_COOKIE['ShoppingCart']);
if ($cart == '') {
    ?>
    <script>
        $("#checkoutForm").hide();
        $("#cart1").html("Your shopping cart is empty!");
    </script>
    <?php
} else {
    ?>
    <script>
        $("#checkoutForm").show();</script>
    <?php
}
?>