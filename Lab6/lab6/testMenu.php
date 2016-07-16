
<!DOCTYPE html>
    <html>
        <head>
            <title>lab6_part3</title>
        </head>
        <style>
                ul {
                    list-style-type: none;
                    margin: 0;
                    padding: 0;
                    width: 200px;
                    background-color: #f1f1f1;
                }
                
                li a {
                    display: block;
                    color: #000;
                    padding: 8px 0 8px 16px;
                    text-decoration: none;
                }
                
                /* Change the link color on hover */
                li a:hover {
                    background-color: #555;
                    color: white;
                }
            </style>
        <body>
          <?php
           include "myClasses.php";
           $menu = new Menu("Vertical Menu", "Home", "News", "Contact");
           echo $menu->displayMenu();
          ?>
        </body>
    </html>