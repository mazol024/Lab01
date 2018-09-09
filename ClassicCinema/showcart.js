var Showcart = (function(){
    "use strict";
    var pub = {};
    var myObjs = [];
    var i,name,price,strData ;
    var text,target,summ;
    text = "";
    summ = 0;
    pub.setup = function() {
        strData = Cookie.get("ShoppingCart");
        if (strData == ""){
            /*document.getElementById("checkoutForm").hidden=true;*/
            $("#checkoutForm").hide();
            return "";
        }
        myObjs  = JSON.parse(strData);
        text  = "<table><tr>\n" +
            "    <th style='text-align: left;width: 50%'>Films  Titles</th>\n" +
            "    <th style='text-align: right'>Price</th> \n" +
            "  </tr>\n"
            ;
    if (myObjs != null ) {
        for (i=0; i< myObjs.length; i++)
        {
            name = myObjs[i]["title"];
            price = myObjs[i]["price"];

            text =  text + "<tr><td style='text-align:left; width: 50%'>"+ name + "</td>"+
                "<td style='text-align: right'>" + price + "</td>" +"</tr>";
            summ = summ + parseFloat(price);
        }
        text = text + "</tr></table>"
            + "<hr><br><p style='text-align: center'>"+ "\nTotal cost  : " + summ.toFixed( 2 ) + "</p>";


        /*target = document.getElementById("cart1");
        target.innerHTML =  text + "<hr><br><p style='text-align: center'>"+ "\nTotal cost  : " + summ.toFixed( 2 ) + "</p>";
        */
        $("#cart1").html(text);
    }
        if (document.cookie == "" ) {
            /*document.getElementById("checkoutForm").hidden=true;*/
            $("#checkoutForm").hide();

        } else {
            /*document.getElementById("checkoutForm").hidden=false;*/
            $("#checkoutForm").show();
        }
    };
    return pub; }());

$(document).ready(Showcart.setup);
