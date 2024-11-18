<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitLife Pro</title>
    <link rel="stylesheet" href="plan.css">
    <script>
        // JavaScript function to open the payment page
        function openPaymentPage(planName) {
            // Here you can specify the URL of your payment page
            const paymentUrl = "payment.php"; // Change this to your actual payment page URL
            alert(`You have selected the ${planName}. Redirecting to payment page...`);
            window.location.href = paymentUrl; // Redirect to payment page
        }
    </script>
</head>
<body>

    <!-- Navigation bar -->
    <nav>
        <div class="container">
            <h1 class="logo"><a href="index.php">FitLife Pro</a></h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#choose-plan">Choose Plan</a></li>
                <li><a href="index.php">Features</a></li>
                <li><a href="index.php">Testimonials</a></li>
                <li><a href="index.php">Download</a></li>
                <li><a href="index.php">FAQ</a></li>
                <li><a href="index.php">Queries</a></li>
            </ul>
            <div class="menu-toggle">
                <!-- For smartphones or small screen devices -->
                <div class="hamburger"></div>
            </div>
        </div>
    </nav>

    <!-- Choose Plan Section -->
    <section id="choose-plan">
        <div class="container">
            <h2>Choose Your Plan</h2>
            <div class="plans-grid">
                <div class="plan">
                    <div class="basic">
                    <h2>Basic Plan</h2>
                    <b>Monthly Plan</b>
                    <p>Access to basic features and workout plans.</p>
                    <p>Price: <b>&#8377  949</b>/month</p>
                    <a href="#" class="btn" onclick="openPaymentPage('Basic Plan')">Select Plan</a>
                    </div>
                </div>
                <div class="plan">
                    <div class="gold">
                    <h2>Gold Plan</h2>
                    <b>3 Months Plan</b>
                    <p>Access to all features, personalized coaching.</p>
                    <p>Price: <b>&#8377  2499</b>/month</p>
                    <a href="#" class="btn" onclick="openPaymentPage('Gold Plan')">Select Plan</a>
                    </div>
                </div>
                <div class="plan">
                    <div class="diamond">
                    <h2>Diamond Plan</h2>
                    <b>6 Months Plan</b>
                    <p>All Pro features plus exclusive content.</p>
                    <p>Price: <b>&#8377  4449</b>/month</p>
                    <a href="#" class="btn" onclick="openPaymentPage('Diamond Plan')">Select Plan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
</body>
</html>