<?php    
    if(isset($_POST['submit'])){
        include "../../assign1/a1.lib";
        $connect = connectionDB();
        $username = cleanInput($_POST['username']);
        $password = cleanInput($_POST['password']);
        $salt = "$1\$uDx39@&k$";                   
        if($connect){
            $result = mysqli_query($connect, "SELECT * from users where username ='$username'");
            $loginOk = false;
            if(mysqli_num_rows($result) > 0){
                while($row=mysqli_fetch_assoc($result)){
                    $passwordDB = $row['password'];
                    if(crypt($password, $passwordDB) == $passwordDB){
                        session_start();
                        $_SESSION['username'] = $username;
                        mysqli_free_result($result);
                        mysqli_close($connect);
                        header("Location: lab6_loggedin_protected.php");
                        $loginOk = true;
                    }
                }
            } 
        }    
        else{  
            die("Cannot connect to database");
        }
        
    }
?>

<!DOCTYPE html>
    <html>
        <head>
            <title>lab6_part1</title>
        </head>
        <body>
            <h2>Login</h2>
            <?php if(isset($_POST['submit']) && !$loginOk) echo "<mark>Invalid username or password.</mark>" ?>
            <form name="login" method="post" action="lab6_part1.php">
                <p><label for="username">Username:</label>&nbsp<input type="text" name="username"></p>
                <p><label for="password">Password:</label>&nbsp&nbsp<input type="password" name="password"></p>
                <p><input type="submit" name="submit" value="Login">&nbsp&nbsp
                <input type="submit" name="forgot" value="Forgot your password"></p>
            </form>
        </body>
    </html>