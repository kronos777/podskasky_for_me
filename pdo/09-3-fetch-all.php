<?php
class Users{

	public $id;
	public $price;
	public $name;

	public function nameToUpper(){
		
		//return $this->name;
		return $this->price;
		
	}
}


    $db = new PDO("sqlite:test21.db");

	$sql = "SELECT * FROM goods";

    $stmt = $db->query($sql);

    $obj = $stmt->fetchALL(PDO::FETCH_CLASS, 'Users');

    foreach($obj as $user){
        echo $user->nameToUpper().'<br>';
    }
    $db = null;

?>