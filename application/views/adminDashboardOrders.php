<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Orders</title>
<style type="text/css">
	#container{
		margin:0px auto;
		width:90%;
		height:800px;
		border:1px solid silver;
		padding:10px;
	}
	#dropDown{
		text-align: right;
		margin-left: 80%;
	}
	table{
		width:80%;
	}
	table, tr, td{
		border:1px solid black;
	}
	#bottomNav{
		text-align: center;
		margin-top: 45%;
	}
</style>
</head>
<body>
	<div id="container">
		<form action='' method='post'>
			<input type="search" name="searchbar">
			<select id="dropDown">
				<option value="All">All</option>
				<option value="InProgress">Order In Progress</option>
				<option value="Shipped">Shipped</option>
				<option value="Canceled">Canceled</option>
			</select>
		</form>
		<table>
			<thead>
				<tr>
					<td>Order ID</td>
					<td>Name</td>
					<td>Date</td>
					<td>Billing Address</td>
					<td>Total</td>
					<td>Status</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Kevin</td>
					<td>09/25/14</td>
					<td>1871 Echo Park Ave.</td>
					<td>$66.66</td>
					<td>
						<form action='' method='post'>
						<select>
						<option value="All">All</option>
						<option value="InProgress">Order In Progress</option>
						<option value="Shipped">Shipped</option>
						<option value="Canceled">Canceled</option>
						</select>
						</form>
					</td>
				</tr>
			</tbody>
		</table>
		<div id="bottomNav">
		<a>1</a> | <a>2</a> | <a>3</a> | <a>4</a> | <a>5</a> | <a>6</a> | <a>7</a> | <a>8</a> | <a>9</a> | <a>10</a> | 
		</div>
	</div>
</body>
</html>