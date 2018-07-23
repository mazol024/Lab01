var objList,objIndex;

function MovieCategory(title, image,page) {
    "use strict"
    this.page = page;
    this.title = title;
    this.image = image;
    this.makeHTML = function() {
        var target;
        target = document.getElementById("carousel");
        target.innerHTML ="<a href=" + this.page+ "><figure>\n" +
            "<img src=" + this.image +"><figcaption>" + this.title + "</figcaption>\n" +
            "</figure></a> ";
       }
}


function nextObject() {
    "use strict"
    objList[objIndex].makeHTML();
    if (objIndex < 2 ) {
        objIndex +=1;
    }
    else {
        objIndex = 0;
    }
}
function setup() {
    "use strict"
    objList = [];
    var classics = new MovieCategory("Classics","images/Metropolis.jpg","classic.html");
    objList.push(classics);
    var scifi = new MovieCategory("SciFi","images/Plan_9_from_Outer_Space.jpg","scifi.html");
    objList.push(scifi);
    var hitchcock = new MovieCategory("Hitchcock","images/Vertigo.jpg","hitchcock.html");
    objList.push(hitchcock);
    objIndex = 0;
    setInterval(nextObject, 2000);
}
if (document.getElementById) {
    window.onload = setup;
}
