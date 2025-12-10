<?php
session_start();
session_destroy();
?>

<html>
<head>
<title>Success</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container text-center mt-5">
<h2 class="text-success">✅ Order Placed Successfully</h2>
<p>Thanks for shopping at Vishwam Store!</p>

<a href="index.php" class="btn btn-dark">
Continue Shopping
</a>
</div>

</body>
</html>
