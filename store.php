<?php
$servername = "localhost";
$username = "root";
$password = "Kpva!@#$12"; // Replace with your actual password
$database = "studentdb";

// Only process if form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Collect and sanitize POST data
    $name = $conn->real_escape_string($_POST['name']);
    $reg_no = $conn->real_escape_string($_POST['reg_no']);
    $dob = $conn->real_escape_string($_POST['dob']);
    $program = $conn->real_escape_string($_POST['program']);
    $email = $conn->real_escape_string($_POST['email']);
    $taddress = $conn->real_escape_string($_POST['taddress']);
    $paddress = $conn->real_escape_string($_POST['paddress']);
    $phone = $conn->real_escape_string($_POST['phone']);

    // SQL Insert statement
    $sql = "INSERT INTO students (name, reg_no, dob, program, email_id, taddress, paddress, phone_no)
            VALUES ('$name', '$reg_no', '$dob', '$program', '$email', '$taddress', '$paddress', '$phone')";

    // Execute query and show result
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data inserted successfully!'); window.location.href='first.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
