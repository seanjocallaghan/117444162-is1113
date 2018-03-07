<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <link rel="stylesheet" href="busstylesheet.css" type="text/css">
        
        
        <!--JQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        
    </head>
    
    <body>
        
         <h1 style="background-color:white;" class="mainheading"> Shop </h1>
        </br>
        <ul>
           <li> <a class="active" href="Homepage"> Home </a></li>
           <li> <a class="active" href="ebusiness/business.html"> Business Home </a></li>
           <li> <a class="active" href="info.html"> About Us </a></li>
           
        
        
       </ul>
       
       <br/>
       
       <h2>Please Select a Product</h2>
       <br/>
        
        <form method="POS1" action="Ebus2.php">
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onclick="disablebtnProceed()"/>
                Salesforce @ $100
            </label>
            
            <br/>
            <br/>
            
             <label for="cloud9">
                <input type="radio" id="cloud9" name="product" onclick="disablebtnProceed()"/>
                Cloud9 @ $200
            </label>
            <br/>
            <br/>
            
             <label for="gmail">
                <input type="radio" id="gmail" name="product"  onclick="disablebtnProceed()"/>
                Gmail @ $400
            </label>
            
            <br/>
            <br/>
            <label for "aws">
                <input type="radio" id="aws" name="product" onclick="disablebtnProceed()"/>
                AWS @ 300$
            </label>
            
            <br/>
            <br/>
            
            <label for="subtotal">
                Sub Total
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="subtotal" value="0.00" readonly/>
            </label>
            
            <br/>
            <br/>
            
            <label for="discount">
                Discount @ 5%
                <input type="text" id="discount" value="0.00" readonly/>
            </label>
            
            <br/>
            <br/>
            
            <label for="vat">
                VAT @ 10%
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="vat" value="0.00" readonly/>
            </label>
             
             <br/>
             <br/>
             <label for="total">
                 Total
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="total" name="total" value="0.00" readonly/>
             </label>
             
        <br/>
        <br/>
        <button type="submit" id="btnProceed" disabled> Add to Shopping Cart</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
             
        </form>
        
       <br/>
       
       
        <button onclick="calcSub()">Calculate Cost</button>
        </body>
    
    
</html>