<?php
/*
Template Name: feedback1
*/
// get_header();
?>
<?php


global $wpdb;
$database_name = 'wordpress';
$database_user = 'root';
$database_password = '';
$database_host = 'localhost';
$wpdb = new wpdb($database_user, $database_password, $database_name, $database_host);

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database ="wordpress";
// // Create connection
// $conn = new mysqli($servername, $username, $password, $database);
if (!$wpdb) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
  echo'connection succssfully';
}



global $wpdb;
$table_name = $wpdb->prefix . 'feedback';
$data = array(
  'name' => '$name',
  'email' => '$email',
  'feedback' => '$feedback'
);
$wpdb->insert($table_name, $data);

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   // Get data from the form using POST method
//   $name = $_POST['name'];
//   $email = $_POST['email'];
//   $feedback = $_POST['feedback'];

//   // Step 5: Prepare an SQL query to insert the data into the database
//   $sql = "INSERT INTO feedback (name, email, feedback) VALUES ('$name', '$email', $feedback)";

//   // Step 6: Execute the query
//   if ($conn->query($sql) === TRUE) {
//       echo "New record created successfully";
//   } else {
//       echo "Error: " . $sql . "<br>" . $conn->error;
//   }
// }

// Step 7: Close the connection

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
// die();
// mysqli_close($conn);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback Form</title>
  <!-- <link rel="stylesheet" href="styles.css"> -->
  <style>
    /* Basic reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Body styling */
body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

/* Container styling */
.container {
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  width: 400px;
}

h1 {
  text-align: center;
  color: #333;
  margin-bottom: 20px;
}

/* Form element styling */
form {
  display: flex;
  flex-direction: column;
}

label {
  margin-bottom: 8px;
  font-weight: bold;
  color: #555;
}

input, select, textarea {
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ddd;
  border-radius: 4px;
  font-size: 16px;
}

textarea {
  resize: vertical;
}

button {
  padding: 12px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #45a049;
}

/* Responsiveness */
@media (max-width: 500px) {
  .container {
    width: 90%;
  }
}
</style>
</head>
<body>

  <div class="container">
    <h1>Feedback Form</h1>
    <form action="<?php echo esc_url(admin_url('feedback1.php')); ?>" method="post">
    <!-- <form action="<?php //echo esc_url(admin_url('admin-post.php')); ?>" method="post"> -->
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter your name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>

      <label for="feedback">Feedback:</label>
      <textarea id="feedback" name="feedback" rows="5" placeholder="Enter your feedback" required></textarea>

      

      <button type="submit" value="submit">Submit Feedback</button>
    </form>
  </div>
</body>
</html>
<?php
// fetching post data
require_once('wp-load.php'); // add wordpress functionality
    $post = $_POST;

    print_r($post); die('123');
// ?get_footer();
?>