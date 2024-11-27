<?php include 'db_connect.php'; ?>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Knowledge Base</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="content.php">Content</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    
                    <!-- Dynamically Add Links for Questions Sorted by ID -->
                    <?php
                    $sql = "SELECT id FROM questions ORDER BY id ASC";
                    $result = $conn->query($sql);
                    if ($result && $result->num_rows > 0):
                        while ($row = $result->fetch_assoc()):
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="question.php?id=<?php echo $row['id']; ?>">
                                Question <?php echo htmlspecialchars($row['id']); ?>
                            </a>
                        </li>
                    <?php 
                        endwhile;
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
