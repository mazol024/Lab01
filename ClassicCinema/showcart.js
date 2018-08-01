var Showcart = (function(){
    var pub = {};
    var i,cookies,name,price,cookie ;
    var text,target,summ;
    text = "";
    summ = 0;
    pub.setup = function() {
        cookies = document.cookie.split(";");
        for (i=0; i< cookies.length; i++)
        {
            cookie = cookies[i].trim();
            name = decodeURIComponent(cookie.substring(0, cookie.indexOf("=")));
            price = Cookie.get(name);
            /*alert(( name ) + "->  "+ price );*/
            text =  text + name + "  price:  "+ price + "<br>";
            summ = summ + parseFloat(price);
        }
        /*alert(text);*/
        /*text = text + "\nTotal cost  : " + summ;*/
        target = document.getElementById("cart1");
        target.innerHTML =  text + "<hr><br>"+ "\nTotal cost  : " + summ;
        /*target.innerText = " Total cost  : " + summ;*/
    };
    return pub; }());


if (window.addEventListener) {
    window.addEventListener("load", Showcart.setup);
} else if (window.attachEvent) {
    window.attachEvent("onload", Showcart.setup);
} else {
    alert("Could not attach ’Showcart.setup’ to the ’window.onload’ event");
}
/*

function showcart()
{
    var i,cookies,name,price,cookie ;
    var text,target;
    text = "";

    cookies = document.cookie.split(";");
    for (i=0; i< cookies.length; i++)
    {
        cookie = cookies[i].trim();
        name = decodeURIComponent(cookie.substring(0, cookie.indexOf("=")));
        price = Cookie.get(name);
        /!*alert(( name ) + "->  "+ price );*!/
        text =  text + name + "->  "+ price + "\n";
    }
    alert(text);

}
showcart();
*/
