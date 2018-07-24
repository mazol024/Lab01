var cart = (function(){
    var target ;
    var pub = {};
    function clicked(){
        /*alert("Add to Cart button Clicked!");*/
        var myObject = {};
       /* myObject.title = document.getElementById("h3").valueOf();
        myObject.price = document.getElementById("price").valueOf();*/
       pub.t1 = target;
       myObject = this.previousSibling.valueOf();
       alert(myObject);

    }
    pub.setup = function() {

    target = document.getElementsByClassName("buy");
    for(i=0;i<target.length;i++){
        target[i].onclick = clicked;
    }


    };
    return pub; }());


/*
if (document.getElementById) {
    window.onload = Carousel.setup;
}
*/

if (window.addEventListener) {
    window.addEventListener("load", cart.setup);
} else if (window.attachEvent) {
    window.attachEvent("onload", cart.setup);
} else {
    alert("Could not attach ’cart.setup’ to the ’window.onload’ event");
}