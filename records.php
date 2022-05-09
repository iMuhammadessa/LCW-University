<?php
		$connection = mysqli_connect("localhost", "root" , "" , "student_record");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Students Record</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<body>
<table class="table table-striped table-hover table-bodered" >
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>PASSWORD</th>
		<th>PHONE</th>
	</tr>

<?php 
$a="SELECT * FROM Student_tbl";
$b= mysqli_query($connection,$a);
while($c=mysqli_fetch_array($b)){
?>	
	<tr>
		<td><?php echo $c['id']; ?></td>
		<td><?php echo $c['name']; ?></td>
		<td><?php echo $c['email']; ?></td>
		<td><?php echo $c['password']; ?></td>
		<td><?php echo $c['phonenumber']; ?></td>
	</tr>
	<?php } ?>
</table>
<br><br>
 <a href="index.php"><button class="btn btn-muted" style="float: right;">Home</button></a>
</body>
</html>