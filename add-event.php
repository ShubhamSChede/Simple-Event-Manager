<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Event</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/script.js"></script>
</head>
<body>
<header>
        <div class="container">
            <h1>ADD EVENT</h1>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <form action="php/events.php" method="POST" class="form">
            <label for="title">Event Title:</label>
            <input type="text" id="title" name="title" required>

            <label for="date">Event Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="description">Event Description:</label>
            <textarea id="description" name="description"></textarea>

            <button type="submit">Add Event</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2024 MyEventPlanner. All rights reserved.</p>
    </footer>
</body>
</html>
