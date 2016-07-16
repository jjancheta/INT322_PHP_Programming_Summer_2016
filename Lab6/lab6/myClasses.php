<?php
 class DBLink {
    private $link, $lastResult;
    public function __construct ($database_name) {
        include "library.php";
        $link = connectionDB();
        mysqli_select_db ($link, $database_name);
        $this -> link = $link;
    }
    
    function query ($sql_query) {
        $lastResult = mysqli_query ($this -> link, $sql_query);
        $this -> lastResult = $lastResult;
        return $lastResult;
    }
    
    function emptyResult(){
        $noRecords = true;
        if(mysqli_num_rows($this->lastResult) > 0){
            $noRecords = false;
        }
        return $noRecords;
    }
    
    function __destruct() {
        mysqli_close ($this -> link);
    }
  }
  
  class Menu{
   private $title, $menu1, $menu2, $menu3;
   public function __construct($string1, $string2, $string3, $string4){
      $this->title = $string1;
      $this->menu1 = $string2;
      $this->menu2 = $string3;
      $this->menu3 = $string4;
   }
   
   function displayMenu(){
     $display = "<h2>".$this->title."<h2/>";;
     $display .= "<ul>";
     $display .= "<li><a href=\"#\">".$this->menu1. "</a></li>";
     $display .= "<li><a href=\"#\">".$this->menu2. "</a></li>";
     $display .= "<li><a href=\"#\">".$this->menu3. "</a></li>";
     $display .= "</ul>";
     return $display;
   }
  
   
  }
 
/* $db = new DBLink ("users");
 $result = $db->query ("Select * from users");
 
 while($row = mysqli_fetch_assoc($result)){
    echo "user name: " .$row['username'] . " = password: " . $row['password'] . "<br/>"; 
 }*/
 
 ?>