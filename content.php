<?php include 'includes/db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knowledge Base - Content</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <main class="container my-5">
        <h1>Knowledge Base Content</h1>
        <?php
        $sql = "SELECT * FROM questions";
        $result = $conn->query($sql);
        if ($result->num_rows > 0):
        ?>
        <div class="accordion" id="contentAccordion">
            <?php while ($row = $result->fetch_assoc()): ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading<?php echo $row['id']; ?>">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $row['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $row['id']; ?>">
                        <?php echo htmlspecialchars($row['question']); ?>
                    </button>
                </h2>
                <div id="collapse<?php echo $row['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $row['id']; ?>" data-bs-parent="#contentAccordion">
                    <div class="accordion-body">
                        <p><strong>Description:</strong> <?php echo htmlspecialchars($row['description']); ?></p>
                        <p><strong>Answer:</strong> <?php echo htmlspecialchars($row['answer']); ?></p>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php else: ?>
            <p>No content available.</p>
        <?php endif; ?>
    </main>
    <?php include 'includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
