<?php
/*
Subject Code and Section: INT322SAA
Student Name : ANCHETA, Jesus Jr.
Date Submitted : 21 June 2016

Student Declaration

I/we declare that the attached assignment is my/our own work in accordance with Seneca Academic Policy.
No part of this assignment has been copied manually or electronically from any other source
(including web sites) or distributed to other students.

Name: ANCHETA, Jesus Jr
Student ID: 017 433 152
*/
ob_start();

//this program will reverse the flag/value of column deleted.
    include "a1.lib";    
    $connect = connectionDB();
    $id = $_GET['id'];
    $newValue = ($_GET['del']=='n')? 'y' : 'n';
    mysqli_query($connect, "UPDATE inventory SET deleted = '$newValue' where id = $id");
    mysqli_close($connect);
    header("Location:view.php");
?>