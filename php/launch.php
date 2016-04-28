<?php

require __DIR__.'/db_connection.php';
require __DIR__.'/db_delete.php';
require __DIR__.'/db_connection.php';
$database = 'uniss';
$sql = "CREATE DATABASE " .$database;
if ($conn ->query($sql)) {
	echo "Database created successfully. <br>";
} else {
    echo "Database failed to created <br>" . mysqli_error($conn);
}

session_destroy();

require 'db_connection.php';

$sqltbl = "CREATE TABLE user(
                uid int NOT NULL AUTO_INCREMENT,
                username varchar(255) NOT NULL,
                email varchar(255) NOT NULL,
                password varchar(255) NOT NULL,
                dateJoined varchar(255) NOT NULL,
                PRIMARY KEY (uid)
            )";

if($conn -> query($sqltbl)){
    echo "tbl user created <br/>";
}else{
    echo "tbl user failed <br/>";
}



$conn->close();
?>