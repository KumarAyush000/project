<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FitLife Pro - Your Ultimate Fitness Companion</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
	<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>


   <!--navigation bar-->
<nav>
  <div class="container">
    <h1 class="logo">FitLife Pro</h1>
    <ul>
      <li><a href="plan.php">Choose Plan</a></li> <!-- New Choose Plan Link -->
      <li><a href="#features">Features</a></li>
      <li><a href="#testimonials">Testimonials</a></li>
      <li><a href="#download">Download</a></li>
      <li><a href="#faq">FAQ</a></li>
      <li><a href="#queries">Queries</a></li>
    </ul>
    <div class="menu-toggle">
      <!--for smartphones or small screen devices-->
      <div class="hamburger"></div>
    </div>
  </div>
</nav>
    <header>
      <!--header part-->
      <div class="container">
        <div class="header-content">
          <div class="text-content">
            <h1>FitLife Pro</h1>
            <p>Transform Your Fitness Journey Today</p>
            <a href="login.php" class="btn blink">Join the Movement</a>
          </div>
          <div class="image-content">
            <img
              src="./images/fitlife.jpg"
              alt="Fitness Image"
              class="header-image"
            />
          </div>
        </div>
      </div>
    </header>
    <!--fetures section-->
    <section id="features">
      <div class="container">
        <h2>Unleash Your Potential</h2>
        <div class="features-grid">
          <div class="feature">
            <img
              src="./images/feature1.jpg"
              alt="Personalized Workout Plans"
              style="width: 200px; height: 200px"
            />
            <h3><a href="next.php">Custom Workouts</a> </h3>
            <p>
              Experience tailor-made workout plans that are designed to achieve
              your unique fitness goals.
            </p>
          </div>
          <div class="feature">
            <img
              src="./images/feature2.jpg"
              alt="Nutrition Tracking"
              style="width: 200px; height: 200px"
            />
            <h3><a href="next.html">Smart Nutrition</a></h3>
            <p>
              Keep track of your diet effortlessly and make healthier choices
              with our advanced tracking tools.
            </p>
          </div>
          <div class="feature">
            <img
              src="./images/feature3.jpg"
              alt="Progress Monitoring"
              style="width: 200px; height: 200px"
            />
            <h3><a href="next.php">Real-Time Progress</a></h3>
            <p>
              Stay motivated by monitoring your fitness journey in real-time
              with our intuitive analytics.
            </p>
          </div>
          <div class="feature">
            <img
              src="./images/feature4.jpg"
              alt="Community Support"
              style="width: 200px; height: 200px"
            />
            <h3><a href="next.php">Supportive Community</a></h3>
            <p>
              Join a vibrant community of fitness enthusiasts who will inspire
              and support you every step of the way.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!--testimonials-->
    <section id="testimonials">
      <div class="container">
        <h2>What Our Users Say</h2>
        <div class="testimonials-grid">
          <div class="testimonial">
            <img src="./images/user img.jpg" alt="User Ravi Bansal" />
            <p>
              "FitLife Pro has completely revolutionized my fitness journey. I
              feel stronger and more confident every day!"
            </p>
            <cite>- Ravi Bansal</cite>
          </div>
          <div class="testimonial">
            <img src="./images/user img.jpg" alt="User Richard Mark" />
            <p>
              "The custom workout plans are amazing! I've seen incredible
              results in just a few weeks."
            </p>
            <cite>- Richard Mark</cite>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq">
      <div class="container">
        <h2>Frequently Asked Questions</h2>
        <div class="faq-grid">
          <div class="faq-item">
            <h3>How does FitLife Pro customize my workouts?</h3>
            <p>
              FitLife Pro analyzes your fitness level, goals, and preferences to
              create personalized workout plans just for you.
            </p>
          </div>
          <div class="faq-item">
            <h3>Can I track my nutrition with FitLife Pro?</h3>
            <p>
              Yes, FitLife Pro includes comprehensive nutrition tracking tools
              to help you monitor your diet and make healthier choices.
            </p>
          </div>
          <div class="faq-item">
            <h3>Is there a community aspect to FitLife Pro?</h3>
            <p>
              Absolutely! FitLife Pro connects you with a supportive community
              of fitness enthusiasts who share tips, motivation, and
              encouragement.
            </p>
          </div>
          <div class="faq-item">
            <h3>What platforms is FitLife Pro available on?</h3>
            <p>
              FitLife Pro is available for both iOS and Android devices,
              ensuring you can access it on your preferred platform.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Queries Section -->
    <section id="queries">
      <div class="container">
        <h2>Have More Questions? Ask Us!</h2>
        <form>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required />

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required />

          <label for="message">Message:</label>
          <textarea id="message" name="message" rows="3" required></textarea>

          <button type="submit" class="btn">Submit</button>
        </form>
      </div>
    </section>

    <!--download section-->
    <section id="download">
      <div class="container">
        <h2>Ready to Transform Your Life?</h2>
        <p>
          Join thousands of users who are achieving their fitness goals with
          FitLife Pro. Don't wait—start your journey now!
        </p>
        <a href="#" class="btn">Download for iOS</a>
        <a href="#" class="btn">Download for Android</a>
      </div>
    </section>
    <!--footer part-->
    <footer>
      <div class="container">
        <p>&copy; 2024 FitLife Innovations. All rights reserved.</p>
      </div>
    </footer>

    <script src="script.js"></script>
  </body>
</html>
