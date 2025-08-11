<!-- index.php -->
<?php
$shopName = "Sweet Delights Cake Shop";
$tagline = "Baking Happiness, One Slice at a Time!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $shopName; ?></title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background: #fff8f0;
      color: #5a3e2b;
    }
    header {
      background: #ffb6b9;
      padding: 20px;
      text-align: center;
    }
    header h1 {
      margin: 0;
      font-size: 2.5em;
    }
    header p {
      margin: 5px 0 0;
      font-style: italic;
    }
    nav {
      background: #fcd5ce;
      padding: 10px;
      text-align: center;
    }
    nav a {
      margin: 0 15px;
      text-decoration: none;
      color: #5a3e2b;
      font-weight: bold;
    }
    .hero {
      background: url('cake-banner.jpg') no-repeat center center;
      background-size: cover;
      height: 300px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 2em;
      font-weight: bold;
      text-shadow: 2px 2px 5px #000;
    }
    .content {
      padding: 30px;
      text-align: center;
    }
    .footer {
      background: #ffb6b9;
      text-align: center;
      padding: 15px;
      font-size: 0.9em;
    }
  </style>
</head>
<body>

<header>
  <h1><?php echo $shopName; ?></h1>
  <p><?php echo $tagline; ?></p>
</header>

<nav>
  <a href="#">Home</a>
  <a href="#">Menu</a>
  <a href="#">Order</a>
  <a href="#">Contact</a>
</nav>

<div class="hero">
  Welcome to Sweet Delights!
</div>

<div class="content">
  <h2>Our Specialties</h2>
  <p>From classic chocolate cakes to exotic fruit tarts, we bake everything fresh with love and premium ingredients.</p>
  <p>Try our bestsellers: Red Velvet, Black Forest, and Mango Cheesecake!</p>
</div>

<div class="footer">
  &copy; <?php echo date("Y"); ?> <?php echo $shopName; ?>. All rights reserved.
</div>

</body>
</html>