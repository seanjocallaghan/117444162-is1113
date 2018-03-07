<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        
        <link rel="stylesheet" href="busstylesheet.css" type="text/css">
    </head>
    
    <body>
        <div class="container">
        <h2 class="ebus3_heading">Purchase Receipt</h2>
        
        <?php  
        // Set session variables
          $_SESSION["name"] = $_POST["name"];
          $_SESSION["email"] = $_POST["email"];
        ?>
        
        <br/>
            <?php
            // Echo session variables that were set on the previous pages
            echo "Name: " . $_SESSION["name"] . ".";
            ?>
        
        <br/>
        <br/>
        
            <?php
            // Echo session variables that were set on the previous pages
            echo "Email: " . $_SESSION["email"] . ".";
            ?>
        
        <br/>
        <br/>
        
            <?php
            // Echo session variables that were set on the previous pages
            echo "Total: " . $_SESSION["total"] . ".";
            ?>
        <br/>
        <br/>
        
        <h4>Thank You for your Business!</h4>
        </div>
    </body>
</html>