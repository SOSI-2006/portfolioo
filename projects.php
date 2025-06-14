<?php include('includes/header.php'); ?>

<h2>პროექტები</h2>
<div class="projects">
    <?php
    $projects = [
        ['title' => 'პროექტი 1', 'description' => 'პირველი პროექტის აღწერა'],
        ['title' => 'პროექტი 2', 'description' => 'მეორე პროექტის აღწერა'],
    ];

    foreach ($projects as $project) {
        echo "<div class='project-card'>";
        echo "<h3>{$project['title']}</h3>";
        echo "<p>{$project['description']}</p>";
        echo "</div>";
    }
    ?>
</div>

<?php include('includes/footer.php'); ?>