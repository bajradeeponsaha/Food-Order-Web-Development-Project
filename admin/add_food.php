<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="food_process.php" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Picture</td>
				<td><input type="file" name="picture"></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="number" name="price"></td>
			</tr>
			<tr>
				<td>Category</td>
				<td><select name="category">
					<option>Slect Category</option>
					<option value="veg">Veg</option>
					<option value="nonveg">Non-Veg</option>
				</select></td>
			</tr>
			<tr>
				<td>Foods Description</td>
				<td>
					<textarea rows="4" cols="20" name="des"></textarea>
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>

</body>
</html>