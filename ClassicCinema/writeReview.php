<?php
if (session_id() === "") {
    session_start();
}
$reviews = simplexml_load_file('./reviews/' . $_POST['xmlFileName'] . '.xml');
$newReview = $reviews->addChild('review');
$newReview ->addChild('user', $_SESSION['authenticatedUser']);
$newReview ->addChild('rating', $_POST['rating']);
$reviews->saveXML('./reviews/' . $_POST['xmlFileName'] . '.xml');
echo "Review written";
/*if ( $_SESSION["lastPage"] !== 'register.php') {
    header("Location: " . $_SESSION["lastPage"]);

} else {*/
    header("Location: " . $_SESSION["lastPage"]);

?>