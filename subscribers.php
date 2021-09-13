<?php 
$serverName="localhost";
$username="root";
$password="";
$db="costke_db";

$connection=new Mysqli($serverName,$username,$password,$db);

$sql="SELECT * FROM `subscription`";
$response=$connection->query($sql);
$counter=1;

 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cost Ke</title>
</head>
<body>

<table  cellspacing="20">
    <thead>
        <tr>
            <th>ID</th>
             <th>Email</th>
             <th style = "width:30%">Name</th>
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
        <td><?php echo htmlentities($row['email']);?></td>
        <td><?php echo htmlentities($row['name']);?></td>
        <td><a href="delete.php?id=<?php echo htmlentities($row['id']);?>" style="color: red;">Delete</a></td>
        </tr>
        <?php
        $counter++;
         } ?>
    </tbody>
                                                  
</table>
</body>
</html>