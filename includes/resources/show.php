<?php
include('connectDB.php');

$editID = 1;

$sql = "SELECT * FROM StoreProducts WHERE id = '1'";
$result = $conn->query($sql);
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = fetch_row($result);

echo 'echo row[0]' . $row[0]; // 42
print 'print row' . $row;
print 'print result' . $result;

// $sql = "SELECT * FROM StoreProducts WHERE ID = 1";
// $result = $conn->query($sql);

//$query = mysql_query("SELECT * FROM StoreProducts WHERE ID = '$editID'");
//
// $row = mysql_fetch_array($result);

// print_r($row);

?>