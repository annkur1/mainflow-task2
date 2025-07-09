<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mr Big Toys - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .hero-section {
            background: url('images/toy.jpg') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 20px;
        }

        .info-card {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            max-width: 450px;
            width: 100%;
        }

        .btn-custom {
            width: 100%;
            margin-top: 12px;
            padding: 12px;
            font-size: 17px;
            font-weight: bold;
            border-radius: 6px;
        }

        .section {
            padding: 60px 20px;
            text-align: center;
        }

        .section h2 {
            margin-bottom: 20px;
        }

        .section p {
            font-size: 17px;
            color: #444;
        }
    </style>
</head>

<body>
    <?php include("navbar.php"); ?>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="info-card">
            <h1 class="text-dark">Welcome to Mr Big Toys</h1>
            <p class="text-muted">Unwrap happiness with every toy you choose.</p>
            <?php if (!isset($_SESSION['loggedin'])): ?>
                <a href="signup.php" class="btn btn-success btn-custom">Sign Up</a>
                <a href="login.php" class="btn btn-primary btn-custom">Login</a>
            <?php else: ?>
                <a href="welcome.php" class="btn btn-info btn-custom">Go to Dashboard</a>
                <a href="logout.php" class="btn btn-danger btn-custom">Logout</a>
            <?php endif; ?>
        </div>
    </div>

    <!-- About Section -->
    <div class="section">
        <h2>About Mr Big Toys</h2>
        <p>
            Mr Big Toys is your go-to hub for premium-quality toys. From action figures to brain-boosting puzzles,
            we offer joy, learning, and excitement for all age groups. Curated with care, delivered with love.
        </p>
    </div>

    <!-- Collections Section -->
    <div class="section bg-light">
        <h2>Our Toy Collections</h2>
        <p>
            Discover our handpicked collection featuring classic toys, trending games, and creative kits.
            Whether you're gifting or collecting, Mr Big Toys adds joy to every box.
        </p>
    </div>

    <!-- Contact Section -->
    <div class="section">
        <h2>Need Help Choosing?</h2>
        <p>
            Have questions or want suggestions? Reach out and let our toy experts guide you to the perfect pick.
        </p>
    </div>
</body>

</html>
