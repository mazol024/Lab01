<?php
if (session_id() === "") {
    session_start();
}
$scriptList = array('jquery/jquery-3.3.1.min.js');
include("header.php");
/*include("sessionVars.php");*/
?>
    <main id="main">
        <H3>Your Shopping Cart:</H3>
        <div id="cart1">
            <?php include ('showCookie.php'); ?>
        </div>
        <!--<script type="text/javascript">
            var target  = document.getElementById("cart1");
            target.innerText = "Your Cart is Empty." ;
        </script>-->
        <form id="checkoutForm" novalidate action="validateCheckout.php" method="POST">
            <fieldset>
                <!-- First section of form is delivery address etc. -->
                <legend>Delivery Details:</legend>
                <p>
                    <label for="deliveryName">Deliver to:</label>

                    <input type="text" name="deliveryName" id="deliveryName" disabled
                        value = "<?php
                        echo  $_SESSION["authenticatedUser"];
                        ?>"  required >
                </p>

                <p>
                    <label for="deliveryEmail">Email:</label>
                    <input type="email" name="deliveryEmail" id="deliveryEmail"
                           value = "<?php
                           echo $_SESSION["deliveryEmail"];
                           ?>"
                    >
                </p>
                <p>
                    <label for="deliveryAddress1">Address:</label>
                    <input type="text" name="deliveryAddress1" id="deliveryAddress1" required
                        value = "<?php
                     echo $_SESSION["deliveryAddress1"];
                    ?>"
                    >
                </p>
                <p>
                    <label for="deliveryAddress2"></label>
                    <input type="text" name="deliveryAddress2" id="deliveryAddress2"
                           value = "<?php
                           echo $_SESSION["deliveryAddress2"];
                           ?>"
                    >
                </p>
                <p>
                    <label for="deliveryCity">City:</label>
                    <input type="text" name="deliveryCity" id="deliveryCity" required
                           value = "<?php
                           echo $_SESSION["deliveryCity"];
                           ?>"
                    >
                </p>
                <p>
                    <label for="deliveryPostcode">Postcode:</label>
                    <input type="text" name="deliveryPostcode" id="deliveryPostcode" maxlength="4" required class="short"
                           value = "<?php
                           echo $_SESSION["deliveryPostcode"];
                           ?>"
                    >
                </p>
            </fieldset>

            <!-- Next section has credit card details -->
            <fieldset>
                <legend>Payment Details:</legend>
                <p>
                    <label for="cardType">Card type:</label>
                    <select name="cardType" id="cardType">
                        <option value="amex">American Express</option>
                        <option value="mcard">Master Card</option>
                        <option value="visa">Visa</option>
                    </select>
                </p>
                <p>
                    <label for="cardNumber">Card number:</label>
                    <input type="text" name="cardNumber" id="cardNumber" maxlength="16" required
                           value = "<?php
                           echo $_SESSION["cardNumber"];
                           ?>"
                    >
                </p>
                <p>
                    <label for="cardMonth">Expiry date:</label>
                    <select name="cardMonth" id="cardMonth">
                        <?php
                            for ($i=1; $i<13;$i++){
                                echo "<option value=\"$i\"";
                                echo ($i == intval($_SESSION["cardMonth"])) ?' selected ' :'';
                                echo ">$i</option>";
                            }
                        ?>

                    </select>
                    <select name="cardYear" id="cardYear">
                        <?php
                        for ($i=2014; $i<2022;$i++){
                            echo "<option value=\"$i\"";
                            echo ($i == intval($_SESSION["cardYear"])) ?' selected ' :'';
                            echo ">$i</option>";
                        }
                        ?>

                    </select>
                </p>
                <p>
                    <label for="cardValidation">CVC:</label>
                    <input type="text" class="short" maxlength="4" name="cardValidation" id="cardValidation" required
                           value = "<?php
                           echo $_SESSION["cardValidation"];
                           ?>"
                    >
                </p>
            </fieldset>
            <input type="submit" name="submit">
        </form>
        <div id="errors"></div>
    </main>


<?php
include ("showHideForm.php");
include("footer.php");
?>
</body></html>