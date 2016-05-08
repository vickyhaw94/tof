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
                email varchar(255) NOT NULL,
                password varchar(255) NOT NULL,
                dateJoined varchar(255) NOT NULL,
                gender varchar(255) NOT NULL,
                PRIMARY KEY (uid,email)
            )";

if($conn -> query($sqltbl)){
    echo "tbl user created <br/>";
}else{
    echo "tbl user failed <br/>";
}

$sqltbl2= "CREATE TABLE topic(
            topicId int NOT NULL AUTO_INCREMENT,
            topic varchar(255) NOT NULL,
            PRIMARY KEY(topicId)
        )";

if($conn -> query($sqltbl2)){
    echo "tbl topic created";
}else{
    echo "tbl topic failed to create";
}

$sqltbl3= "CREATE TABLE post(
            postId int NOT NULL AUTO_INCREMENT,
            postTitle varchar(255) NOT NULL,
            postContent text NOT NULL,
            postDate varchar(255) NOT NULL,
            uid int NOT NULL,
            topicId int NOT NULL,
            PRIMARY KEY(postId),
            FOREIGN KEY(uid) REFERENCES user(uid),
            FOREIGN KEY(topicId) REFERENCES topic(topicId)
        )";

if($conn -> query($sqltbl3)){
    echo "tbl post created";
}else{
    echo "tbl post failed to create";
}

$sqltbl4 = "CREATE TABLE comment(
            commentId int NOT NULL AUTO_INCREMENT,
            comment text NOT NULL,
            commentDate varchar(255) NOT NULL,
            postId int NOT NULL,
            PRIMARY KEY(commentId),
            FOREIGN KEY(postId) REFERENCES post(postId)
        )";

if($conn -> query($sqltbl4)){
    echo "tbl comment created";
}else{
    echo "tbl comment failed to create";
}


$conn->close();
?>