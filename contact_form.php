<?php 
$serverName="localhost";
$username="root";
$password="";
$db="costke_db";

$connection=new Mysqli($serverName,$username,$password,$db);

$sql="SELECT * FROM `contact`";
$response=$connection->query($sql);
$counter=1;

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Phone</th>                                              
            <th>Email</th>
            <th>Communication Mode</th>
            <th>Message</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
		<?php 
		while($row=$response->fetch_assoc())
		{
		?>

		<tr>
		<th scope="row"><?php echo htmlentities($counter);?></th>
		<td><?php echo htmlentities($row['name']);?></td>
		<td><?php echo htmlentities($row['phone']);?></td>
		<td><?php echo htmlentities($row['email']);?></td>
		<td><?php echo htmlentities($row['communication_mode']);?></td>
		<td><?php echo htmlentities($row['message']);?></td>
		<td><a href="delete.php?id=<?php echo htmlentities($row['id']);?>" style="color: red;">Delete</a></td>
		</tr>
		<?php
		$counter++;
		 } ?>
	</tbody>
                                                  
</table>
</body>
</html>