<nav class="navbar">
    <div class="nav-container">
        <div class="nav-logo">
            <a href="index.php">🚗 DriveRent</a>
        </div>
        <div class="nav-menu">
            <a href="index.php" class="nav-link">Home</a>
            <a href="services.html" class="nav-link">Services</a>
            <a href="about.html" class="nav-link">About</a>
            <a href="contactus.html" class="nav-link">Contact</a>
            <?php if (isset($_SESSION['email'])): ?>
                <a href="booking.php" class="nav-link">My Bookings</a>
                <a href="logout.php" class="nav-link">Logout</a>
            <?php else: ?>
                <a href="register.php" class="nav-link">Register</a>
            <?php endif; ?>
        </div>
    </div>
</nav>