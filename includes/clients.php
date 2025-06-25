<?php
$stmt = $pdo->query('SELECT * FROM clients ORDER BY id DESC');
$clients = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<section class="clients" id="clients">
    <div class="container">
        <h2 data-aos="fade-up">Client Showcase</h2>
        <div class="client-logos">
            <?php foreach ($clients as $c): ?>
            <div class="client-logo" data-aos="zoom-in">
                <?php if ($c['logo']): ?>
                <img src="<?php echo htmlspecialchars($c['logo']); ?>" alt="<?php echo htmlspecialchars($c['name']); ?>">
                <?php else: ?>
                <span><?php echo htmlspecialchars($c['name']); ?></span>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
