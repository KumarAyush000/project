<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitlife Pro</title>
    <link rel="stylesheet" type="text/css" href="styles2.css">
   
</head>
<body>

    <!-- Navbar -->
    <nav>
        <div class="navcontainer">
            <h1><a href="index.php">Fitlife Pro</a></h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#workout">Workout</a></li>
                <li><a href="#nutrition">Nutrition</a></li>
                <li><a href="plan.php">Choose Plan</a></li>
                <li><a href="#progress">Progress Tracking</a></li>
                <li><a href="#community">Community Support</a></li>
            </ul>
        </div>
    </nav>

    <!-- Workout Section -->
    <div class="section workout" id="workout">
    <header>
    <!--   <div class="vid1">
        <video autoplay muted loop id="myVideo">
            <source src="./images/workoutvid1.mp4" type="video/mp4">
            </video>
        </div>
-->
        <h1 class="head-border" style="background-color: black;">Workout Plans</h1>
        <p>Explore various workout plans tailored for your fitness journey!</p>
        <div class="image1">
            <img src="./images/workout1.gif" alt="workout image">
        </div>
        <div class="image1">
            <img src="./images/workpout2.gif" alt="workout image">
        </div>
        <div class="image1">
            <img src="./images/workout3.gif" alt="workout image">
        </div>
    </header>

    <style>
    .workout-container {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }
    .different-workout {
        width: 48%; /* Adjust width as needed */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Optional: adds some shadow for better visibility */
        padding: 10px; /* Optional: adds some padding */
        margin-left: 400px; /* Optional: adds margin between the boxes */
    }
</style>

    <div class="different-workout">
    <h3>Upper Body Workouts</h3>
    <ul>
        <li>Chest Press (Machine or Dumbbell): 3 sets of 12 reps</li>
        <li>Seated Row: 3 sets of 10 reps</li>
        <li>Lateral Raises: 3 sets of 12 reps</li>
    </ul>
    </div>
    <div class="different-workout">
    <h3>Lower Body Workouts</h3>
<ul>
    <li>Squats (Machine or Barbell): 3 sets of 12 reps</li>
    <li>Leg Press: 3 sets of 10 reps</li>
    <li>Lunges (Dumbbell or Bodyweight): 3 sets of 12 reps (each leg)</li>
    <li>Leg Curls (Machine): 3 sets of 12 reps</li>
    <li>Calf Raises (Machine or Dumbbell): 3 sets of 15 reps</li>
</ul>

    </div>
    </div>
</div>

    <!-- Nutrition Section -->
    <div class="section nutrition" id="nutrition">
        <header>
        <h1 class="head-border" style="background-color: black;">Nutrition</h1>
            <p>Learn about the best nutrition practices to complement your workouts!</p>
            <div class="image1">
            <img src="./images/nutrition1.gif" alt="workout image">
        </div>
        <div class="image1">
            <img src="./images/njutrition2.gif" alt="workout image">
        </div>
        <div class="image1">
            <img src="./images/nutrition3.gif" alt="workout image">
        </div>
        </header>
<style>
.nutrition-style {
    width: 48%; /* Adjust width as needed */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Optional: adds some shadow for better visibility */
        padding: 10px; /* Optional: adds some padding */
        margin-left: 400px; /* Optional: adds margin between the boxes */
}

</style>


        <div class="nutrition-style">
        <h3>Healthy Eating Tips</h3>
<ul>
    <li>Focus on whole foods: fruits, vegetables, lean proteins, and whole grains.</li>
    <li>Stay hydrated: Drink plenty of water throughout the day.</li>
    <li>Plan your meals: Prepare healthy meals in advance to avoid unhealthy choices.</li>
    <li>Practice portion control: Be mindful of serving sizes to avoid overeating, even with healthy foods.</li>
</ul>
</div>
    </div>

    <!-- Progress Tracking Section -->
    <div class="section progress" id="progress">
        <header>
        <h1 class="head-border" style="background-color: black;">Real-Time Progress Training</h1>
            <p>Keep track of your fitness journey and monitor your progress!</p>
            <div class="image1">
            <img src="./images/realtime1.gif" alt="realtime image">
        </div>
        <div class="image1">
            <img src="images/realtime2.gif" alt="realtime image">
        </div>
        <div class="image1">
            <img src="./images/realtime3.webp" alt="realtime image">
        </div>
        </header>
        <div class="nutrition-style">
        <h3>Tracking Tools</h3>
        <ul>
            <li>Use apps to log workouts and nutrition.</li>
            <li>Set measurable goals: weight loss, muscle gain, or fitness achievements.</li>
            <li>Regularly assess your progress with fitness tests and measurements.</li>
        </ul>
        </div>
    </div>

    <!-- Community Support Section -->
    <div class="section community" id="community">
        <header>
        <h1 class="head-border" style="background-color: black;">Community</h1>
            <p>Join our community for motivation and support from fellow fitness enthusiasts!</p>
            <div class="image1">
            <img src="./images/community.gif" alt="community image">
        </div>
        </header>
        <div class="nutrition-style">
        <h3>Join Our Community</h3>
        <ul>
            <li>Participate in group workouts and challenges.</li>
            <li>Share your progress and get feedback from others.</li>
            <li>Access forums for tips, advice, and motivation.</li>
        </ul>
        </div>
    </div>
<!--footer part-->
<footer>
      <div class="container">
        <p>&copy; 2024 FitLife Innovations. All rights reserved.</p>
      </div>
    </footer> 
</body>
</html>
