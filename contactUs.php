<?php include('shared/_header.php'); ?>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="contactUs.css">
</head>
<body>
    <main>
        <div class="big-wrapper light">
            <img src="./images/shape.png" alt="" class="shape" />

            <?php include('shared/_navbar.php'); ?>

            <div class="container mt-5">
                <!-- Contact Us Card -->
                <div class="card border-0 shadow contact-card">
                    <div class="card-body mt-5 mb-2 mx-3">
                        <h3 class="card-title">
                            <span class="text-primary icon-hover">
                                <i class="fa-solid fa-paper-plane"></i>
                            </span>
                            Contact Us
                        </h3>
                        <p class="card-text fs-5 text-justify">
                            We’d love to hear from you! Reach out with any questions, feedback, or inquiries, and we’ll get back to you as soon as possible.
                        </p>
                    </div>

                    <!-- Google Maps Embed for Address -->
                    <div class="mb-4 mx-auto" style="width: 100%; display: flex; align-items: center; justify-content: center;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3309.52954553352!2d18.4233!3d-33.9258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc6786b7420e03%3A0x8ebfdb62d7dc85e6!2s123%20Main%20Street%2C%20Cape%20Town%2C%20South%20Africa!5e0!3m2!1sen!2sza!4v1619582946054!5m2!1sen!2sza"
                            width="400" height="300" style="border:0; width: 100%; max-width: 600px; border-radius: 10px;"
                            allowfullscreen="" loading="lazy"></iframe>
                    </div>

                    <!-- Contact Form -->
                    <div class="contact-form-wrapper mx-3">
                        <form action="submit_contact.php" method="POST" class="contact-form">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" id="subject" name="subject" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea id="message" name="message" rows="4" class="form-control" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include('shared/_footer.php'); ?>

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="./shared/app.js"></script>
</body>

</html>
