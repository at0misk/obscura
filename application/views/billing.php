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

			<script type="text/javascript" src= 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
			<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/redmond/jquery-ui.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

			<link rel="stylesheet" type="text/css" href="style.css">
			<script type="text/javascript">

						$(function() {
			    		$( "#datepicker" ).datepicker();
			  			});
		  	</script>
			<style>

				#wrapper {
					width: 1000px;
					margin: 40px;
				}

				#button {
					margin-left: 764px;
				}

				#total {
					margin-left: 28px;
				}

				#wow {	
					margin-top: 10px;
					width: 500px;
				}

				#bow {
					margin-top: 20px;
					width: 500px;
					margin-left: 40px;
				}

				#chica{
					margin-top: 30px;
					width: 500px;
					margin-left: 40px;
				}


				h3{
					margin-bottom: 20px;
					color: #32AED4;
				}

				.btn-danger {
					margin-left: 387px;
					margin-top: 10px;
					margin-bottom: 40px;
				}


			</style>
   </head> 
   <body>
   		<div id = "wrapper">
	   		<table class="table table-bordered table-striped">
	   			<thead>
	        		<tr class="info">
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
	            		<td>1 <a href="">Update</a>  <span class="glyphicon glyphicon-trash"></span></td>
	            		<td>$99.99</td>

	        		</tr>
	        		<tr>
	            		<td>Triangle</td>
	            		<td>$21.00</td>
	            		<td>2 <a href="">Update</a>  <span class="glyphicon glyphicon-trash"></span></td>
	            		<td>$42.00</td>
	        		</tr>
	    		</tbody> 
			</table>

			<div id="button">
	    		<p id="total"> Total: $121.00 </p>
	    		<button type="button" class="btn btn-info">Continue Wasting Your Paycheck</button>
	    	</div>
		    <form class="form-horizontal" id= "wow" action="" method="post">
		      <h3> Shipping Information </h3>
			  <div class="form-group">
			    <label for="first_name" class="col-sm-2 control-label">First Name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="first_name" placeholder="First Name">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="last_name" class="col-sm-2 control-label">Last Name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="last_name" placeholder="Last Name">
			    </div>
			  </div>
			   <div class="form-group">
			    <label for="address" class="col-sm-2 control-label">Address</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="address" placeholder="Address">
			    </div>
			  </div>
			   <div class="form-group">
			    <label for="address2" class="col-sm-2 control-label">Address2</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="address2" placeholder="Optional">
			    </div>
			  </div>
			   <div class="form-group">
			    <label for="city" class="col-sm-2 control-label">City</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="city" placeholder="City">
			    </div>
			  </div>
			   <div class="form-group">
			    <label for="state" class="col-sm-2 control-label">State</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="state" placeholder="State">
			    </div>
			  </div>
			   <div class="form-group">
			    <label for="zipcode" class="col-sm-2 control-label">Zipcode</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="zipcode" placeholder="Zipcode">
			    </div>
			  </div>  
			  </div>
			</form>

		    <form class="form-horizontal" id= "bow" action="" method="post">
			    <h3> Billing Information </h3>
			    <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <div class="checkbox">
			        <label>
			          <input type="checkbox"> Same as Shipping
			        </label>
			      </div>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="first_name" class="col-sm-2 control-label">First Name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="first_name" placeholder="First Name">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="last_name" class="col-sm-2 control-label">Last Name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="last_name" placeholder="Last Name">
			    </div>
			  </div>
			   <div class="form-group">
			    <label for="address" class="col-sm-2 control-label">Address</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="address" placeholder="Address">
			    </div>
			  </div>
			   <div class="form-group">
			    <label for="address2" class="col-sm-2 control-label">Address2</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="address2" placeholder="Optional">
			    </div>
			  </div>
			   <div class="form-group">
			    <label for="city" class="col-sm-2 control-label">City</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="city" placeholder="City">
			    </div>
			  </div>
			   <div class="form-group">
			    <label for="state" class="col-sm-2 control-label">State</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="state" placeholder="State">
			    </div>
			  </div>
			   <div class="form-group">
			    <label for="zipcode" class="col-sm-2 control-label">Zipcode</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="zipcode" placeholder="Zipcode">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <div class="checkbox">
			        <label>
			          <input type="checkbox"> Remember me
			        </label>
			      </div>
			    </div>
			  </div>
			  </div>
			</form>
			      
		    <form class="form-horizontal" id= "chica" action="" method="post">
		    <h3> Payment </h3>
			  <div class="form-group">
			    <label for="card_name" class="col-sm-2 control-label">Card Type</label>
			    <div class="col-sm-10">
			     <select class="form-control">
					  <option>VISA</option>
					  <option>MASTERCARD</option>
					  <option>AMERICAN EXPRESS</option>
				</select>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="card_name" class="col-sm-2 control-label">Name on Card</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="card_name" placeholder="Name on Card">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="card_no" class="col-sm-2 control-label">Card Number</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="card_no" placeholder="Card Number">
			    </div>
			  </div>
			   <div class="form-group">
			    <label for="security" class="col-sm-2 control-label">Security Code</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="security" placeholder="3-Digit Number on Back of Card">
			    </div>
			  </div>
			   <div class="form-group">
			    <label for="expiration" class="col-sm-2 control-label">Expiration</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="datepicker" placeholder="Expiration Date">
			    </div>
			  </div>
		  		<button type="button" class="btn btn-danger">Pay Up Bitch!</button>  
		 	 </div>
			</form>	
   		</div>
   	</body>
</html>