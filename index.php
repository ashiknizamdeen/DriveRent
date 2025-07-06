<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DriveRent - Premium Car Rental</title>

    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Prevent back button (your original script) -->
    <script type="text/javascript">
        window.history.forward();

        function noBack() {
            window.history.forward();
        }

        function preventBack() {
            window.history.forward();
        }
        setTimeout("preventBack()", 0);
        window.onunload = function() {
            null
        };
    </script>
</head>

<body>
    <?php
    require_once('connection.php');
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        if (empty($email) || empty($pass)) {
            echo '<script>showAlert("Please fill in all fields", "error");</script>';
        } else {
            $query = "SELECT * FROM users WHERE EMAIL = ?";
            $stmt = mysqli_prepare($con, $query);
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $res = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($res)) {
                $db_password = $row['PASSWORD'];
                if (password_verify($pass, $db_password)) {
                    session_start();
                    $_SESSION['email'] = $email;
                    header("location: cardetails.php");
                    exit();
                } else {
                    echo '<script>showAlert("Invalid password", "error");</script>';
                }
            } else {
                echo '<script>showAlert("Email not found", "error");</script>';
            }
        }
    }
    ?>

    <div class="main-container">
        <div class="floating-elements"></div>

        <div class="content-wrapper">
            <nav class="navbar">
                <div class="logo">DriveRent</div>
                <div class="menu">
                    <ul>
                        <li><a href="#home">HOME</a></li>
                        <li><a href="about.html">ABOUT</a></li>
                        <li><a href="services.html">SERVICES</a></li>
                        <li><a href="contactus.html">CONTACT</a></li>
                    </ul>
                </div>
                <button class="admin-btn"><a href="adminlogin.php">ADMIN LOGIN</a></button>
            </nav>

            <div class="main-content">
                <div class="hero-section">
                    <h1>Rent Your <br><span>Dream Car</span></h1>
                    <p class="description">
                        Live the life of luxury with our premium car rental service.
                        Choose from our vast collection of high-end vehicles and create
                        unforgettable memories with your loved ones. Experience the
                        ultimate driving pleasure today.
                    </p>
                    <button class="join-btn"><a href="register.php">JOIN US</a></button>
                </div>

                <div class="login-form">
                    <h2>Login Here</h2>
                    <div id="alert-container"></div>
                    <form id="loginForm" method="POST">
                        <div class="form-group">
                            <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                        </div>
                        <div class="form-group">
                            <input type="password" id="password" name="pass" placeholder="Enter your password" required>
                        </div>
                        <button type="submit" class="login-btn" name="login">Login</button>
                    </form>
                    <div class="signup-link">
                        Don't have an account?<br>
                        <a href="register.php">Sign up here</a>
                    </div>
                    <div class="feedback-link">
                        <a href="feedback.html">Share your experience with us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Enhanced form validation
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();

            // Client-side validation
            if (!email || !password) {
                e.preventDefault();
                showAlert('Please fill in all fields', 'error');
                return false;
            }

            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                e.preventDefault();
                showAlert('Please enter a valid email address', 'error');
                return false;
            }

            // Password strength check
            if (password.length < 6) {
                e.preventDefault();
                showAlert('Password must be at least 6 characters long', 'error');
                return false;
            }
            return true;
        });

        function showAlert(message, type) {
            const alertContainer = document.getElementById('alert-container');
            alertContainer.innerHTML = '';

            const alertDiv = document.createElement('div');
            alertDiv.className = `alert alert-${type}`;
            alertDiv.textContent = message;
            alertContainer.appendChild(alertDiv);

            setTimeout(() => {
                if (alertDiv.parentNode) {
                    alertDiv.parentNode.removeChild(alertDiv);
                }
            }, 5000);
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        const formInputs = document.querySelectorAll('input');
        formInputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'translateY(-2px)';
            });

            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>

</html>