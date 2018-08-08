var cart = (function () {
    var target;
    var pub = {};
    var myObject1 = [];
    var i;
    var strObj_old;
    var strObj_new;

    function clicked() {
        /*alert("Add to Cart button Clicked!");*/
        var price, filmname;

        strObj_old = Cookie.get("ShoppingCart");

        if (strObj_old != null) {
            if (strObj_old != "")
                myObject1 = JSON.parse(strObj_old);
        }

        filmname = this.parentNode.parentNode.getElementsByTagName("h3");
        price = this.parentNode.getElementsByClassName("price");
        myObject1.push({title: filmname[0].textContent, price: price[0].textContent});
        strObj_new = JSON.stringify(myObject1);
        Cookie.set("ShoppingCart", strObj_new, "");
    }

    pub.setup = function () {

        target = document.getElementsByClassName("buy");
        for (i = 0; i < target.length; i++) {
            target[i].onclick = clicked;
        }


    };
    return pub;
}());


if (window.addEventListener) {
    window.addEventListener("load", cart.setup);
} else if (window.attachEvent) {
    window.attachEvent("onload", cart.setup);
} else {
    alert("Could not attach ’cart.setup’ to the ’window.onload’ event");
}