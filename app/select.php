<?php 
include 'connectdb.php';

$query = "select * from contacts";

$result = $dbhandle->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // echo "id: " . $row["id"]. " - Name: " . $row["name"].  " <br>";
        $data[]= $row;
    }
} else {
    echo "0 results";
}

print json_encode($data);
?>



