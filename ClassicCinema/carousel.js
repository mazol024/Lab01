var imageList, imageIndex;
function nextImage() {
// Need some code in here using imageList and imageIndex
var target = document.getElementById("carousel");
//target.innerHTML = "<img src=’" + "images/Metropolis.jpg" +"’>";
    target.innerHTML = "Hello  ";
    target.innerHTML = "<img src=’images/Metropolis.jpg’>";
}
function setup() {
    imageList = [];
    imageList.push("images/Metropolis.jpg");
    imageList.push("images/Plan_9_from_Outer_Space.jpg");
    imageList.push("images/Vertigo.jpg");
    imageIndex = 0;

}
if (document.getElementById) {
    window.onload = setup;

}
nextImage();