<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="payment.css"> <!-- Optional: Add your CSS file for styling -->
</head>
<body>

    <div class="container">
        <h2>Payment Information</h2>
        <form action="process_payment.php" method="POST">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="card_number">Credit Card Number:</label>
                <input type="text" id="card_number" name="card_number" required>
            </div>
            <div class="form-group">
                <label for="expiry_date">Expiration Date (MM/YY):</label>
                <input type="text" id="expiry_date" name="expiry_date" required placeholder="MM/YY">
            </div>
            <div class="form-group">
                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" required>
            </div>
            <button type="submit" class="btn">Pay Now</button>
        </form>
    </div>

</body>
</html>