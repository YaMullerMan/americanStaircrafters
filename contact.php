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

<?php
$PageTitle="Contact | American Staircrafters";
include('templates/header.php');
?>

<section>
    <h1 class="contact-header">Contact Us</h1>
    <div class="contact-container">
        <div class="contact-text">
            <h3>Please give us a call or fill out the request form. We will
                get back to you as soon as possible.</h3>
            <hr>
            <p>Phone: (301) 748 - 9400<br>
                Email: Mr6010@aol.com<br>
                Address: PO Box 172, Middletown, MD 21769</p>
        </div>

        <div class="contact-right">
            <form method="post" class="contact-form"
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
                <textarea name="comment" placeholder="Your question" rows="12" required></textarea><br>
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


<?php include('templates/footer.php'); ?>