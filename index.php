<!-- MADE BY GABHASTI GIRI SINHA
CLASS IX C 
ROLL 19 
Admission NO : 16793 -->
<?php
// Start the session or include any necessary PHP logic here
session_start();
include 'db.php';

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null; // Check if user is logged in

if ($user_id) {
    // Fetch user details if logged in
    $sql = "SELECT * FROM users WHERE id='$user_id'";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
} else {
    $user = null; // No user logged in
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gabhasti</title>
    <meta name="theme-color" content="#db5945">
    <link rel="stylesheet" href="./assets/css/global/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="content-container" id="content">
        <video id="background-video" autoplay loop muted playsinline>
            <source src="./assets/bg/scifie.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <header>
            <nav>
                <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/projects">Projects</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
                <button class="nav-toggle" aria-label="toggle navigation">
                    <span class="hamburger"></span>
                </button>
            </nav>
        </header>
        <section class="hero-section">
            <div class="container">
            <?php if ($user): ?>

                <h1 class="whoami-titles">Hello,    <?php echo htmlspecialchars($user['name']); ?> </h1>
                <?php else: ?>
                    <h1 class="whoami-titles">Hello,</h1>
                    <?php endif; ?>

                <h1 class="whoami-title">  <br> I'm Gabhasti Giri Sinha! </h1>
                <p class="hero-subtitle">
                    A curious mind from Bihar, currently studying in Class 9 at Mount Litera Zee School. 
                    Passionate about learning new things, I am well-versed in HTML, CSS, JavaScript, C++, and Python. 
                    While coding is my forte, my dream is to become a doctor, blending technology and healthcare for a better future.
                </p>
                <div class="hero-buttons">
                <div class="user-info">
    <?php if ($user): ?>
        <a href="dashboard.php" class="btn btn-primary">
            <?php echo htmlspecialchars($user['name']); ?> &#x2192;
        </a>
    <?php else: ?>
        <a href="register.php" class="btn btn-primary">Register &#x2192;</a>
    <?php endif; ?>
</div>
                    <a href="/blog" class="btn btn-secondary">Blog</a>
                </div>
            </div>
        </section>
        <div class="aboutme">
            <div class="marquee">
                <div class="marquee__inner" aria-hidden="true">
                    <span class="viper">ABOUT ME ABOUT ME ABOUT ME</span>
                    <span class="viper"> ABOUT ME ABOUT ME ABOUT ME</span>
                </div>
            </div>
            <section class="about-me">
                <div class="to">
                    <img src="/assets/img/about.png" alt="Gabhasti Giri Sinha" class="about-image">
                    <p>
                        Hello! I'm <strong>Gabhasti</strong> Giri Sinha, a dedicated student from Bihar currently in Class 9   
                        My journey in education has been fueled by a passion for learning and exploring new ideas. 
                        I have developed skills in various programming languages, which I enjoy using to create innovative projects.
                    </p>
                    <div class="too">
                        <p>
                            My aspiration is to become a doctor, as I believe in the power of healthcare to change lives and improve communities. 
                            I aim to combine my technical skills with my medical career, envisioning a future where technology enhances patient care and healthcare systems.
                        </p>
                    </div>
                </div>
                <button class="aboutbtn">
                    <span class="transition"></span>
                    <span class="gradient"></span>
                    <span class="label">Learn More -</span>
                </button>
            </section>
        </div>
        <div class="achievments">
            <div class="marquee">
                <div class="marquee__inner" aria-hidden="true">
                    <span class="viper">PROJECT PROJECT PROJECT</span>
                    <span class="viper">PROJECT PROJECT PROJECT</span>
                </div>
                <div class="marquee-container">
                    <div class="marqueee">
                        <div class="pr1">
                            <div class="image-container">
                                <img src="/assets/img/LauncherX.png" alt="LauncherX" class="cards">
                               <center> <p >LauncherX</p></center>
                            </div>
                        </div>
                         <div class="pr2">
                            <div class="image-container">
                                <img src="/assets/img/projectix.png" alt="Project IX" class="cards">
                               <center> <p >Project IX</p></center>
                            </div>
                        </div>
                        <div class="pr1">
                            <div class="image-container">
                                <img src="/assets/img/kysta.png" alt="Kysta" class="cards">
                              <center>  <p >Kysta</p> </center>
                            </div>
                        </div>
                        <div class="pr1">
                            <div class="image-container" style="color: black;">
                                <img src="https://cdn.alt-mp.com/static/images/updates/branch_release.png" alt="Kysta" class="cards">
                              <center>  <p >Kysta Multiplayer Role Play Server</p> </center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="area">
                    <ul class="circles">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul> <br><br><br><br><br><br>
                    <center><h1 class="whoami-title">More.....</h1></center>
                </div>
            </div>
        </div>
        <div class="contact">
            <div class="gradients"></div>
            <div class="contact-container" style="display: flex; align-items: center;">
                <img src="/assets/img/contact.png" class="floating-image" alt="Contact Image" /> <br>
                <div class="vertical-line"></div>
                <div class="contact-form">
    <h2>Contact Us</h2>
    <form id="contactForm" action="https://formie.io/form/3f4492c4-2efb-49e9-ab52-778d3170b770" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="username" placeholder="Your name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Your email" required>
        <label for="message">Message:</label>
        <textarea id="message" name="query" rows="5" placeholder="Your message" required></textarea>
        <button type="submit">Send Message</button>
    </form>
    <div id="responseMessage" style="display:none;"></div>
</div>

<script>
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Send the form data using Fetch API
    fetch(this.action, {
        method: this.method,
        body: new FormData(this)
    })
    .then(response => {
        if (response.ok) {
            // If the response is okay, show success message
            document.getElementById('responseMessage').innerHTML = '<div class="success">Success! Your message has been sent.</div>';
        } else {
            // If there was an error, show failure message
            document.getElementById('responseMessage').innerHTML = '<div class="error">Failed to send your message. Please try again.</div>';
        }
    })
    .catch(error => {
        // Handle network errors
        document.getElementById('responseMessage').innerHTML = '<div class="error">An error occurred. Please try again later.</div>';
    })
    .finally(() => {
        document.getElementById('responseMessage').style.display = 'block'; // Show the message div
    });
});
</script>

<style>
.success {
    color: green;
}
.error {
    color: red;
}
</style>

            </div>
            <div class="footer">
                <footer>
                    <div class="footer">
                        <div class="row">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                        <div class="row">
                            <ul>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">About Me</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                        <div class="row">
                            Gabhasti Copyright © 2021 Gabhasti.tech - All rights reserved
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <script src="./assets/js/global/main.js"></script>

</body>
</html>
