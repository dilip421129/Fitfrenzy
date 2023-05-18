<?php include 'includes/session.php'; ?>
<?php
$conn = $pdo->open();
$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];

// Connect to the database

// Prepare the SQL statement
$stmt = $conn->prepare("INSERT INTO contactus (name, subject, email, message) VALUES (:name, :subject, :email, :message)");

// Bind the form data to the statement
$stmt->bindParam(':name', $name);
$stmt->bindParam(':subject', $subject);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':message', $message);

// Execute the statement
if ($stmt->execute()) {
    echo "Record inserted successfully.";
	
	
} else {
    echo "Error inserting record: " . $stmt->errorInfo()[2];
}

$pdo->close();
header("Location: index.php");
?>


