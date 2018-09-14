<?php
$summ = 0;
$cart = json_decode($_COOKIE['ShoppingCart']);
?>
    <table><tr>
    <th style='text-align: left;width: 400px'>Films  Titles</th>
    <th style='text-align: right;width: auto'>Price</th>
    </tr>
<?php

    foreach ($cart as $item) {
        $name = $item->title;
        $price = $item->price;
            ?>
            <tr><td style='text-align:left; width: 400px'>
              <?php  echo $name; ?>
            </td><td style='text-align: right;width: auto'>
                <?php echo $price; ?>
            </td></tr>
        <?php
        $summ = $summ + floatval($price);
    }
?>
    </tr></table><hr><br><p style='text-align: center'>Total cost  : <?php echo $summ; ?></p>
