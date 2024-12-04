<?php
// Include the database connection
include 'includes/db_connect.php';

// Check if the 'id' parameter exists in the URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Sanitize the input to ensure it's an integer
} else {
    die("Error: No question ID provided.");
}

// Prepare and execute the query
$sql = "SELECT * FROM questions WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

// Check if a result was found
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    die("Error: Question not found.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($row['question']); ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <main class="container my-5">
        <h1><?php echo htmlspecialchars($row['question']); ?></h1>
        <p><strong>Description:</strong> <?php echo htmlspecialchars($row['description']); ?></p>
        <p><strong>Answer:</strong> <?php echo htmlspecialchars($row['answer']); ?></p>
        <a href="content.php" class="btn btn-primary mt-3">Back to Content</a>
    </main>
    <?php include 'includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>/