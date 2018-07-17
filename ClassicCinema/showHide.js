
function showHideDetails() {
    "use strict";
    var paragraphs , p;

    //alert("Not implemented yet");
    paragraphs = this.parentNode.getElementsByTagName("p");
    //paragraphs = this.childNodes;
    for (p = 0; p < paragraphs.length; p+=1) {

        if (paragraphs[p].style.display === "none") {
            paragraphs[p].style.display = "block";
            this.style.color = "black";
        } else {
            paragraphs[p].style.display = "none";
            this.style.color = "red";
        }
    }

}
function setup() {
    "use strict";
    var films, f, title;
    films = document.getElementsByClassName("film");
    for (f = 0; f < films.length; f+=1) {
        title = films[f].getElementsByTagName("h3")[0];
        title.onclick = showHideDetails;
        title.style.cursor = "pointer";
    }
}
if (document.getElementById) {
    window.onload = setup;
}
