<?php include 'databaseconnect.php';?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// define variables and set to empty values
$name = $location = $phone = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $location = test_input($_POST["location"]);
  $phone = test_input($_POST["phone"]);
  $email = test_input($_POST["email"]);
  $comment = test_input($_POST["comment"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// define variables and set to empty values
$Err = "";
$successMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $Err = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $Err = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["comment"])) {
    $Err = "Message is required";
  }
  else {
    $comment = test_input($_POST["comment"]);
  }

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $headers = "From: jrmuller1027@gmail.com";
  // Change this to your email address you want to form sent to
  $to = "jaredrmuller@aol.com";
  $subject = "Contact Form Submission From " . $name . "";

  $message = "Message from " . $name . " 
  <br>Phone: " . $phone . " 
  <br>Email: " . $email . "
  <br>Location: " . $location . " 
  <br>Request: " . $comment . "";

  $sent = mail($to, $subject, $message, $headers);

  if ($sent) {
    $successMsg = "Form submission successful!";
  } else {
    $Err = "couldn't send the mail";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <script src="https://kit.fontawesome.com/fdd4513873.js"
        crossorigin="anonymous"></script>
    <title>American Staircrafters - Home</title>
    <style>
    .success {
        color: green;
    }

    .error {
        color: red;
    }
    </style>
</head>

<body>

    <!--Header-->
    <section class="header-wrapper">
        <header class="header-container">
            <h1 class="logo"><a href="index.html"><span
                        style="color:#a80808;">A</span>merican<br><span
                        style="color:#3759b0;">S</span>taircrafters</a></h1>
            <ul class="main-nav">
                <li><a href="rails.html">Stair Rails</a></li>
                <li><a href="stairs.html">Stairs</a></li>
                <li><a href="index.html">Home</a></li>
                <li><a href="products.html">Products</a></li>
                <li><a href="contact.html" class="active-nav">Contact</a></li>
            </ul>
            <div class="mobile-menu-container">
                <i class="mobile-menu-icon fa-solid fa-bars"></i>
                <div class="mobile-menu">
                    <li><a href="rails.html">Stair Rails</a></li>
                    <li><a href="stairs.html">Stairs</a></li>
                    <li><a href="index.html" class="active-nav">Home</a></li>
                    <li><a href="products.html">Products</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </div>
            </div>
            <button class="nav-contact-btn"><a href="contact.html">(301) 748 -
                    9400</a></button>
        </header>
    </section>

    <section>
        <h1 class="contact-header">Contact Us</h1>
        <div class="contact-container">
            <div style="width: 35%; padding-left: 8vw;">
                <h3>Please give us a call or fill out the request form. We will
                    get back to you as soon as possible.</h3>
                <hr>
                <p>Phone: (301) 748 - 9400<br>
                    Email: Mr6010@aol.com<br>
                    Address: PO Box 172, Middletown, MD 21769</p>
            </div>

            <div style="width: 45%">
                <form method="post"
                    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <input type="text" name="name" class="input-field"
                        placeholder="First & Last Name*" required>
                    <span class="error"> <?php echo $Err;?></span>
                    <input type="text" name="location" class="input-field"
                        placeholder="City, State">
                    <input type="text" name="phone" class="input-field"
                        placeholder="Phone Number">
                    <input type="email" name="email" class="input-field"
                        placeholder="Email Address*" required><br><br><br>
                    <span class="error"> <?php echo $Err;?></span>
                    <textarea name="comment" cols="54" rows="10"
                        required></textarea><br>
                    <span class="success"> <?php echo $successMsg;?></span>
                    <br>
                    <input type="submit" name="submit" class="contact-btn">
                </form>
            </div>
        </div>
    </section>

    <?php
$name = $location = $phone = $email = $message = $date = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $location = $_POST["location"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["comment"];
}
?>

    <?php 
$sql = "INSERT INTO `contact` (contactName, contactLocation, contactPhone, contactEmail, contactMessage, contactDate) 
VALUES ('$name', '$location', '$phone', '$email', '$message', CURRENT_TIMESTAMP)";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (mysqli_query($connection, $sql)) {
        echo '<div class="blog-success">Contact form successfully submitted!</div>';
    } else {
        echo '<div class="blog-error">Error: ' . $sql . '<br>' . mysqli_error($connection) . '</div>';
    }
}
?>

    <?php mysqli_close($connection); ?>


    <!--Page Footer-->
    <section class="footer-wrapper">
        <div class="footer-container">
            <div class="footer-left">
                <h2 class="newFont"><span class="newFont"
                        style="color:#a80808;">A</span>merican <span
                        class="newFont" style="color:#3759b0;">
                        S</span>taircrafters</h2>
                <p>301.748.9400</p>
                <hr width="15%">
                <p>Mr6010@aol.com</p>
                <hr width="15%">
                <p>Middletown, Maryland</p>
            </div>
            <div class="footer-right">
                <h3>Serving the central<br> Maryland area</h3>
                <hr
                    style="width: 30%; margin:30px auto 20px auto; color: white;">
                <img src="images/country.png">
                <!-- <div class="flex">
        <img src="images/facebook.svg">
        <img src="images/instagram.svg">
        <img src="images/brand.svg">
      </div> -->
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>