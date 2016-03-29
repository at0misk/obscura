<!DOCTYPE html>
<html lang="en">
   <head>
        <meta charset="UTF-8">
        <meta name="description" content= "Dojo ecommerce">
        <title>Carts</title>
			        <!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

			<!-- Optional theme -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

			<!-- Latest compiled and minified JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
			
			<link rel="stylesheet" type="text/css" href="style.css">

			<style>
				form {
					margin-left: 20px;
				}
			</style>
   </head> 
   <body>
   		<div id = "wrapper">

   		<table class="table">
   			<thead>
        		<tr>
            		<th>Item</th>
            		<th>Price</th>
            		<th>Quantity</th>
            		<th>Total</th>
        		</tr>
   			</thead>
    		<tbody>
        		<tr>
            		<td>Theremine</td>
           			<td>$99.99</td>
            		<td>1 <a href="">Update</a></td>
            		<td>$99.99</td>

        		</tr>
        		<tr>
            		<td>Triangle</td>
            		<td>$21.00</td>
            		<td>2 <a href="">Update</td>
            		<td>$42.00</td>
        		</tr>
    		</tbody>


 
		</table>

			<form action="" method="post">
		  		<h2> Shipping Information </h2>
			    	<p> First Name: <input type='text' name='first_name' placeholder= 'First Name'> </p>
			    	<p> Last Name: <input type='text' name='last_name' placeholder= 'Last Name'></p>
			    	<p> Address: <input type='text' name='address' placeholder="Address"></p>
			    	<p> Address 2: <input type='text' name='address2' placeholder="Address"></p>
			    	<p> City: <input type='text' name='city' placeholder="City"></p> 
			     	<p> State: <input type='text' name='state' placeholder="State"></p>
			     	<p> Zipcode: <input type='text' name='zipcode' placeholder="Zipcode"></p>
			 </form>

			<form action="" method='post'>		  	
		  		<h2> Billing Information </h2>
		  		   <p><input type="checkbox" name="bill" value="same"> Same as Shipping</p> 
				   <p> First Name: <input type='text' placeholder= 'First Name'> </p>
			    	<p> Last Name: <input type='text' placeholder= 'Last Name'></p>
			    	<p> Address: <input type='text' placeholder="Address"></p>
			    	<p> Address2: <input type='text' placeholder="Address"></p>
			    	<p> City: <input type='text' placeholder="City"></p> 
			     	<p> State: <input type='text' placeholder="State"></p>
			     	<p> Zipcode: <input type='zipcode' name='zipcode' placeholder="Zipcode"></p>
			</form>

			<form action="" method='post'>
				<h2> Payment </h2>	
			     	<p>Name On Card: <input type='text' name='card_name' placeholder="Name On Card"></p>
			     	<p>Card Type:
			     	<input type="radio" name="card" value="visa" checked> VISA
  					<input type="radio" name="card" value="master"> MASTERCARD
  					<input type="radio" name="card" value="american"> AMERICAN EXPRESS
			     	<p> Card Type: <input type='text' name='card_type' placeholder=""></p>
			     	<p>Card Number: <input type='text' name='card_no' placeholder="Card Number"></p>
			     	<p> Security Code: <input type='text' name='code' placeholder="Security Code"></p>
			     	<p> Expiration Date: <input type='text' name='expiration' placeholder="Expiration"></p>
			     	<p> <input type='submit' value='Pay Up Bitch!'> </p>
			</form>
   		</div>
   	</body>
</html>