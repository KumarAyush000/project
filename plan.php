<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitLife Pro</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Basic styles for the page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        
        /* Navigation bar styles */
        nav {
            background: black;
            color: #fff;
            padding: 10px 0;
        }

        nav .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        nav h1.logo {
            margin: 0;
        }

        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        /* Choose Plan Section styles */
        #choose-plan {
            padding: 40px 20px;
            background: #fff;
            text-align: center;
        }

        .plans-grid {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
        }

        .plan {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            background: #f9f9f9;
            width: 30%;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .plan h3 {
            margin-bottom: 10px;
        }

        .plan .btn {
            display: inline-block;
            padding: 10px 15px;
            background: #ff4c4c;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .plan .btn:hover {
            background: #ff4c4c;
        } 

        nav ul li {
    margin-left: 30px;
  }
  
  nav ul li a {
    color: white;
    text-decoration: none;
    padding: 5px 10px;
    border-radius: 5px;
    transition: background 0.1s;
  }
  
  nav ul li a:hover {
    background: white;
    color: #ff4c4c;
  }



  nav h1 a {
    color: white; /* Ensure the color is white */
    text-decoration: none; /* Remove underline */
}

nav h1 a:active, nav h1 a:focus {
    color: white; /* Keep the color white when clicked or focused */
}

   </style>
</head>
<body>

    <!-- Navigation bar -->
    <nav>
        <div class="container">
            <h1 class="logo"><a href="index.php">FitLife Pro</a></h1>
            <ul>
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
                    <h2>Basic Plan</h2>
                    <b>Monthly Plan</b>
                    <p>Access to basic features and workout plans.</p>
                    <p>Price: &#8377  949/month</p>
                    <a href="#" class="btn">Select Plan</a>
                </div>
                <div class="plan">
                    <h2>Gold Plan</h2>
                    <b>3 Months Plan</b>
                    <p>Access to all features, personalized coaching, and nutrition tracking.</p>
                    <p>Price: &#8377  2499/month</p>
                    <a href="#" class="btn">Select Plan</a>
                </div>
                <div class="plan">
                    <h2>Diamond Plan</h2>
                    <b>6 Months Plan</b>
                    <p>All Pro features plus exclusive content and community access.</p>
                    <p>Price: &#8377  4449/month</p>
                    <a href="#" class="btn">Select Plan</a>
                </div>
            </div>
        </div>
    </section>
   
</body>
</html>