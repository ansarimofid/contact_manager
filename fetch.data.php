<?php
//Create Connection
function create_conn($server, $user, $password, $db = "none") {
    if($db=="none"){
        return new mysqli($server, $user, $password);
    }
    else{
        return new mysqli($server, $user, $password,$db);
    }

    if ($conn->connect_error) {
    echo "Unable to Create Connection:".$conn->connect_error;
    }
}
//Create Database
function create_db($conn,$dbname){
    $query="CREATE DATABASE ".$dbname;
    if(sql_query($conn,$query)){
        echo "Successfully Created Database";
    }
}

//Delete Database
function delete_db($conn,$dbname){
    $query="DROP DATABASE ".$dbname;
    if(sql_query($conn,$query)){
        echo "Successfully Deleted Database";
    }
}

//Create Table
function create_tb($conn,$tbname,$col){
    $query="CREATE TABLE ".$tbname."(".$col.")";
    if(sql_query($conn,$query)){
        echo "Successfully Created Table";
    }
}

//Delete Table
function delete_tb($conn,$tbname){
    $query="DROP TABLE ".$tbname;
    if(sql_query($conn,$query)){
        echo "Successfully Deleted Table";
    }
}

//Query Database
function sql_query($conn,$query) {
    if (!$conn->query($query)) {
        echo "Error: ".$conn->error;
        return 0;
    }
    return 1;
}

//Fetch Data from Database
function sql_fetch($conn,$query){
    if ($result = $conn->query($query))
    return $result;
    else return 0;
}

$conn=new mysqli("localhost","mofid","","testing");
/*create_tb($conn,
          "test",
          "id INT AUTO_INCREMENT PRIMARY KEY,fname varchar(30) NOT NULL,lname varchar(30) NOT NULL ,Gender CHAR(1) NOT NULL,bday DATE NOT NULL");*/

$sql='insert into test (fname,lname,bday,gender) values("Mofid","Ansari","1996-02-25","M")';

sql_query($conn,$sql);

?>
