var imageList, imageIndex;
function nextImage() {
    var target;
    target = document.getElementById("carousel");
    target.innerHTML = "<img src=" + imageList[imageIndex] + ">";
        //alert(test);
        if (imageIndex < 2 ) {
            imageIndex +=1;
        }
        else {
            imageIndex = 0;
        }
}
function setup() {
    imageList = [];
    imageList.push("images/Metropolis.jpg");
    imageList.push("images/Plan_9_from_Outer_Space.jpg");
    imageList.push("images/Vertigo.jpg");
    imageIndex = 0;
    setInterval(nextImage, 3000);
}
if (document.getElementById) {
    window.onload = setup;
}

