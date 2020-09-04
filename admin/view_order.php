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
			  <th>Sl No.</th>
              <th>Food Name</th>
              <th>Quantity</th>
              <th>Total</th>
              <th>Phone</th>
              <th>Delivery Address</th>
              <th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php
$sql="SELECT * FROM `orders`";
$qry=mysqli_query($con,$sql);
$s=1;

while($bag=mysqli_fetch_array($qry)){
	$fid=$bag['food_id'];
	$sql="SELECT name,picture FROM foods WHERE id='$fid'";
	$qry1=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($qry1);
			  ?>
			<tr>
				<td><?php echo $s++; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><img src="<?php echo $row['picture']; ?>" height="100px"></td>
				<td><?php echo $bag['total']; ?></td>
				<td><?php echo $bag['phone']; ?></td>
				<td><?php echo $bag['delv_add'] ?></td>
				<td>
					<?php if($bag['status']=='processing'){ ?>
					<a href="changestatus.php?id=<?php echo $bag['id'] ?>&s=out">Update to Out For Delevery</a>
					<?php }else if($bag['status']=='out'){ ?>
					<a href="changestatus.php?id=<?php echo $bag['id'] ?>&s=done">Update to Delevered</a>
					<?php }else{ ?>
					Delevered
					<?php } ?>	
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</body>
</html>