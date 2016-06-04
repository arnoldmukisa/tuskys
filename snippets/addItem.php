<?php include('head.php') ?>
<?php require("../includes/config.php") ?>
<?php 

if(isset($_POST['submit']))

 ?>

<style>
form { width: 400px; }
label { float: left; width: 150px; }
input[type=text] { float: left; width: 250px; }
input[type=date] { float: left; width: 250px; height: 30px;}
select{ width: 250px; }
.clear { clear: both; height: 0; line-height: 0; }
.floatright { float: right; }
</style>

<section>
	<div class="container" "text-center">
		<form 	method="post"><br><hr>
		<label for    ="name">Name</label><input type="text" name="name" required><br><hr> 
		<label for    ="category">Category</label><select name="category" >
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
		<label for    ="quantity">Quantity</label><input type="text" name="quantity" required><br><hr>
		<label for    ="price">Price</label><input type="text" name="price" required><br><hr>
		<label for    ="delivery_date">Delivery Date</label><input type="date" name="delivery_date" required><br><hr>
		<label for    ="expiry_date">Expiry Date</label><input type="date" name="expiry_date" required><br><hr> 
		<label for    ="Submit"></label><input type="submit" name="addItem" value="Add Item">
		</form>
	</div>
</section>

<?php

if(isset($_POST["addItem"])){
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

$name = $_POST['name'];  
$category = $_POST['category'];  
$quantity = $_POST['quantity'];  
$price = $_POST['price'];  
$delivery_date = $_POST['delivery_date'];  
$expiry_date = $_POST['expiry_date'];  

$sql = "INSERT INTO items ( name, category, quantity, price, delivery_date, expiry_date )  
		VALUES ( '$name', '$category', '$quantity', '$price', '$delivery_date', '$expiry_date' ) ";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('Item(s) added successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
?>

<?php include('foot.php') ?>
<!-- 	<form action="add.php">
		<label for="NAME">NAME</label><input type="text" name="item_name" required><br><hr>
		<label for="PRICE">PRICE</label><input type="text" name="item_name" require>
		<br><hr>
		<label for="DELIVERY DATE">DELIVERY DATE</label><input type="text" name="delivery_date" required><br><hr>
		<label for="EXPIRY DATE">EXPIRY DATE</label><input margin type="text" name="expiry_date" required><br><hr>
		<label for="CATEGORY">CATEGORY</label><input type="text" name="description" required><br><hr>
		<label for="Submit"></label><input type="submit" name="addItem" value="Add Item">
	</form> -->
<!-- Beverages – coffee/tea, juice, soda
Bread/Bakery – sandwich loaves, dinner rolls, tortillas, bagels
Canned/Jarred Goods – vegetables, spaghetti sauce, ketchup
Dairy – cheeses, eggs, milk, yogurt, butter
Dry/Baking Goods – cereals, flour, sugar, pasta, mixes
Frozen Foods – waffles, vegetables, individual meals, ice cream
Meat – lunch meat, poultry, beef, pork
Produce – fruits, vegetables
Cleaners – all- purpose, laundry detergent, dishwashing liquid/detergent
Paper Goods – paper towels, toilet paper, aluminum foil, sandwich bags
Personal Care – shampoo, soap, hand soap, shaving cream
Other – baby items, pet items, batteries, greeting cards -->