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

	//this function will display the header & menu of each page
    function title($title){
		echo "<img src=\"logo3.jpg\" alt=\"company logo\">";
		echo "<p class='menu' style='text-align: left;'>$title
		     <span style='float: right;'><a href = 'add.php'>Add</a> &nbsp&nbsp&nbsp <a href = 'view.php'>View All</a></span></p>";
		echo "<hr/>";	
	}

	//this function will clean the data inputs
    function cleanInput($var){
         $var = trim($var);
         $var = stripslashes($var);
         $var = htmlspecialchars($var);
      return $var;
    }
	
	//establish connection to database
	function connectionDB(){
		include "../../secret/topsecret.php";
		$connect = mysqli_connect($serverDB, $userName, $userPwd, $nameDB);
		return $connect;
	}
?>


