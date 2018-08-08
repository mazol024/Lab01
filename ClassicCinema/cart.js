var cart = (function () {
    "use strict";
    var target;
    var pub = {};
    var myObject = [];
    var i;
    var strObj_old;
    var strObj_new;

    function clicked(e) {

        var price, filmname;

        strObj_old = Cookie.get("ShoppingCart");

        if (strObj_old != null) {
            if (strObj_old != "") {
                myObject = JSON.parse(strObj_old);
            }
        }

        //filmname = this.parentNode.parentNode.getElementsByTagName("h3");
        //price = this.parentNode.getElementsByClassName("price");

        filmname = $(this).parent().siblings("h3").text();
        price = $(this).siblings(".price").text();

        /*myObject1.push({title: filmname[0].textContent, price: price[0].textContent});*/

        myObject.push({title: filmname, price: price});
        strObj_new = JSON.stringify(myObject);
        Cookie.set("ShoppingCart", strObj_new, "");
    }

    pub.setup = function () {
        $(".buy").click(clicked);

    };
    return pub;
}());

$(document).ready(cart.setup);