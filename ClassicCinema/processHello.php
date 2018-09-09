<?php
if ( !isset($_GET['user'])  ) {
    echo 'User not set ! ...';
    header('Location: helloForm.html');
    exit;
}
echo 'Start php...';

if (isset($_GET['submit'])) {
    $safe = htmlentities($_GET['user']);
    echo 'Submitted ...';
    echo $safe;
}
?>