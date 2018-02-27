<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title> Enter Details</title>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body>
        
        <h4>Please enter your payment details.</h4>
        
            <br />
            
            <form method = "POST" action = "Ebus3.php">
                
                <label for="name">
                     Name 
                </label>
                
                <input type="text" id="name" name="name" placeholder="your name">
                    
                <label for="email">
                     E-mail 
                </label>
                
                <input type="email" id="email" name="email" placeholder="your email address">
                    
                <label for="pin">
                     PIN 
                </label>
                
                <input type="password" id="pin" placeholder="Card Pin" maxlength="4">
                    
                <button type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
                
            </form>
            
            <br />
            
            <button onClick="validateDetails()"> Validate </button>
        
        
        
        <?php  
        // Set session variables
          $_SESSION["total"] = $_POST["total"];
          
        ?>
    </body>
    
    
    
</html>