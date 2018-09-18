<?php
$orders = simplexml_load_file('./secure/orders.xml');
$newOrder = $orders->addChild('order');
$delivery = $newOrder->addChild('delivery');
$delivery->addChild('name', $_POST['deliveryName']);
$delivery->addChild('email', $_POST['deliveryEmail']);
$delivery->addChild('address', $_POST['deliveryAddress1']);
$delivery->addChild('city', $_POST['deliveryCity']);
$delivery->addChild('postcode', $_POST['deliveryPostcode']);
$items = $newOrder->addChild('items');
$cart = json_decode($_COOKIE['ShoppingCart']);
    foreach ($cart as $cartitem) {
        $item = $items->addChild('item');
        $item->addChild('title',$price = $cartitem->title);
        $item->addChild('price',$price = $cartitem->price);
    }
$orders->saveXML('./secure/orders.xml');
?>