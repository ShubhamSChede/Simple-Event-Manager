<?php
require 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    die("Unauthorized access. <a href='../login.html'>Login here</a>");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = htmlspecialchars($_POST['title']);
    $date = $_POST['date'];
    $description = htmlspecialchars($_POST['description']);
    $user_id = $_SESSION['user_id']; // Get user ID from session

    try {
        $stmt = $conn->prepare("INSERT INTO events (user_id, title, date, description) VALUES (:user_id, :title, :date, :description)");
        $stmt->execute([
            ':user_id' => $user_id,
            ':title' => $title,
            ':date' => $date,
            ':description' => $description,
        ]);

        echo "Event added successfully! <a href='../index.html'>Go back</a>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
