<?php
include 'db.php';
$sel = "SELECT * FROM student WHERE id=1";
$sel_run = mysqli_query($conn, $sel);
$count = 1;
while($rows = mysqli_fetch_assoc($sel_run)){
	?>
	<tr>
		<td><?php echo $count; ?></td>
		<td><?php echo $rows['name']; ?></td>
		<td><?php echo $rows['fee']; ?></td>
		<td><?php echo $rows['subject']; ?></td>
		<td>
			<a class="btn btn-success btn-xs">Edit</a>
			<a class="btn btn-danger btn-xs">Delete</a>
		</td>
	</tr>
<?php
	$count++;
}
 ?>
