<?php include("head.php") ?>
<?php require("../includes/config.php") ?>

<style>
form { width: 400px; }
label { float: left; width: 150px; }
input[type=text] { float: left; width: 250px; }
input[type=date] { float: left; width: 250px; height: 30px;}
input[type=email] { float: left; width: 250px;}
select{ width: 250px; }
.clear { clear: both; height: 0; line-height: 0; }
.floatright { float: right; }
</style>

<section>
	<div class="container" "text-center">
		<form 	method="post"><br><hr>
			<label for    ="name">Name</label><input type="text" name="name" required><br><hr> 
			<label for    ="category">Category</label>
				<select name="category" >
					<option value ="Beverages">Beverages</option>
					<option value ="Bread/Bakery –">Bread/Bakery –</option>
					<option value ="Canned/Jarred Goods">Canned/Jarred Goods</option>
					<option value ="Dairy">Dairy</option>
					<option value ="Dry/Baking Goods">Dry/Baking Goods</option>
					<option value ="Frozen Foods">Frozen Foods</option>
					<option value ="Individual meals">Individual meals</option>
					<option value ="Meat">Meat</option>
					<option value ="Produce">Produce</option>
					<option value ="Cleaners">Cleaners</option>
					<option value ="Paper Goods">Paper Goods</option>
					<option value ="Personal Care">Personal Care</option>
					<option value ="Other">Other</option>
				</select><br><hr>
			<label for    ="address">Address</label><input type="text" name="address" required><br><hr>
			<label for    ="telephone">Telephone</label><input type="text" name="telephone" required><br><hr>
			<label for    ="email">Email</label><input type="email" name="email" required><br><hr>
			<label for    ="Submit"></label><input type="submit" name="addSupplier" value="Submit">
		</form>
	</div>
</section>

<?php

if(isset($_POST["addSupplier"])){
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

$name      = $_POST['name'];  
$category  = $_POST['category'];  
$address   = $_POST['address'];  
$telephone = $_POST['telephone'];  
$email     = $_POST['email'];  


$sql = "INSERT INTO suppliers ( name, category, address, telephone, email )  
		VALUES ( '$name', '$category', '$address', '$telephone', '$email' ) ";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('Supplier added successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
?>
<?php include("foot.php") ?>