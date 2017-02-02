<?php 
include 'db.php';
$sel = "SELECT * FROM student";
$sel_run = mysqli_query($conn, $sel);
while($rows = mysqli_fetch_assoc($sel_run)){ ?>
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
	// this is a comment I'm making for purposes of version control 
	$count++;
}
 ?>




