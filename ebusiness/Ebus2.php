<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
           <title> Enter Details</title>
        <link rel="stylesheet" href="busstylesheet.css" type="text/css">
        
      
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body>
        
        <h2>Please enter your payment details.</h2>
        
            <br />
            
            <form method = "POST" action = "Ebus3.php">
                
                <label for="name">
                     Name: 
                </label>
                
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="name" name="name" placeholder="Your name">
                
                <br/>
                <br/>
                <br/>
                    
                <label for="email">
                     E-mail: 
                </label>
                
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="email" id="email" name="email" placeholder="Your email address">
                
                <br/>
                <br/>
                <br/>
                <label for="pin">
                     PIN: 
                </label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" id="pin" placeholder="Card Pin" maxlength="4">
                <br/>
                <br/>
                    
                <button type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
                
            </form>
            
            <br />
            <br/>
            
            <button onClick="validateDetails()"> Validate </button>
        
        
        
            <?php  
        // Set session variables
          $_SESSION["total"] = $_POST["total"];
          
        ?>
    </body>
    
    
    
</html>