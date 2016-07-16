<?php
    include "myClasses.php";
    if(isset($_POST['users'])){
        $users = new DBLink('users');
        
        //insert statement
        $hashed_password = crypt("secret", "$1\$uDx39@&k$");
        $users->query ("INSERT INTO users (username, password, role, passwordHint)
                      Values('int322@server.com','$hashed_password','user','shh, don\'t tell anyone')");
        
        //update statement
        $users->query("UPDATE users SET role = 'admin' where username = 'james@server.com'");
        
        //select statement
        $result = $users->query ("Select * from users where username='user'");
        if(!$users->emptyResult()){                               //emptyResult function
            while($row = mysqli_fetch_assoc($result)){
                echo "username: " .$row['username'] . " --> role: " . $row['role'] . " --> hint: " . $row['passwordHint'] . "<br/>"; 
            }
        }
        else{
            echo "Record not found!" . "<br/>";
        }
        
    }
  else{
?>


<!DOCTYPE html>
    <html>
        <head>
            <title>lab6_part2</title>
        </head>
        <body>
            <h2>Select Database:</h2>
            <form name="database" method="post" action="testDB.php">
                <p><input type="submit" name="users" value="Users">&nbsp&nbsp
                <input type="submit" name="inventory" value="Inventory"></p>
            </form>
        </body>
        <?php } ?>
    </html>