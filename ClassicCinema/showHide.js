function setup() {
    "use strict";
    var films, f, title,images;
    films = document.getElementsByClassName("film");
    for (f = 0; f < films.length; f+=1) {
        title = films[f].getElementsByTagName("h3")[0];
        title.onclick = showHideDetails;
        title.style.cursor = "pointer";
        images = films[f].getElementsByTagName("img")[0];
        images.onclick = showHideDetails;
        images.style.cursor = "pointer";
    }

}

function showHideDetails() {
    "use strict";
    var paragraphs , p, images;

    //alert("Not implemented yet");
    paragraphs = this.parentNode.getElementsByTagName("p");
    images = this.parentNode.getElementsByTagName("img");

    //paragraphs = this.childNodes;
    for (p = 0; p < paragraphs.length; p+=1) {

        if (paragraphs[p].style.display === "none") {
            paragraphs[p].style.display = "block";
            images[0].style.display = "block";
        } else {
            paragraphs[p].style.display = "none";
            images[0].style.display = "none";
        }
    }
}
if (document.getElementById) {
    window.onload = setup;
}
