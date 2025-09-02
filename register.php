<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - DriveRent Premium Car Rental</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Arial', sans-serif;
      overflow-x: hidden;
      min-height: 100vh;
    }

    .main-container {
      width: 100%;
      min-height: 100vh;
      background: linear-gradient(135deg, rgba(255, 114, 0, 0.1) 0%, rgba(0, 0, 0, 0.3) 100%),
        url('https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1906&q=80');
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
          rgba(0, 0, 0, 0.4) 50%,
          rgba(255, 114, 0, 0.05) 100%);
      z-index: 1;
    }

    .content-wrapper {
      position: relative;
      z-index: 2;
      min-height: 100vh;
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
      cursor: pointer;
      transition: color 0.3s ease;
    }

    .logo:hover {
      color: #ff9500;
    }

    .home-btn {
      background: linear-gradient(45deg, #ff7200, #ff9500);
      border: none;
      padding: 12px 30px;
      border-radius: 25px;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(255, 114, 0, 0.3);
    }

    .home-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(255, 114, 0, 0.4);
    }

    .home-btn a {
      text-decoration: none;
      color: white;
      font-weight: bold;
      font-size: 14px;
    }

    .main-content {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px 20px;
    }

    .register-container {
      background: linear-gradient(145deg, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.6));
      backdrop-filter: blur(20px);
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
      border: 1px solid rgba(255, 255, 255, 0.1);
      width: 100%;
      max-width: 500px;
      position: relative;
    }

    .register-container::before {
      content: '';
      position: absolute;
      top: -2px;
      left: -2px;
      right: -2px;
      bottom: -2px;
      background: linear-gradient(45deg, #ff7200, #ff9500, #ff7200);
      border-radius: 22px;
      z-index: -1;
      opacity: 0.3;
    }

    .register-title {
      background: linear-gradient(45deg, #ff7200, #ff9500);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      text-align: center;
      font-size: 32px;
      margin-bottom: 10px;
      font-weight: bold;
    }

    .register-subtitle {
      text-align: center;
      color: rgba(255, 255, 255, 0.8);
      font-size: 16px;
      margin-bottom: 30px;
    }

    .form-row {
      display: flex;
      gap: 15px;
      margin-bottom: 20px;
    }

    .form-group {
      flex: 1;
      position: relative;
    }

    .form-group.full-width {
      flex: none;
      width: 100%;
    }

    .form-group label {
      display: block;
      color: rgba(255, 255, 255, 0.9);
      font-size: 14px;
      font-weight: 500;
      margin-bottom: 8px;
      letter-spacing: 0.5px;
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
      color: rgba(255, 255, 255, 0.6);
    }

    .gender-group {
      display: flex;
      gap: 30px;
      align-items: center;
      margin-top: 10px;
    }

    .gender-option {
      display: flex;
      align-items: center;
      gap: 10px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .gender-option:hover {
      transform: translateY(-1px);
    }

    .gender-option input[type="radio"] {
      width: 20px;
      height: 20px;
      accent-color: #ff7200;
      cursor: pointer;
    }

    .gender-option label {
      color: rgba(255, 255, 255, 0.9);
      font-size: 16px;
      cursor: pointer;
      margin: 0;
    }

    .register-btn {
      width: 100%;
      padding: 18px;
      background: linear-gradient(45deg, #ff7200, #ff9500);
      border: none;
      border-radius: 12px;
      color: white;
      font-size: 18px;
      font-weight: bold;
      cursor: pointer;
      transition: all 0.3s ease;
      margin-top: 20px;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .register-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 25px rgba(255, 114, 0, 0.4);
    }

    .register-btn:active {
      transform: translateY(-1px);
    }

    .login-link {
      text-align: center;
      color: rgba(255, 255, 255, 0.8);
      font-size: 14px;
      margin-top: 20px;
      padding-top: 20px;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .login-link a {
      color: #ff7200;
      text-decoration: none;
      font-weight: bold;
      transition: all 0.3s ease;
    }

    .login-link a:hover {
      color: #ff9500;
      text-shadow: 0 0 10px rgba(255, 114, 0, 0.5);
    }

    .password-requirements {
      display: none;
      background: rgba(0, 0, 0, 0.9);
      border: 1px solid rgba(255, 114, 0, 0.3);
      border-radius: 10px;
      padding: 15px;
      margin-top: 10px;
      font-size: 14px;
    }

    .password-requirements h4 {
      color: #ff7200;
      margin-bottom: 10px;
      font-size: 16px;
    }

    .password-requirements p {
      margin: 5px 0;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .password-requirements .valid {
      color: #28a745;
    }

    .password-requirements .invalid {
      color: #dc3545;
    }

    .password-requirements .valid::before {
      content: "✓";
      font-weight: bold;
    }

    .password-requirements .invalid::before {
      content: "✗";
      font-weight: bold;
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

    /* Responsive Design */
    @media (max-width: 768px) {
      .navbar {
        padding: 20px 30px;
      }

      .register-container {
        padding: 30px 25px;
        margin: 20px;
      }

      .form-row {
        flex-direction: column;
        gap: 0;
      }

      .form-group {
        margin-bottom: 20px;
      }

      .gender-group {
        justify-content: center;
      }

      .register-title {
        font-size: 28px;
      }

      .main-content {
        padding: 20px 10px;
      }
    }

    @media (max-width: 480px) {
      .navbar {
        padding: 15px 20px;
      }

      .logo {
        font-size: 28px;
      }

      .register-container {
        padding: 25px 20px;
      }

      .register-title {
        font-size: 24px;
      }

      .gender-group {
        flex-direction: column;
        gap: 15px;
        align-items: flex-start;
      }
    }
  </style>
</head>

<body>
  <?php
  require_once('connection.php');
  if (isset($_POST['regs'])) {
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $lic = mysqli_real_escape_string($con, $_POST['lic']);
    $ph = mysqli_real_escape_string($con, $_POST['ph']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);
    $cpass = mysqli_real_escape_string($con, $_POST['cpass']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $Pass = password_hash($pass, PASSWORD_DEFAULT);

    if (empty($fname) || empty($lname) || empty($email) || empty($lic) || empty($ph) || empty($pass) || empty($gender)) {
      echo '<script>showAlert("Please fill in all fields", "error");</script>';
    } else {
      if ($pass == $cpass) {
        $sql2 = "SELECT * FROM users WHERE EMAIL='$email'";
        $res = mysqli_query($con, $sql2);
        if (mysqli_num_rows($res) > 0) {
          echo '<script>showAlert("Email already exists! Redirecting to login...", "error");</script>';
          echo '<script>setTimeout(function(){ window.location.href = "index.php"; }, 2000);</script>';
        } else {
          $sql = "INSERT INTO users (FNAME, LNAME, EMAIL, LIC_NUM, PHONE_NUMBER, PASSWORD, GENDER) VALUES('$fname', '$lname', '$email', '$lic', $ph, '$Pass', '$gender')";
          $result = mysqli_query($con, $sql);

          if ($result) {
            echo '<script>showAlert("Registration successful! Redirecting to login...", "success");</script>';
            echo '<script>setTimeout(function(){ window.location.href = "index.php"; }, 2000);</script>';
          } else {
            echo '<script>showAlert("Registration failed. Please try again.", "error");</script>';
          }
        }
      } else {
        echo '<script>showAlert("Passwords do not match!", "error");</script>';
      }
    }
  }
  ?>

  <div class="main-container">
    <div class="floating-elements"></div>

    <div class="content-wrapper">
      <nav class="navbar">
        <div class="logo" onclick="window.location.href='index.php'">DriveRent</div>
        <button class="home-btn">
          <a href="index.php">← Back to Home</a>
        </button>
      </nav>

      <div class="main-content">
        <div class="register-container">
          <h1 class="register-title">Join Our Family</h1>
          <p class="register-subtitle">Create your account and start your premium car rental journey</p>

          <div id="alert-container"></div>

          <form id="registerForm" method="POST" action="register.php">
            <div class="form-row">
              <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname" placeholder="Enter your first name" required>
              </div>
              <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname" placeholder="Enter your last name" required>
              </div>
            </div>

            <div class="form-group full-width">
              <label for="email">Email Address</label>
              <input type="email" id="email" name="email" placeholder="Enter your email address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="lic">License Number</label>
                <input type="text" id="lic" name="lic" placeholder="Enter license number" required>
              </div>
              <div class="form-group">
                <label for="ph">Phone Number</label>
                <input type="tel" id="ph" name="ph" placeholder="Enter phone number" maxlength="10" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" id="pass" name="pass" placeholder="Create password" maxlength="12" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                <div id="password-requirements" class="password-requirements">
                  <h4>Password must contain:</h4>
                  <p id="letter" class="invalid">A lowercase letter</p>
                  <p id="capital" class="invalid">An uppercase letter</p>
                  <p id="number" class="invalid">A number</p>
                  <p id="length" class="invalid">Minimum 8 characters</p>
                </div>
              </div>
              <div class="form-group">
                <label for="cpass">Confirm Password</label>
                <input type="password" id="cpass" name="cpass" placeholder="Confirm password" required>
              </div>
            </div>

            <div class="form-group full-width">
              <label>Gender</label>
              <div class="gender-group">
                <div class="gender-option">
                  <input type="radio" id="male" name="gender" value="male" required>
                  <label for="male">Male</label>
                </div>
                <div class="gender-option">
                  <input type="radio" id="female" name="gender" value="female" required>
                  <label for="female">Female</label>
                </div>
              </div>
            </div>

            <button type="submit" class="register-btn" name="regs">Create Account</button>
          </form>

          <div class="login-link">
            Already have an account?<br>
            <a href="index.php">Sign in here</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Phone number validation
    document.getElementById('ph').addEventListener('keypress', function(e) {
      const char = String.fromCharCode(e.which);
      if (!/[0-9]/.test(char)) {
        e.preventDefault();
      }
    });

    // Password validation
    const passwordInput = document.getElementById('pass');
    const passwordRequirements = document.getElementById('password-requirements');
    const letter = document.getElementById('letter');
    const capital = document.getElementById('capital');
    const number = document.getElementById('number');
    const length = document.getElementById('length');

    passwordInput.addEventListener('focus', function() {
      passwordRequirements.style.display = 'block';
    });

    passwordInput.addEventListener('blur', function() {
      setTimeout(() => {
        passwordRequirements.style.display = 'none';
      }, 200);
    });

    passwordInput.addEventListener('keyup', function() {
      const value = this.value;

      // Validate lowercase letters
      if (/[a-z]/.test(value)) {
        letter.classList.remove('invalid');
        letter.classList.add('valid');
      } else {
        letter.classList.remove('valid');
        letter.classList.add('invalid');
      }

      // Validate uppercase letters
      if (/[A-Z]/.test(value)) {
        capital.classList.remove('invalid');
        capital.classList.add('valid');
      } else {
        capital.classList.remove('valid');
        capital.classList.add('invalid');
      }

      // Validate numbers
      if (/[0-9]/.test(value)) {
        number.classList.remove('invalid');
        number.classList.add('valid');
      } else {
        number.classList.remove('valid');
        number.classList.add('invalid');
      }

      // Validate length
      if (value.length >= 8) {
        length.classList.remove('invalid');
        length.classList.add('valid');
      } else {
        length.classList.remove('valid');
        length.classList.add('invalid');
      }
    });

    // Form validation
    document.getElementById('registerForm').addEventListener('submit', function(e) {
      const password = document.getElementById('pass').value;
      const confirmPassword = document.getElementById('cpass').value;
      const phone = document.getElementById('ph').value;

      // Password match validation
      if (password !== confirmPassword) {
        e.preventDefault();
        showAlert('Passwords do not match!', 'error');
        return false;
      }

      // Phone number validation
      if (phone.length !== 10) {
        e.preventDefault();
        showAlert('Phone number must be 10 digits!', 'error');
        return false;
      }

      // Password strength validation
      const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d@$!%*?&]{8,}$/;
      if (!passwordRegex.test(password)) {
        e.preventDefault();
        showAlert('Password must contain at least one uppercase letter, one lowercase letter, and one number!', 'error');
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

    // Form input animations
    const formInputs = document.querySelectorAll('input');
    formInputs.forEach(input => {
      input.addEventListener('focus', function() {
        this.style.transform = 'translateY(-2px)';
      });

      input.addEventListener('blur', function() {
        this.style.transform = 'translateY(0)';
      });
    });
  </script>
</body>

</html>