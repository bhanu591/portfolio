<?php
$stmt = $pdo->query('SELECT * FROM testimonials ORDER BY id DESC');
$testimonials = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<section class="testimonials" id="testimonials">
    <div class="container">
        <h2 data-aos="fade-up">Happy Clients</h2>
        <div class="testimonial-grid">
            <?php foreach ($testimonials as $t): ?>
            <div class="testimonial" data-aos="flip-left">
                <p class="message">"<?php echo htmlspecialchars($t['feedback']); ?>"</p>
                <p class="client">- <?php echo htmlspecialchars($t['client']); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
