<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Products</title>
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
	#add{
		display:inline;
		align-content: right;
		margin-left: 55%;
	}
</style>
</head>
<body>
	<div id="container">
		<form action='' method='post'>
			<input type="search" name="searchbar">
			<input type="submit" id="add" name="add" value="Add new product">
		</form>
		<table>
			<thead>
				<tr>
					<td>Picture</td>
					<td>ID</td>
					<td>Name</td>
					<td>Inventory Count</td>
					<td>Quantity Sold</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Kevin</td>
					<td>09/25/14</td>
					<td>1871 Echo Park Ave.</td>
					<td>$66.66</td>
					<td><a href=''>edit </a><a href=''>delete</a></td>
				</tr>
			</tbody>
		</table>
		<div id="bottomNav">
		<a>1</a> | <a>2</a> | <a>3</a> | <a>4</a> | <a>5</a> | <a>6</a> | <a>7</a> | <a>8</a> | <a>9</a> | <a>10</a> | 
		</div>
	</div>
</body>
</html>