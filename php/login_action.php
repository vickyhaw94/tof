<?php
require "db_connection.php";

$email = mysqli_real_escape_string($conn, $_POST["email"]);
$password = crypt(mysqli_real_escape_string($conn, $_POST["password"]), '$6$rounds=1000$salted$');
$response = array();
if(isset($email) && isset($password)) {
    $sql = "SELECT * FROM `user` WHERE `email` = '$email'";
	$result = $conn-> query($sql);
    
	if ($result -> num_rows > 0) {
		$row =$result ->fetch_assoc();
        
        if ( (strcmp($row["password"], $password) == 0 ) ) {
			$_SESSION["email"] = $row["email"];
			$_SESSION["uid"] = $row["uid"];
            $response["success"] =1;
            $response["message"] = "success";
            echo json_encode($response);
        
        }else{
            $response["success"]=0;
            $response["message"]= "incorrect";
            echo json_encode($response);
        }
	} else {
		$response["success"]=0;
        $response["message"]="unsuccessful";
        echo json_encode($response);
	}
}

$conn->close();
?>