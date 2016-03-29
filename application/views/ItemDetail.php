<!DOCTYPE html>
<html>
<head>
	<title>Add or Edit an Item</title>
<style type="text/css">
	#container{
		width:80%;
		margin:0px auto;
		border:1px solid silver;
		padding:10px;
	}
	#userInfo{
		width:40%;
		height:auto;
		border:1px solid silver;
		padding:10px;
		display: inline-block;
	}
	#product{
		display:inline-block;
		vertical-align: top;
		border:1px solid silver;
		margin-left:5%;
		width:50%;
		margin-top:5%;
	}
	#status{
		background-color: green;
		width:130px;
		text-align: left;
		vertical-align: top;
		margin-left: 5%;
		margin-top: 5%;
	}
	#productWrapper{
	    width: 40%;
	    height: 600px;
	    display: inline-block;
	    vertical-align: top;
	    border: 1px solid silver;
	}
	#prices{
		border: 1px solid silver;
		width:100px;
		display:inline-block;
		margin-left: 5%;
    	margin-top: 5%;
	}
</style>
</head>
<body>
	<div id="container">
		<div id="userInfo">
		<h4>Order ID: 1</h4>
		<p>Customer shipping info:</p>
		<p>name: bob</p>
		<p>address: 123 dojo way</p>
		<p>city: seattle</p>
		<p>state: wa</p>
		<p>zip: 98133</p> 
		<h4>Customer billing info:</h4>
		<p>name: bob</p>
		<p>address: 123 dojo way</p>
		<p>city: seattle</p>
		<p>state: wa</p>
		<p>zip: 98133</p>
		</div>
		<div id="productWrapper">
			<div id="product">
			<table>
				<thead>
					<tr>
						<td>ID</td>
						<td>Item</td>
						<td>Price</td>
						<td>Quantity</td>
						<td>Total</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>35</td>
						<td>Cup</td>
						<td>$9.99</td>
						<td>2</td>
						<td>$9.99</td>
					</tr>
				</tbody>
			</table>
			</div>
			<div id="status">
			Status: Shipped
			</div>
			<div id="prices">
			<p>Sub total: $29.98</p>
			<p>Shipping: $1.00</p>
			<p>Total Price: $30.98</p>
			</div>
		</div>
	</div>
</body>
</html>