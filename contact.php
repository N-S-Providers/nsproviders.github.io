<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact | NS Providers</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<header>
    <div class="logo">NS Providers</div>
    <nav>
        <a href="index.php">Home</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>

<!-- ================= HERO ================= -->
<section class="hero">
    <div class="hero-container">
        <h1 class="hero-title">Get in Touch</h1>
        <p class="hero-subtitle">Let’s discuss your ideas and build something professional together.</p>
    </div>
</section>

<!-- ================= CONTACT FORM ================= -->
<section class="section contact-section">
    <div class="container">
        <div class="card reveal">
            <h2>Send Us a Message</h2>

            <!-- Success / Error Messages -->
            <?php if(isset($_GET['success'])): ?>
                <div class="success-message" id="messageBox">Message sent successfully!</div>
            <?php endif; ?>

            <?php if(isset($_GET['error'])): ?>
                <div class="success-message" id="messageBox" style="background:#e74c3c;">Something went wrong. Try again.</div>
            <?php endif; ?>

            <!-- CONTACT FORM (Backend Logic Intact) -->
            <form method="POST" action="save_contact.php" class="contact-form">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                <button type="submit" class="btn primary">Send Message</button>
            </form>
        </div>
    </div>
</section>

<footer>
    © 2026 NS Providers. All rights reserved.
</footer>

<!-- ================= JS FOR MESSAGES ================= -->
<script>
if (window.location.search.includes("success=1") || window.location.search.includes("error=1")) {
    window.history.replaceState({}, document.title, window.location.pathname);
}

document.addEventListener("DOMContentLoaded", function() {
    var message = document.getElementById("messageBox");
    if (message) {
        setTimeout(function() {
            message.style.opacity = "0";
            message.style.transition = "opacity 0.5s ease";
            setTimeout(() => message.remove(), 500);
        }, 3000);
    }
});
</script>

<!-- Floating Contact -->
<div class="floating-contact">
    <a href="https://wa.me/7743959840" target="_blank">📱 WhatsApp</a>
    <a href="mailto:nsproviders26@gmail.com">✉ Email</a>
</div>


</body>
</html>