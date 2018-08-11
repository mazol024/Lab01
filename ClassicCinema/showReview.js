var Reviews = (function() {
    var pub = {};
    var showHide = true;
    function parseReviews(data,target) {
        var row="";
        var start = "<table><th>Name</th><th>Rating</th>";
        var end = "</table>";
        if (showHide === true) {
            $(data).find("review").each(function () {
                var rating = $(this).find("rating")[0].textContent;
                var user = $(this).find("user")[0].textContent;
                row = row + "<tr><td>" + user + ":</td> <td>" + rating + "</td></tr>";
            });
            target.html(start + row + end);
            showHide = false;
        } else {
            target.html("");
            showHide = true;
        }
    }
    function showReviews() {
        var xmlSource, target;
        xmlSource = $(this).parent().siblings("img").attr("src");

        /*
        xmlSource = "reviews" + xmlSource.substring(6);
        xmlSource = xmlSource.substring(0,xmlSource.length-3) + "xml";
        */
        xmlSource = "reviews" + (xmlSource.substring(6)).substring(0, (xmlSource.substring(6)).length - 3) + "xml";
        target = $(this).siblings(".review");
        /*  alert("xmlSource  = " + xmlSource);*/
        if (showHide === true) {
            $.ajax({
                type: "GET",
                url: xmlSource,
                cache: false,
                success: function (data) {
                    parseReviews(data, target);
                }
            });
        } else {
            parseReviews(null, target);
        }
    }
    pub.setup = function() {
        var setButtons = "<input type=\"button\" class=\"showReviews\" value=\"Show/Hide Reviews\">" +
            "<div class=\"review\"></div>";
        $(".buy").after(setButtons);
        $(".showReviews").click(showReviews);
    };
    return pub;
}());
$(document).ready(Reviews.setup);