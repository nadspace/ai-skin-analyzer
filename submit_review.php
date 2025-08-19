<?php
session_start();
include 'config.php'; // Fail sambungan ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $rating = intval($_POST['rating']);
    $comment = trim($_POST['comment']);

    if (!empty($name) && !empty($comment) && $rating >= 1 && $rating <= 5) {
        $stmt = $conn->prepare("INSERT INTO reviews (name, rating, comment) VALUES (?, ?, ?)");
        $stmt->bind_param("sis", $name, $rating, $comment);
        
        if ($stmt->execute()) {
            $_SESSION['message'] = "Review submitted successfully!";
        } else {
            $_SESSION['message'] = "Error submitting review.";
        }
        
        $stmt->close();
    } else {
        $_SESSION['message'] = "Please fill all fields correctly.";
    }
    
    header("Location: review.php");
    exit();
}
?>
