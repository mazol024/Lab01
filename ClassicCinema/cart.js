var cart = (function(){
    var target ;
    var pub = {};
    var myObject = [];
    var i,strObj
    function clicked(){
        /*alert("Add to Cart button Clicked!");*/
        var price , filmname;


        filmname = this.parentNode.parentNode.getElementsByTagName("h3");
        price = this.parentNode.getElementsByClassName("price");
        myObject.push({title:filmname[0].textContent,price:price[0].textContent});

        /*strObj = strObj + myObject[0].title + " -> " + myObject[i].price + "\n ";*/
        Cookie.set(JSON.stringify(filmname[0].textContent),JSON.stringify(price[0].textContent),"");
        alert(JSON.stringify(myObject));

    }
    pub.setup = function() {

    target = document.getElementsByClassName("buy");
    for(i=0;i<target.length;i++){
        target[i].onclick = clicked;
    }


    };
    return pub; }());


if (window.addEventListener) {
    window.addEventListener("load", cart.setup);
} else if (window.attachEvent) {
    window.attachEvent("onload", cart.setup);
} else {
    alert("Could not attach ’cart.setup’ to the ’window.onload’ event");
}