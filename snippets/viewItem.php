<?php include("head.php") ?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tuskys";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SHOW TABLES";

$result = mysqli_query($conn,$sql)or die(mysqli_error());

while($items = mysqli_fetch_row($result)) {

	$table = $items[0];
	
	echo '<center><h3>',$table,'</h3></center>';
	$result2 = mysqli_query($conn,'SHOW COLUMNS FROM '.$table) or die('cannot show columns from '.$table);
	if(mysqli_num_rows($result2)) {
		echo '<center><table cellpadding="0" cellspacing="0" class="db-table">';
		echo '<tr><th>Field</th><th>Type</th><th>Null</th><th>Key</th><th>Default<th>Extra</th></tr>';
		while($row2 = mysqli_fetch_row($result2)) {
			echo '<tr>';
			foreach($row2 as $key=>$value) {
				echo '<td>',$value,'</td>';
			}
			echo '</tr>';
		}
		echo '</table></center><br />';
	}
}

// $sql = "SELECT itemID, name, category, quantity, price, delivery_date, expiry_date FROM items";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     echo "<table><tr><th>ID</th><th>Name</th></tr>";
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "<tr><td>". $row["itemID"]. " </td><td>" . $row["name"]. " " . $row["category"]. "</td><tr>";
//     }
//     echo "</table>";

// } else {
// 	echo "0 results";
// }
$conn->close();
?>

<?php include("foot.php") ?>