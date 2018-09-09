<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="cookies.js"></script>
    <script src="cart.js"></script>
    <script src="showcart.js"></script>
    <script src="sampleValidator.js"></script>
</head>
<body>
<main id="main">
    <H3>Your Shopping Cart:</H3>
    <div id="cart1"></div>
    <script type="text/javascript">
    var target  = document.getElementById("cart1");
    target.innerText = "Your Cart is Empty." ;
    $("#main").append("<button id='gohome'>Return</button>");
    $("#gohome").click(function(e){
        e.preventDefault();
        window.location = "index.php";
    });
    </script>
    <!--
        Sample HTML form for Lab 7.

        Created by: Steven Mills 10/04/2014
        Last Modified by: Steven Mills 11/06/2014
    -->

    <!-- The form doesn't have an action or a method yet.
         We'll get to that later in the course. -->
    <form id="checkoutForm" novalidate>
        <fieldset>
            <!-- First section of form is delivery address etc. -->
            <legend>Delivery Details:</legend>
            <p>
                <label for="deliveryName">Deliver to:</label>
                <input type="text" name="deliveryName" id="deliveryName" required>
            </p>
            <p>
                <label for="deliveryEmail">Email:</label>
                <input type="email" name="deliveryEmail" id="deliveryEmail">
            </p>
            <p>
                <label for="deliveryAddress1">Address:</label>
                <input type="text" name="deliveryAddress1" id="deliveryAddress1" required>
            </p>
            <p>
                <label for="deliveryAddress2"></label>
                <input type="text" name="deliveryAddress2" id="deliveryAddress2">
            </p>
            <p>
                <label for="deliveryCity">City:</label>
                <input type="text" name="deliveryCity" id="deliveryCity" required>
            </p>
            <p>
                <label for="deliveryPostcode">Postcode:</label>
                <input type="text" name="deliveryPostcode" id="deliveryPostcode" maxlength="4" required class="short">
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
                <input type="text" name="cardNumber" id="cardNumber" maxlength="16" required>
            </p>
            <p>
                <label for="cardMonth">Expiry date:</label>
                <select name="cardMonth" id="cardMonth">
                    <option value="1">01</option>
                    <option value="2">02</option>
                    <option value="3">03</option>
                    <option value="4">04</option>
                    <option value="5">05</option>
                    <option value="6">06</option>
                    <option value="7">07</option>
                    <option value="8">08</option>
                    <option value="9">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select> / <select name="cardYear" id="cardYear">
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
            </select>
            </p>
            <p>
                <label for="cardValidation">CVC:</label>
                <input type="text" class="short" maxlength="4" name="cardValidation" id="cardValidation" required>
            </p>
        </fieldset>
        <input type="submit">
    </form>
    <div id="errors"></div>
</main>
</body>
</html>