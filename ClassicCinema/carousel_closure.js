var Carousel = (function(){
    var pub = {};
    var categoryList = []; var categoryIndex = 0;
    function nextCategory() {
        var element = document.getElementById("carousel"); element.innerHTML = categoryList[categoryIndex].makeHTML();
        $("img").fadeToggle(2000);

        categoryIndex += 1;
        if (categoryIndex >= categoryList.length) {
            categoryIndex = 0;
        }
    }
    function MovieCategory(title, image, page) { this.title = title;
        this.image = image;
        this.page = page;
        this.makeHTML = function() {
            return "<a href=" + this.page + "><figure>" +
                "<img src=" + this.image + ">" + "<figcaption>" + this.title + "</figcaption>" + "</figure></a>";
        }; }

    pub.setup = function() {
        categoryList.push(new MovieCategory("Classic",
            "images/Metropolis.jpg", "classic.php"));
        categoryList.push(new MovieCategory("Science Fiction",
        "images/Plan_9_from_Outer_Space.jpg", "scifi.php"));
        categoryList.push(new MovieCategory("Alfred Hitchcock",
            "images/Vertigo.jpg", "hitchcock.php"));
        nextCategory();
        setInterval(nextCategory, 2000);
    };
    return pub; }());


/*
if (document.getElementById) {
    window.onload = Carousel.setup;
}
*/

$(document).ready(Carousel.setup);
/*

if (window.addEventListener) {
    window.addEventListener("load", Carousel.setup);
} else if (window.attachEvent) {
    window.attachEvent("onload", Carousel.setup);
} else {
    alert("Could not attach ’MovieCategories.setup’ to the ’window.onload’ event");
}*/
