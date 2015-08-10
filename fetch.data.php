<?php
//header("Content-Type: text/javascript; charset=utf-8");
include_once "contactsClass.php";

$mycont = new contactdb("mylocalhost","mofid","","mydbx");
//$mycont = new contactdb("mydbx");
//$mycont->create_contact_table();
$mycont->add_detail();
//$mycont->search_suggest();
//$mycont->view_all_contacts();
//$mycont->view_contact();
//$mycont->delete_contact('300014');
//$mycont->update_contact('300013','l_name','Mittal');


/*$sql_1="SELECT * FROM address";
$mycont->json_out($sql_1);*/

print_r($_POST);

?>
