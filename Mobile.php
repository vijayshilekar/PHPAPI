<?php
require_once("db.php");
/*
A domain Class to demonstrate RESTful web services
*/
Class Mobile {
	/*
		you should hookup the DAO here
	*/
	public function getAllMobile(){

		$q = "select * from userDeatils";
		$result = mysql_query($q);
		while($row = mysql_fetch_assoc($result)){
		 $mobiles[] = array(
		'id'=>$row['id'],
		'username' => $row['username'],
		'password'=> $row['password']);
		}
		return $mobiles;
	}

	public function getMobile($id){

		$q = "select * from userDeatils where id =".$id;
		$result = mysql_query($q);
		while($row = mysql_fetch_array($result)){
		 $mobiles[] = array(
		'id'=>$row['id'],
		'username' => $row['username'],
		'password'=> $row['password']
	);
		return $mobiles;
		}

	}
}
?>
