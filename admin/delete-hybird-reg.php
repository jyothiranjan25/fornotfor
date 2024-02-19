<?php 

require('database/dbconfig.php');
if(!empty($_POST['regId'])){
    //echo $_POST['regId'];

    $regId = $_POST['regId'];

    $sql = " UPDATE `hybrid-registration` SET status = null,markasdelete = 1  where SlNo =  '".$regId."' ";
    //echo mysqli_connect_error();
	if($connection->query($sql)){
		echo "success";
	}else{
		echo $connection->error;
	}	

}
