<?php
//header("Content-Type: text/javascript; charset=utf-8");
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
    if (!$result = $conn->query($query)){
        echo "Error: ".$conn->error;
        return 0;
    }
    return $result;
}

//Create contact Detail Table
function create_contact_db($conn,$dbname='none'){
    if(!$dbname=='none')
    create_db($conn,$dbname);

    $detail = "id INT PRIMARY KEY AUTO_INCREMENT,
          f_name varchar(30) NOT NULL,
          l_name varchar(30) NOT NULL ,
          gender CHAR(1) NOT NULL,
          bday DATE NOT NULL,
          title VARCHAR(50),
          email varchar(50) NOT NULL UNIQUE,
          tel VARCHAR(20),
          mob VARCHAR(20),
          n_name VARCHAR(30) DEFAULT 'N/A',
          photo VARCHAR(255),
          org VARCHAR(50),
          note TEXT,
          website VARCHAR(255)
          ";

    $addr = "id INT NOT NULL PRIMARY KEY,
        po_box varchar(100),
        ext varchar(100),
        street varchar(50),
        city varchar(50),
        state varchar(50),
        zipcode varchar(20),
        country varchar(50),
        FOREIGN KEY(id) references detail(id) ON DELETE CASCADE
            ON UPDATE CASCADE";

    create_tb($conn,"detail",$detail);
    create_tb($conn,"address",$addr);
}

//Adding Data To Database
function add_detail($conn) {
    if(isset($_POST['form'])){
        $sql_1="INSERT INTO `detail`(`f_name`, `l_name`, `gender`, `bday`, `title`, `email`, `tel`, `mob`, `n_name`,`org`, `note`, `website`) VALUES(
        '$_POST[f_name]',
        '$_POST[l_name]',
        '$_POST[gender]',
        '$_POST[bday]',
        '$_POST[title]',
        '$_POST[email]',
        '$_POST[tel]',
        '$_POST[mob]',
        '$_POST[n_name]',
        '$_POST[org]',
        '$_POST[note]',
        '$_POST[website]'
        )";

        $sql_2="INSERT INTO `address`(id,`po_box`, `ext`, `street`, `city`, `state`, `zipcode`, `country`) VALUES(
        last_insert_id(),
        '$_POST[po_box]',
        '$_POST[ext]',
        '$_POST[street]',
        '$_POST[city]',
        '$_POST[state]',
        '$_POST[zipcode]',
        '$_POST[country]'
        )";

        sql_query($conn,$sql_1);
        sql_query($conn,$sql_2);

        echo "Successfully Added Detaile";
    }
}

//Generate Json Query
function json_out($conn,$query) {
    $result = sql_fetch($conn,$query);
    $out=array();
    while($row = $result->fetch_assoc())
        $out[]=$row;
    echo json_encode($out);
}

//Search Suggestion
function search_suggest($conn) {
    if(isset($_POST['key']) && $_POST['search']!='') {
    $query="SELECT f_name,l_name from detail where f_name LIKE '$_POST[search]%'";
    json_out($conn,$query);
    }
}

$conn=new mysqli("localhost","mofid","","testing");
add_detail($conn);
search_suggest($conn);

/*$sql_1="SELECT * FROM address";
json_out($conn,$sql_1);*/


?>
