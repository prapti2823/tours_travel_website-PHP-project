<?php
if (isset($_POST['submit'])) {

	$fp = fopen("./bookings.csv", "a");

	$no_rows = count(file("./bookings.csv"));

	$name = $_POST['name'];
	$email = $_POST['email'];
	$city = $_POST['city'];
	$mobile = $_POST['mobile'];
	$adult = $_POST['adult'];
	$children = $_POST['children'];
	$destination = $_POST['destination'];
	$cardnumber = $_POST['cardnumber'];
	$expirationdate = $_POST['expirationdate'];
	$cvv = $_POST['cvv'];

	$form_data = array(
		// 'sr_no'=> $no_rows,
		'name' => $name,
		'email' => $email,
		'city' => $city,
		'mobile' => $mobile,
		'adult' => $adult,
		'children' => $children,
		'destination' => $destination,
		'cardnumber' => $cardnumber,
		'expirationdate' => $expirationdate,
		'cvv' => $cvv
	);

	fputcsv($fp, $form_data);
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Booking Form</title>
	<link rel="stylesheet" type="text/css" href=".\css\bookings.css">
	<!-- <script>
		function validateForm() {
			if (isEmpty(document.getElementById('data_3').value.trim())) {
				alert('First name is required!');
				return false;
			}
			if (isEmpty(document.getElementById('data_4').value.trim())) {
				alert('Last name is required!');
				return false;
			}
			if (!validateEmail(document.getElementById('data_5').value.trim())) {
				alert('Email must be a valid email address!');
				return false;
			}
			return true;
		}
		function isEmpty(str) { return (str.length == 0 || !str.trim()); }
		function validateEmail(email) {
			var re = "";
			return isEmpty(email) || re.test(email);
		}
	</script> -->
</head>

<body>
	<!-- <div class="main">
		<ul>
			<ul class="list">
			<li class="logo"><a href="mainPage.html"><img src="earth-globe.png" alt="Logo" style="width:36px;height:36px"></a></li>
			<div class="search">
				<form method="POST" action="info.php">
				  <input type="text" name="search_p" placeholder="Search.." size="50">
			  
				  <input type="image" name="submit_p" src="search_icon.png" alt="Search image" style="width:22;height:22; margin-left: 35px;">
				</form>
			</div>
			</ul>
		</ul>
	</div> -->
	<h1>Tour Booking</h1>
	<div class="container">
		<form method="POST" name="form" onsubmit="return validateForm()">
			<div class="textbox">
				<input type="text" placeholder="Name" name="name" value=""
					onkeypress="return /[a-zA-Z]/i.test(event.key)" required>
			</div>

			<!-- <div class="textbox">
				<input type="text" placeholder="Last Name" name="flast" value="" onkeypress="return /[a-zA-Z]/i.test(event.key)" required> 
			</div> -->

			<div class="textbox">
				<input type="text" placeholder="Email" name="email" value="" required
					pattern="[a-z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-z0-9-]+.[a-z]{2,4}" title="Invalid Email">
			</div>

			<div class="textbox">
				<input type="text" placeholder="City" name="city" value=""
					onkeypress="return /[a-zA-Z]/i.test(event.key)" required>
			</div>

			<div class="textbox">
				<input type="text" placeholder="Phone" name="mobile" value=""
					onkeypress="return /[0-9]/i.test(event.key)" maxlength="10" pattern="([0-9]){10,}" required>
			</div>

			<div class="textbox">
				<input type="text" placeholder="Adults" name="adult" required>
			</div>

			<div class="textbox">
				<select name="children">
					<option>Childrens</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
				</select>
				<!-- <input type="text" placeholder="Children" name="fphone" value="" onkeypress="return /[0-9]/i.test(event.key)" maxlength="10" pattern="([0-9]){10,}" required> -->
			</div>

			<div class="textbox">
				<input type="text" placeholder="Destination" name="destination" value="" required>
			</div>
			<div>
				<h1>Payment</h1>
			</div>
			<div class="textbox">
				<input type="text" placeholder="Credit Card Number" name="cardnumber" required>
			</div>
			<div class="textbox">
				<input type="text" placeholder="Expiration Date" name="expirationdate" required>
			</div>
			<div class="textbox">
				<input type="text" placeholder="CVV" name="cvv" required>
			</div>
			<!-- <div class="btn">
				<input name="submit" value="Make Payment" type="submit"><a href="payments.php"></a>
			</div> -->
			<div class="btn">
				<input name="submit" value="Book Now" type="submit">
			</div>
		</form>
	</div>

</body>

</html>