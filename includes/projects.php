<?php
$stmt = $pdo->query('SELECT * FROM projects ORDER BY id DESC');
$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<section class="projects" id="projects">
    <div class="container">
        <h2 data-aos="fade-up">Projects</h2>
        <div class="project-grid">
            <?php foreach ($projects as $project): ?>
            <div class="project-card" data-aos="fade-up" data-aos-delay="100">
                <?php if ($project['image']): ?>
                <img src="<?php echo htmlspecialchars($project['image']); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>">
                <?php endif; ?>
                <h3><?php echo htmlspecialchars($project['title']); ?></h3>
                <p><?php echo htmlspecialchars($project['description']); ?></p>
                <span class="tech"><?php echo htmlspecialchars($project['technologies']); ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
