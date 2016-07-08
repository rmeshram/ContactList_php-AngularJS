<?php 
include 'connectdb.php';


$data= json_decode(file_get_contents("php://input"));
$name = $dbhandle->real_escape_string($data->name);
$email = $dbhandle->real_escape_string($data->email);
$number = $dbhandle->real_escape_string($data->number);
$btnName=$data->btnName;
if($btnName == "Save"){
	$query = "insert into contacts values(default,'".$name."','".$email."','".$number."')";

	if ($dbhandle->query($query) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $query . "<br>" . $dbhandle->error;
	}
}
else{
	$id = $dbhandle->real_escape_string($data->id);
    		$query = "UPDATE contacts SET name='".$data->name."',email='".$data->email."',number='".$data->number."' WHERE id=".$id;


	if ($dbhandle->query($query) === TRUE) {
	    echo "Record updated successfully";
	} else {
	    echo "Error updating record: " . $dbhandle->error;
	}

}
?>

