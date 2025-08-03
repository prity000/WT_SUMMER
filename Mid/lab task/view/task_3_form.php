<!DOCTYPE html>
<html>
<head>
<script src="..\Js\task_3_valid.js"></script>
<link rel ="stylesheet" type="text\css" href="..\css\task_3_style.css">

</head>
 <body>
    <div class="Form">
        <h1 style ="color:red">Donor Information Form</h1>
        <table class="form_input_table">
            <tr>
                <td>First Name </td>
</tr>
        <tr>
            <td><input type="text"></td>
            </tr>

            <tr>
                <td>Email</td></tr>
                <tr>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Phone</td></tr>
                <tr>
                <td><input type="text"></td>
            </tr>
            <tr>
            <td>Password</td></tr>
            <tr>
            <td><input type="text"></td>
           </tr>
           <tr>
            <tr><td>Donation Amount</td></tr>
           <tr><td>
            <input type="radio" name="Payment Amount"id ="1">None
            <input type="radio" name="Payment Amount"id ="2">1000
            <input type="radio" name="Payment Amount"id ="3">1500
            <input type="radio" name="Payment Amount"id ="4">2000
            <input type="radio" name="Payment Amount"id ="5">2500

           </td></tr>
           <tr>
            <td>Amount</td>
           </tr>
           <tr>
            <td><input type="text"></td>
           </tr>
           <tr><td>Payment Mathod</td></tr>
           <tr><td>
            <input type ="radio"name ="Payment Method" id="1">Cash
            <input type ="radio"name ="Payment Method" id="2">Card
            <input type ="radio"name ="Payment Method" id="3">Cheque
            <input type ="radio"name ="Payment Method" id="4">Online Banking
           </td></tr>
           <tr>
            <td><input type ="checkbox" name=" "id ="" >I am interested in donation</td>
           </tr>

           <tr>
            <td><h2 class ="header"> Additional Information</h2></td>
           </tr>
           <tr><td>
            <input type="checkbox" name ="" id ="" >I would like to remain anonymas.
           </td></tr>
           <tr><td>
            Comment
           </td></tr>
           <tr><td>
            <textarea rows="2" clos="" name="Comment Box"></textarea>
           </td></tr>
           <tr><td>
            <input type ="button" value= "Reset" name="Reset">
            <input type="button" value="Submit" name ="Submit">
           </td></tr>
    </div>
 </body>

</html>