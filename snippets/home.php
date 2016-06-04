<?php include('../includes/session.php'); ?>
<?php include("head.php"); ?>

<section class="main col-md-12">
 <div class="col-md-12 text-right">
 	<p>
 	<?php 
 	$fname = mysqli_query($connect, "SELECT f_name, l_name from users where username = '$login_session'");
	// $result = mysql_query($fname);
	if (mysqli_num_rows($fname) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($fname)) {
        echo "You are Logged in as " . $row["f_name"]. " " . $row["l_name"]. "<br>";
    }
    } else {
    
	} ?>
	 <br>
	 </p>
	 </div><br>
	 <div class="container text-center">
		<div class="row">
		<a href="items.php"><div class="col-lg-4 col-md-4 col-sm4 ">
			<div id="tiles">
	 		<span>Items</span>	
	 		</div>
	 	</div></a><hr class="visible-xs">
	 	
	 		<a href="sales.php"><div class="col-lg-4 col-md-4 col-sm-4 "><div id="wtiles">
	 		<span>Sales</span>
	 		</div>
	 		</div></a><hr class="visible-xs">
	 		<a onmousewheel="zoom" href="suppliers.php"><div class="col-lg-4 col-md-4 col-sm-4 "><div id="tiles">
	 		<span>Suppliers</span>
	 		</div>
	 		</div></a><hr class="visible-xs">
	 	</div>
	 	<hr>
	 	<div class="row">
	 			<a href="orders.php"><div class="col-lg-4 col-md-4 col-sm-4 "><div id="wtiles">
	 		<span>Order</span>
	 	</div></div></a><hr class="visible-xs">
	 			<div class="col-lg-4 col-md-4 col-sm-4 "><div id="tiles">
	 		<span>nbsp</span>
	 	</div></div><hr class="visible-xs">
	 			<a href="reports.php"><div class="col-lg-4 col-md-4 col-sm-4 "><div id="wtiles">
	 		<span>Reports</span>
	 	</div></div></a>
	 	</div>

	 </div>
	 <hr>
 </section>
 <hr>
<?php include("foot.php"); ?>