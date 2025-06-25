<section class="contact" id="contact">
    <div class="container">
        <h2 data-aos="fade-up">Contact Us</h2>
        <form action="contact_process.php" method="post" class="contact-form" data-aos="fade-up">
            <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
            <label>Name
                <input type="text" name="name" required>
            </label>
            <label>Email
                <input type="email" name="email" required>
            </label>
            <label>Subject
                <input type="text" name="subject" required>
            </label>
            <label>Phone
                <input type="text" name="phone">
            </label>
            <label>Message
                <textarea name="message" required></textarea>
            </label>
            <button type="submit" class="btn">Send Message</button>
        </form>
    </div>
</section>
