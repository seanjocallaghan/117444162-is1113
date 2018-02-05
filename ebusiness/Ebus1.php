<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <link rel="stylesheet" href="mystylesheet.css" type="text/css">
        
        
        <!--JQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        
    </head>
    
    <body>
        
        <h4>Select a Product</h4>
        
        <br/>
        
        <form method="POS1" action="Ebus2.php">
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onclick="disablebtnProceed()"/>
                Salesforce @ $100
            </label>
            
            <br/>
            
             <label for="cloud9">
                <input type="radio" id="cloud9" name="product" onclick="disablebtnProceed()"/>
                Cloud9 @ $200
            </label>
            
            <br/>
            
             <label for="gmail">
                <input type="radio" id="" name="product"  onclick="disablebtnProceed()"/>
                Gmail @ $400
            </label>
            
            <br/>
            
            <label for "aws">
                <input type="radio" id="aws" name="product" onclick="disablebtnProceed()"/>
                AWS @ 300$
            </label>
            
            <br/>
            <br/>
            
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
            </label>
             
             <br/>
             
             <label for="total">
                 Total
                 <input type="text" id="total" value="0.00" readonly/>
             </label>
             
        <br/>
             
            <button type="submit" id="btnProceed" disabled> Add to Shopping Cart</button>
             
        </form>
        
       <br/>
       
        <button onclick="calcSub()">Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
       
        </body>
    
    
</html>