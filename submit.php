<!-- <?php

// Get form data
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

// Format data string
$data = date("Y-m-d H:i:s") . " - Name: " . $name . ", Email: " . $email . ", Subject: " . $subject . ", Message: " . $message . "\n";

// Open log file for appending
$logFile = fopen("log.txt", "a") or die("Error opening log file!");

// Write data to log file
fwrite($logFile, $data);

// Close log file
fclose($logFile);
header('Content-Type: text/plain');
// (Optional) Send success message back to the HTML form
echo "Your message has been submitted successfully!";

?> -->
