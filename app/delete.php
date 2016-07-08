<?php 
include 'connectdb.php';

$data= json_decode(file_get_contents("php://input"));
// $id = $_POST["id"];
$id= $data->id;
// echo $id;
$query = "delete from contacts where id =".$id;




if ($dbhandle->query($query) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $dbhandle->error;
}
?>



