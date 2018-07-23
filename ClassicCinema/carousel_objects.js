var objList,objIndex;

function MovieCategory(title, image, page) {
    this.title = title;
    this.image = image;
    this.page = page;
    this.makeHTML = function() {
        var target;
        target = document.getElementById("carousel");
        target.innerHTML ="<a href=’classic.html’><figure>\n" +
            "        <img src=’images/Metropolis.jpg’><figcaption>Classic Movies</figcaption>\n" +
            "        </figure></a> "
       }
}


function nextObject() {
    var target;
    target = document.getElementById("carousel");
    target.innerHTML = "<img src=" + objList[objIndex] + ">";
    if (objIndex < 2 ) {
        objIndex +=1;
    }
    else {
        objIndex = 0;
    }
}
function setup() {
    objList = [];

    objList.push("images/Metropolis.jpg");
    objList.push("images/Plan_9_from_Outer_Space.jpg");
    objList.push("images/Vertigo.jpg");
    objIndex = 0;
    setInterval(nextObject, 2000);
}
if (document.getElementById) {
    window.onload = setup;
}
