<?php
//Name: ANCHETA, Jesus Jr
//Course: INT322SAA
//Lab 4: PHP & MySQL

//open and read content of the file and save it to a variable
$myfile = fopen("deadLanguage.txt", "r") or die ("Unable to open the file!");
$textFile = fread($myfile,filesize("deadLanguage.txt"));

//count the number of instances of "wh" 
$preEdit = substr_count($textFile,'wh');
echo "<br><mark>Number of instances of 'wh*':" . $preEdit . "</mark><br><br>";

//search, replace and count number of replacement using regular expression
$postEdit = 0;
$pattern = "/\((\w*\s*\w*)\)/";
$replace ="(*wh*)";
echo preg_replace($pattern,$replace, $textFile, -1, $postEdit);
echo "<br><mark>Number of Replacement for '(xxxx)': " . $postEdit . "</mark><br>";

//Move the file pointer to character 782
fseek($myfile,782);
echo "<br><mark> File Position:" . ftell($myfile)."</mark><br>";

//Read the file starting from character 782 up to end of file and save it to a variable 
$partFile = fread($myfile,filesize("deadLanguage.txt"));
echo "<br><mark>Selected Text</mark><br>";
echo $partFile;

//search, replace and count number of replacement using regular expression of the selected text
$selection = 0;
$partFile = preg_replace("/wha/","which", $partFile, -1, $selection);
echo "<br><mark>Number of Replacement on the selected text: " . $selection . "</mark><br>";
echo "<br><mark>Selected Text after replacement</mark><br>";
echo $partFile;

//write the selected and edited file content to a new file
$newfile = fopen("newFile.txt", "w+") or die ("Unable to open the file!");
fwrite($newfile, $partFile);
fclose($myfile);

//create database connection & add data in the database
include "../../assign1/a1.lib";
$connect = connectionDB();
if($connect) {
    $query = "INSERT INTO editing (preedit, postedit, selection) VALUES ('$preEdit','$postEdit','$selection')";
    mysqli_query($connect, $query);
}
else{
    die ("Unable to connect to database!");
}
mysqli_close($connect);
?>