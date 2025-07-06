<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - DriveRent</title>
    <script type="text/javascript">
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
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            overflow-x: hidden;
            height: 100vh;
        }

        .main-container {
            width: 100%;
            height: 100vh;
            background: linear-gradient(135deg, rgba(255, 114, 0, 0.1) 0%, rgba(0, 0, 0, 0.4) 100%),
                url('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .main-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg,
                    rgba(255, 114, 0, 0.05) 0%,
                    rgba(0, 0, 0, 0.3) 50%,
                    rgba(255, 114, 0, 0.05) 100%);
            z-index: 1;
        }

        .content-wrapper {
            position: relative;
            z-index: 2;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            width: 100%;
            height: 80px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            flex-shrink: 0;
        }

        .logo {
            color: #ff7200;
            font-size: 32px;
            font-weight: bold;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        .logo:hover {
            color: #ff9500;
        }

        .menu ul {
            display: flex;
            list-style: none;
            gap: 40px;
            align-items: center;
        }

        .menu li a {
            text-decoration: none;
            color: #ffffff;
            font-weight: 500;
            font-size: 16px;
            transition: all 0.3s ease;
            position: relative;
            padding: 8px 0;
        }

        .menu li a:hover {
            color: #ff7200;
        }

        .home-btn {
            background: #ff7200;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .home-btn:hover {
            background: #e55a00;
            transform: translateY(-2px);
        }

        .home-btn a {
            text-decoration: none;
            color: white;
            font-weight: 500;
            font-size: 14px;
        }

        .main-content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .admin-section {
            display: flex;
            align-items: center;
            gap: 80px;
            max-width: 1200px;
            width: 100%;
        }

        .admin-welcome {
            flex: 1;
            color: white;
            text-align: left;
        }

        .admin-welcome h1 {
            font-size: 64px;
            font-weight: bold;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            line-height: 1.2;
        }

        .admin-welcome .highlight {
            color: #ff7200;
            background: linear-gradient(45deg, #ff7200, #ff9500);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .admin-welcome .description {
            font-size: 18px;
            color: #d4d4d4;
            line-height: 1.8;
            margin-bottom: 30px;
            max-width: 500px;
        }

        .admin-features {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 30px;
        }

        .feature-item {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 15px;
            border-radius: 10px;
            border: 1px solid rgba(255, 114, 0, 0.3);
            transition: all 0.3s ease;
        }

        .feature-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(255, 114, 0, 0.2);
        }

        .feature-item h3 {
            color: #ff7200;
            font-size: 16px;
            margin-bottom: 5px;
        }

        .feature-item p {
            color: #d4d4d4;
            font-size: 14px;
        }

        .admin-form {
            background: linear-gradient(145deg, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.6));
            backdrop-filter: blur(20px);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.1);
            width: 400px;
            height: fit-content;
        }

        .admin-form h2 {
            background: linear-gradient(45deg, #ff7200, #ff9500);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-align: center;
            font-size: 28px;
            margin-bottom: 30px;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .form-group input {
            width: 100%;
            padding: 15px 20px;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 114, 0, 0.3);
            border-radius: 10px;
            color: white;
            font-size: 16px;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .form-group input:focus {
            outline: none;
            border-color: #ff7200;
            box-shadow: 0 0 20px rgba(255, 114, 0, 0.3);
            transform: translateY(-2px);
        }

        .form-group input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .admin-login-btn {
            width: 100%;
            padding: 16px;
            background: linear-gradient(45deg, #ff7200, #ff9500);
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 20px;
        }

        .admin-login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 114, 0, 0.4);
        }

        .admin-info {
            text-align: center;
            color: rgba(255, 255, 255, 0.8);
            font-size: 14px;
            margin-top: 15px;
        }

        .floating-elements {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .floating-elements::before,
        .floating-elements::after {
            content: '';
            position: absolute;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, rgba(255, 114, 0, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .floating-elements::before {
            top: 20%;
            left: 10%;
            animation-delay: -3s;
        }

        .floating-elements::after {
            top: 60%;
            right: 10%;
            animation-delay: -1s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 10px;
            font-weight: bold;
            text-align: center;
            animation: slideIn 0.5s ease;
        }

        .alert-error {
            background: rgba(220, 53, 69, 0.2);
            color: #dc3545;
            border: 1px solid rgba(220, 53, 69, 0.3);
        }

        .alert-success {
            background: rgba(40, 167, 69, 0.2);
            color: #28a745;
            border: 1px solid rgba(40, 167, 69, 0.3);
        }

        @keyframes slideIn {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .admin-section {
                flex-direction: column;
                gap: 40px;
                text-align: center;
            }

            .admin-welcome h1 {
                font-size: 48px;
            }

            .admin-form {
                width: 100%;
                max-width: 400px;
                padding: 30px;
            }

            .navbar {
                flex-direction: column;
                height: auto;
                padding: 20px;
            }

            .menu ul {
                flex-wrap: wrap;
                gap: 20px;
                margin-top: 15px;
            }

            .admin-features {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .admin-welcome h1 {
                font-size: 36px;
            }

            .logo {
                font-size: 28px;
            }

            .menu ul {
                flex-direction: column;
                gap: 15px;
            }

            .admin-form {
                padding: 20px;
            }

            .navbar {
                padding: 15px;
            }
        }
    </style>

    <?php
    require_once('connection.php');
    if (isset($_POST['adlog'])) {
        $id = $_POST['adid'];
        $pass = $_POST['adpass'];

        if (empty($id) || empty($pass)) {
            echo '<script>showAlert("Please fill in all fields", "error");</script>';
        } else {
            $query = "select *from admin where ADMIN_ID='$id'";
            $res = mysqli_query($con, $query);
            if ($row = mysqli_fetch_assoc($res)) {
                $db_password = $row['ADMIN_PASSWORD'];
                if ($pass == $db_password) {
                    echo '<script>showAlert("Welcome Administrator!", "success");</script>';
                    echo '<script>setTimeout(function(){ window.location.href = "admindash.php"; }, 2000);</script>';
                } else {
                    echo '<script>showAlert("Invalid password", "error");</script>';
                }
            } else {
                echo '<script>showAlert("Invalid admin ID", "error");</script>';
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
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="about.html">ABOUT</a></li>
                        <li><a href="services.html">SERVICES</a></li>
                        <li><a href="contactus.html">CONTACT</a></li>
                    </ul>
                </div>
                <button class="home-btn"><a href="index.php">GO TO HOME</a></button>
            </nav>

            <div class="main-content">
                <div class="admin-section">
                    <div class="admin-welcome">
                        <h1>Welcome <br><span class="highlight">Administrator</span></h1>
                        <p class="description">
                            Access your administrative dashboard to manage the DriveRent platform.
                            Monitor bookings, manage vehicles, oversee user accounts, and maintain
                            the premium car rental experience for all customers.
                        </p>

                        <div class="admin-features">
                            <div class="feature-item">
                                <h3>Vehicle Management</h3>
                                <p>Add, edit, and monitor fleet vehicles</p>
                            </div>
                            <div class="feature-item">
                                <h3>User Management</h3>
                                <p>Manage customer accounts and profiles</p>
                            </div>
                            <div class="feature-item">
                                <h3>Booking Oversight</h3>
                                <p>Track and manage all rental bookings</p>
                            </div>
                            <div class="feature-item">
                                <h3>Analytics Dashboard</h3>
                                <p>View performance metrics and reports</p>
                            </div>
                        </div>
                    </div>

                    <div class="admin-form">
                        <h2>Admin Login</h2>
                        <div id="alert-container"></div>
                        <form id="adminLoginForm" method="POST">
                            <div class="form-group">
                                <input type="text" id="adminId" name="adid" placeholder="Enter admin user ID" required>
                            </div>
                            <div class="form-group">
                                <input type="password" id="adminPass" name="adpass" placeholder="Enter admin password" required>
                            </div>
                            <button type="submit" class="admin-login-btn" name="adlog">LOGIN</button>
                        </form>
                        <div class="admin-info">
                            Authorized personnel only<br>
                            Secure administrative access
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
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

        // Enhanced form validation
        document.getElementById('adminLoginForm').addEventListener('submit', function(e) {
            const adminId = document.getElementById('adminId').value.trim();
            const adminPass = document.getElementById('adminPass').value.trim();

            // Client-side validation
            if (!adminId || !adminPass) {
                e.preventDefault();
                showAlert('Please fill in all fields', 'error');
                return false;
            }

            if (adminId.length < 3) {
                e.preventDefault();
                showAlert('Admin ID must be at least 3 characters long', 'error');
                return false;
            }

            if (adminPass.length < 6) {
                e.preventDefault();
                showAlert('Password must be at least 6 characters long', 'error');
                return false;
            }

            return true;
        });

        // Input focus effects
        const formInputs = document.querySelectorAll('input');
        formInputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'translateY(-2px)';
            });

            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'translateY(0)';
            });
        });

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
    </script>

</body>

</html>