<?php 

include 'dbconnect.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table align="center" cellpadding="8" cellspacing="8" border="1">
		<thead>
			<tr>
				<th>SL NO</th>
				<th>NAME</th>
				<th>PICTURE</th>
				<th>PRICE</th>
				<th>CATEGORY</th>
			</tr>
		</thead>
		<tbody>
			<?php
$sql="SELECT * FROM foods";
$qry=mysqli_query($con,$sql);
$s=1;
while($bag=mysqli_fetch_array($qry)){
			  ?>
			<tr>
				<td><?php echo $s++; ?></td>
				<td><?php echo $bag['name']; ?></td>
				<td><img src="<?php echo $bag['picture']; ?>" height="100px"></td>
				<td><?php echo $bag['price']; ?></td>
				<td><?php echo $bag['category']; ?></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</body>
</html>