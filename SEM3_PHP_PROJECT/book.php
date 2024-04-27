<?php
session_start();

$userprofile = $_SESSION['user_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./img/1.png" type="image" rel="icon">
  <title>Sky Bright Tours and Travels</title>
  <script>
  function sendpdf() {
    const bookingForm = document.getElementById('booking-form');
    bookingForm.action = 'proceesbookings.php'; // Set the form action to sendmail.php
    bookingForm.submit(); // Submit the form
    // alert('Invoice has been sent to your email'); // Display the alert message
  }
</script>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      padding-top: 2.5%;
      background:url("./img/Summer destination.gif") no-repeat;
      
      background-repeat: no-repeat;
      background-size: cover;
      margin:10px;
    }

    .container {
      /* background:url("./img/Travel logotravel agency logotravel  tour - Made with PosterMyWall.jpg") no-repeat;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      min-height: 50vh;
      max-width: 1200px; */
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    td {
      padding: 10px;
      font-size: 20px;
    }

    .container h2{
      text-align: center;
      font-size: 50px;
    }

    .form-group {
      margin-bottom: 15px;
      display: flex;
      align-items: center;
    }

    .form-group label {
      flex: 1;
      margin-right: 10px;
      font-size: 25px;
    }

    .form-group input, .form-group select {
      flex: 1;
      font-size: 25px;
      padding: 10px;
      border: 1px solid black;
      border-radius: 4px;
      background: rgba(238, 252, 83, 0.5);
    }

    .form-group input:hover, .form-group select:hover{
      border: 2px solid darkcyan;
    }

    .form-group button {
      width: 100%;
      padding: 15px;
      font-size: 20px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .form-group button:hover {
      background-color: crimson;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Book Tour</h2>
    <form id="booking-form" method="POST">
      <table>
        <tr>
          <td>
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" required>
            </div>
          </td>
          <td>
            <div class="form-group">
              <label for="city">City:</label>
              <input type="text" id="city" name="city" required>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="form-group">
              <label for="mobile">Mobile No:</label>
              <input type="text" id="mobile" name="mobile" required onkeypress="return /[0-9]/i.test(event.key)" maxlength="10" pattern="([0-9]){10,}">
            </div>
          </td>
          <td>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" value="<?php echo $_SESSION['user_name'] ?>" required>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="form-group">
              <label for="adults">No of Adults:</label>
              <input type="number" id="adults" name="adult" required>
            </div>
          </td>
          <td>
            <div class="form-group">
              <label for="children">No of Children:</label>
              <input type="number" id="children" name="children" required>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <!-- <?php
            // require_once "config.php";
            ?> -->
            <div class="form-group">
              <label for="destination">Destination:</label>
              <select id="destination" name="destination" required>
                <?php

                require_once "config.php";

                $qry = "SELECT packid,packname FROM packages";

                $result = mysqli_query($con, $qry);

                while ($row = mysqli_fetch_assoc($result)) { ?>
                  <option value="<?php echo $row['packid'] ?>"><?php echo $row['packname'] ?></option>
                <?php
                }
                ?>
                <!-- Add more options for other destinations -->
              </select>
            </div>
          </td>
          <td>
            <div class="form-group">
              <label for="departure-date">Departure Date:</label>
              <input type="date" id="departure-date" name="departuredate" required>
            </div>
          </td>
        </tr>
        <tr>
          <?php

          // $destination = $row['packname'];
          // $adults = $_POST['adult'];
          
          // $qry = "SELECT packprice FROM packages WHERE packid = $destination";
          // $result = mysqli_query($con, $qry);
          
          // if ($row = mysqli_fetch_assoc($result)) {
          //   $packPrice = $row['packprice'];
          //   $totalPaymentAmount = $packPrice * $adults;
          // }
          ?>
          <!-- <td>
            <div class="form-group">
              <label for="payment-amount">Payment Amount:</label>
              <input type="text" id="payment-amount" name="payment-amount" value="<?php echo isset($totalPaymentAmount) ? $totalPaymentAmount : ''; ?>" readonly>
            </div>
          </td>  -->
          <td>
            <div class="form-group">
              <label for="payment-method">Payment Method:</label>
              <select id="payment-method" name="paymentmethod" onchange="handlePaymentMethod()" required>
              <option>Please select the method</option>
                <option value="Credit Card">Credit Card</option>
                <option value="Debit Card">Debit Card</option>
                <option value="PayPal">PayPal</option>
                <!-- Add more options for other payment methods -->
              </select>
            </div>
          </td>
        </tr>
        <tr id="credit-card-details" style="display: none;">
          <td>
            <div class="form-group">
              <label for="card-number">Card Number:</label>
              <input type="text" id="card-number" name="card-number">
            </div>
            <div class="form-group">
              <label for="expiration-date">Expiration Date:</label>
              <input type="text" id="expiration-date" name="expiration-date">
            </div>
            <div class="form-group">
              <label for="cvv">CVV:</label>
              <input type="text" id="cvv" name="cvv">
            </div>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <div class="form-group">
            <button type="submit" id="submit" name="submit" onclick="sendpdf()">Book Now</button>
            </div>
          </td>
        </tr>
        <!-- <tr id="sendpdf" style="display:none;">
          <td>
            <div class="form-group" >
                <button><a href="sendmail.php">Send pdf</a></button>
            </div>
          </td>
        </tr> -->
      </table>
    </form>
  </div>

  <script>
    function handlePaymentMethod() {
      const paymentMethod = document.getElementById('payment-method').value;
      const creditCardDetails = document.getElementById('credit-card-details');
      
      if (paymentMethod === 'Credit Card') {
        creditCardDetails.style.display = 'table-row';
      } else {
        creditCardDetails.style.display = 'none';
      }
    }

    // function sendpdf() {
    //   const submit = document.getElementById('submit').value;
    //   const sendpdf = document.getElementById('sendpdf');
      
    //   if (submit) {
    //     sendpdf.style.display = 'table-row';
    //   } else {
    //     sendpdf.style.display = 'none';
    //   }
    // }
  </script>
</body>
</html>