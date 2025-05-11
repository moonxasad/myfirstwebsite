<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $favouritepet = htmlspecialchars($_POST['favouritepet']);

    if(empty($firstname) || empty($lastname) || empty($favouritepet)) {
        Header ('Location: index.php');
    }

    echo "These are the data, that the user submitted:";
    echo "<br>";
    echo "First name: $firstname";
    echo "<br>";
    echo "Last name: $lastname";
    echo "<br>";
    echo "Favourite pet: $favouritepet";
} else {
    Header ('Location: index.php');
}