<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<main class="contact-page">

  <!-- HERO -->
  <section class="contact-hero">
    <div class="hero-overlay">
      <h1>Contact <span>FoodFusion</span></h1>
      <p>Have a question, recipe idea, or feedback? Let’s talk.</p>
    </div>
  </section>

  <!-- FORM SECTION -->
  <section class="contact-wrapper">

    <form class="contact-form" method="POST" action="../logic/submit_contact.php">
      <h2>Send Us a Message</h2>

      <?php if (isset($_GET['success'])): ?>
        <p class="success-msg">Your message has been sent successfully ✨</p>
      <?php endif; ?>

      <div class="form-group">
        <input type="text" name="name" required>
        <label>Full Name</label>
      </div>

      <div class="form-group">
        <input type="email" name="email" required>
        <label>Email Address</label>
      </div>

      <div class="form-group">
        <input type="text" name="subject" required>
        <label>Subject</label>
      </div>

      <div class="form-group">
        <textarea name="message" rows="5" required></textarea>
        <label>Your Message</label>
      </div>
        <div class="recaptcha-wrap">
  <div class="g-recaptcha" data-sitekey="6LfLW0AsAAAAAAsMcviK8GYn9LinwqYMrf85Qk6B"></div>
</div>

      <button type="submit" class="submit-btn">Send Message</button>
    </form>

  </section>

</main>

<?php include '../includes/footer.php'; ?>
