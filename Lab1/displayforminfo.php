<?php
    /*$title = $_GET['title'];
    $firstName = $_GET['firstName'];
    $lastName = $_GET['lastName'];
    $organization = $_GET['organization'];
    $email = $_GET['email'];
    $dayAttend = $_GET['dayAttend'];
    $tShirt = $_GET['t-shirt'];*/
    
    print_r($_POST);
    
    $title = $_POST['title'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $organization = $_POST['organization'];
    $email = $_POST['email'];
    $dayAttend = $_POST['dayAttend'];
    $tShirt = $_POST['t-shirt'];
    
    echo "Title: " . $title . "<br>";
    echo "Firstname: " . $firstName . "<br>";
    echo "Lastname: " . $lastName . "<br>";
    echo "Organization: " . $organization . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Day Attending: " . $dayAttend . "<br>";
    echo "T-Shirt Size: " . $tShirt . "<br>";

?>