<?php


//Save Contact us  info
function SaveContactInfo(){

$name=$_POST['fullname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$communication_mode=$_POST['communication_mode'];
$message=$_POST['message'];





$sql= "INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `communication_mode`, `message`) VALUES
(:name,:email,:phone,:communication_mode,:message)";

$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':phone',$phone,PDO::PARAM_STR);
$query-> bindParam(':communication_mode',$communication_mode,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->execute();

$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Query Sent. We will contact you shortly";
}
else 
{
$error="Something went wrong. Please try again";
}

}
}



//Save Contact us  info
function InsertSubscribers($id,$email){
	 $sql=INSERT INTO `subscription` (`id`, `email`) VALUES('id','email');

	
}






?>
