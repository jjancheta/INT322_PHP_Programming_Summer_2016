<?php
    /*Name:  ANCHETA, Jesus Jr
      Course:  INT322SAA
      Description: Assignment2*/

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $subject = "Dokuwiki Site: " . $_POST['subject'];
        $name = $_POST['name'];
        $message = $_POST['message'];
        $message = "Sender's Name : " .$name . "\r\n" .
                   "Sender's Email : " .$email . "\r\n\r\n" .
                   "Message: \r\n" . $message;
        $headers = "From: " . $email . "\r\n";
        $to = 'jjancheta@myseneca.ca';
        if(mail($to, $subject, $message, $headers)){ 
          header ('Refresh: 0; url=doku.php?id=contact');
          echo "<script> alert ('Your e-mail has been sent!')</script>";
        }
    }
    else{            
?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Contact</title>
            <style>
                input[type="text"] {
                     width: 380px;
                     height: 30px;
                     font-size: 1em;
                }
                input[type="email"] {
                     width: 380px;
                     height: 30px;
                     font-size: 1em;
                }
                textarea{
                    resize:none;
                    height: 200px;
                    width: 380px;
                    font-size: 1em;
                }
                
                 input[type="submit"] {
                    background: #939B00 url('images/buttonbg.gif') repeat-x;
                    border: solid 1px #5F6800;
                    font-weight: bold;
                    padding: 0.25em;
                    font-size: 1em;
                    color: #F2F3DE;
                    vertical-align: middle;
                }
                
            </style>
        </head>
        <body>
            <form name="contact" method="post" action="contact.php">
                <table>
                   <tr>
                    <td>
                       <h3>Your name:</h3>
                    </td>
                    <td>
                      <input type="text" name ="name" placeholder="*required" required="required">
                    </td>
                   </tr>
                   <tr>
                    <td>
                       <h3>Your email: </h3> 
                    </td>
                    <td>
                      <input type="email" name ="email" placeholder="*required" required="required">
                    </td>
                   </tr>
                   <tr>
                    <td>
                       <h3>Subject: </h3> 
                    </td>
                    <td>
                       <input type="text" name ="subject" placeholder="*required" required="required">
                    </td>
                   </tr> 
                 <tr>
                    <td>
                        <h3>Message: </h3>
                    </td>
                    <td>
                       <textarea name ="message" placeholder="Type your message here." required="required"></textarea><br>
                    </td>
                   </tr> 
                </table>
                <p><input type="submit" name="submit" value="Send Email"></p>
            </form>
        </body>
    <?php
        }
    ?>
    </html>