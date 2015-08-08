<?php

class contactdb{

    public $conn;


    //Constructor Overloading
    function __construct() {
        $num=func_num_args();
        $args = func_get_args();
        if ($num == 0) {
            call_user_func_array(array($this,'__construct1'),$args);
        }
        else if($num == 1)
            {
            call_user_func_array(array($this,'__construct2'),$args);
        }
        else{
            call_user_func_array(array($this,'__construct3'),$args);
        }
    }

    //Constructor to Create Connection if details are not specified
    function __construct1() {
        $this->conn = new mysqli("mylocalhost", "mofid","");
        $this->create_db("mydb1");

        if ($this->conn->connect_error) {
            echo "Unable to Create Connection:".$this->conn->connect_error;
        }
    }

    //Constructor to Create Connection with new database based on argument
    function __construct2($db) {
        $this->conn = new mysqli("mylocalhost", "mofid","");
        $this->create_db($db);

        if ($this->conn->connect_error) {
            echo "Unable to Create Connection:".$this->conn->connect_error;
        }
    }

    //Constructor to Create Connection if are not specified
    function __construct3($server, $user, $password, $db) {

        $this->conn = new mysqli($server, $user, $password,$db);
        if ($this->conn->connect_error) {
            echo "Unable to Create Connection:".$this->conn->connect_error;
        }
    }

    //Create Database
    function create_db($dbname){
        $query="CREATE DATABASE ".$dbname;
        if($this->sql_query($query)){
            echo "Successfully Created Database";
        }
    }

    //Delete Database
    function delete_db($dbname){
        $query="DROP DATABASE ".$dbname;
        if($this->sql_query($query)){
            echo "Successfully Deleted Database";
        }
    }

    //Create Table
    function create_tb($tbname,$columns){
        $query="CREATE TABLE ".$tbname."(".$columns.")";
        if($this->sql_query($query)){
            echo "Successfully Created Table";
        }
    }

    //Delete Table
    function delete_tb($tbname){
        $query="DROP TABLE ".$tbname;
        if($this->sql_query($query)){
            echo "Successfully Deleted Table";
        }
    }

    //Query Database
    function sql_query($query) {
        if (!$this->conn->query($query)) {
            echo "Error: ".$this->conn->error;
            return 0;
        }
        return 1;
    }

    //Fetch Data from Database
    function sql_fetch($query){
        if (!$result = $this->conn->query($query)){
            echo "Error: ".$this->conn->error;
            return 0;
        }
        return $result;
    }

    //Create contact Detail Table
    function create_contact_table() {

        $detail = "id INT PRIMARY KEY AUTO_INCREMENT,
              fname varchar(30) NOT NULL,
              lname varchar(30) NOT NULL ,
              gender CHAR(1) NOT NULL,
              bday DATE NOT NULL,
              title VARCHAR(50),
              email varchar(50) NOT NULL UNIQUE,
              tel VARCHAR(20),
              mob VARCHAR(20),
              nname VARCHAR(30) DEFAULT 'N/A',
              photo VARCHAR(255),
              org VARCHAR(50),
              note TEXT,
              website VARCHAR(255)
              ";

        $addr = "id INT NOT NULL PRIMARY KEY,
            pobox varchar(100),
            ext varchar(100),
            street varchar(50),
            city varchar(50),
            state varchar(50),
            zipcode varchar(20),
            country varchar(50),
            FOREIGN KEY(id) references detail(id) ON DELETE CASCADE
                ON UPDATE CASCADE";

        create_tb("detail",$detail);
        create_tb("address",$addr);
    }

    //Adding Data To Database
    function add_detail() {
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

            $this->sql_query($sql_1);
            $this->sql_query($sql_2);

            echo "Successfully Added Detaile";
        }
    }

    //Generate Json Query
    function json_out($query) {
        $result = $this->sql_fetch($query);
        $out=array();
        while($row = $result->fetch_assoc())
            $out[]=$row;
        echo json_encode($out);
    }

    //Search Suggestion
    function search_suggest() {
        if(isset($_POST['key']) && $_POST['search']!='') {
        $query="SELECT f_name,l_name from detail where f_name LIKE '$_POST[search]%'";
        $this->json_out($query);
        }
    }

    //View All Contacts in Database
    function view_all_contacts() {
        $query="SELECT * from detail,address where detail.id=address.id";
        $this->json_out($query);
    }

    //View Single Contact
    function view_contact() {
        $query="SELECT * from detail,address where detail.id=address.id and f_name = 'aadil'";
        $this->json_out($query);
    }

    //Delete Contact
    function delete_contact($id) {
        $query="delete from detail where id = $id";
        $this->sql_query($query);
    }

    //Update Contact
    function update_contact($id,$key,$value) {
        $query="UPDATE detail set $key = '$value' where id = $id";
        $this->sql_query($query);
    }

}

?>
