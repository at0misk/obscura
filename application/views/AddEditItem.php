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
</style>
</head>
<body>
	<div id="container">
		<h3>Edit Product ID 3</h3>
		<form>
		<p>Name: <input type="text" name="name"></p>
		<p>Description: <textarea cols="80" cols="8"></textarea></p>
		<p>Catagories: <select>
			<option>Cat1</option>
			<option>Cat2</option>
			<option>Cat3</option>
			<option>Cat4</option>
			<option>Cat5</option>
			<option>Cat6</option>
		</select></p>
		<p>or add new catagory: <input type="text" name="newCat"></p>
		<p>Images: <button>Upload</button></p>
		<button>Cancel</button><button>preview</button>
		<input type="submit" value="update">
		</form>
	</div>
</body>
</html>