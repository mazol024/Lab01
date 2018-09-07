var showHide = (function() {
    "use strict";
    var pub = {};

    function showHideDetails() {
            $(this).siblings().toggle(1000);
       /* var paragraphs, p, images;
        paragraphs = this.parentNode.getElementsByTagName("p");
        images = this.parentNode.getElementsByTagName("img");
        for (p = 0; p < paragraphs.length; p += 1) {

            if (paragraphs[p].style.display === "none") {
                paragraphs[p].style.display = "block";
                images[0].style.display = "block";
            } else {
                paragraphs[p].style.display = "none";
                images[0].style.display = "none";
            }
        }*/
    }

    pub.setup = function () {
        var films, f, title, images;
        films = document.getElementsByClassName("film");
        for (f = 0; f < films.length; f += 1) {
            title = films[f].getElementsByTagName("h3")[0];
            title.onclick = showHideDetails;
            title.style.cursor = "pointer";
            images = films[f].getElementsByTagName("img")[0];
            images.onclick = showHideDetails;
            images.style.cursor = "pointer";
        }

    };
    return pub;}());

$(document).ready(showHide.setup);

/*
if (window.addEventListener) {
    window.addEventListener("load", showHide.setup);
} else if (window.attachEvent) {
    window.attachEvent("onload", showHide.setup);
} else {
    alert("Could not attach ’showHide.setup’ to the ’window.onload’ event");
}*/
