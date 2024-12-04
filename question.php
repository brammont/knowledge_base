<?php
// Include the database connection and shared header
include 'includes/header.php';

// Initialize default values
$question = 'Question not found';
$description = 'No description available for the given ID.';
$answer = 'No answer available.';

// Check if 'id' parameter exists in the URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Sanitize the input

    // Execute query to fetch question details
    $sql = "SELECT question, description, answer FROM questions WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            $result = $stmt->get_result();

            if ($result && $result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $question = $row['question'] ?? $question;
                $description = $row['description'] ?? $description;
                $answer = $row['answer'] ?? $answer;
            }
        }
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($question); ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <main class="container my-5">
        <h1><?php echo htmlspecialchars($question); ?></h1>
        <p><strong>Description:</strong> <?php echo htmlspecialchars($description); ?></p>
        <p><strong>Answer:</strong> <?php echo htmlspecialchars($answer); ?></p>
        <a href="content.php" class="btn btn-primary mt-3">Back to Content</a>
    </main>
    <?php include 'includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
