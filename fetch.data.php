<?php
$server="localhost";
$user="mofid";
$password="";
$database="contacts";
$conn=new mysqli($server, $user, $password, $database);

if ($conn->connect_error) {
    echo $conn->connect_error;
}

$sql="insert into list (fname,lname) values('Kanju','ansari')";
sql_query($sql);




function sql_query($sql){
    if($GLOBALS['conn']->query($sql)===TRUE){
    echo "Success";
}
else
    echo $GLOBALS['conn']->error;
}
