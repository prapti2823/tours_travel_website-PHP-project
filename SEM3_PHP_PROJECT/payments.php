<!-- payment.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Payment Page</title>
    <style>
        body {
    background-image: url("./img/desktop-wallpaper-admin-login (1).jpg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    min-height: 100vh;
    padding-top: 3%;
    padding-bottom: 0;
}

.container {
    max-width: 600px;
    height: 700px;
    margin: 0 auto;
    padding: 40px;
    align-items: center;
    justify-items: center;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.container h1{
    text-align: center;
    font-size: 50px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-size: 30px;
}

.form-group input {
    width: 90%;
    padding: 15px;
    font-size: 20px;
    border: 1px solid black;
    border-radius: 4px;
}

.form-group button {
    width: 96%;
    padding: 15px;
    font-size: 20px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.form-group button:hover {
    background-color: #45a049;
}
    </style>
</head>
<body>
    
    <div class="container">
    <h1>Payment Details</h1>
    <form action="pdf.php" method="POST">
        <div class="form-group">
        <label for="card_number">Credit Card Number:</label>
        <input type="text" id="card_number" name="card_number" required>
        </div>
        <div class="form-group">
        <label for="expiration_date">Expiration Date:</label><br>
        <input type="text" id="expiration_date" name="expiration_date" required>
        </div>
        <div class="form-group">
        <label for="cvv">CVV:</label><br>
        <input type="text" id="cvv" name="cvv" required>
        </div>
        <!-- Add any other relevant input fields here -->
        <div class="form-group">
        <button type="submit" value="Submit">Submit</button>
        </div>
        <?php
    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        // Retrieve form data
        $cardNumber = $_POST['card_number'];
        $expirationDate = $_POST['expiration_date'];
        $cvv = $_POST['cvv'];

        // Validate form inputs (you can add additional validation as per your requirements)
        if (empty($cardNumber) || empty($expirationDate) || empty($cvv)) {
            echo "Please fill in all the required fields.";
        } else {
            // Process the payment
            // You can implement your payment processing logic here
            // For example, connect to a payment gateway or perform necessary calculations

            // Show success message
            echo "Payment successful! Thank you for your booking.";
        }
    }
    ?>
    </form>
    </div>
</body>
</html>
