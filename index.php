<?php
session_start();
include 'db.php';
$data = mysqli_query($conn,"SELECT * FROM products");
?>

<!DOCTYPE html>
<html>
<head>
<title>Ecom Store</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="style.css">

</head>
<body>

<div class="header text-center">
    <div class="brand">🛒 Online Store</div>
    <small>Premium Products at Best Prices</small>
</div>

<div class="container mt-5">

<div class="row">

<?php while($row = mysqli_fetch_assoc($data)) { ?>

<div class="col-md-4 mb-4">

<div class="card">

<img src="images/<?php echo $row['image']; ?>">

<div class="card-body text-center">

<h5><?php echo $row['name']; ?></h5>

<p class="price">₹<?php echo $row['price']; ?></p>

<form method="post" action="cart.php">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<input type="hidden" name="name" value="<?php echo $row['name']; ?>">
<input type="hidden" name="price" value="<?php echo $row['price']; ?>">

<button name="add" class="btn btn-primary w-100">
Add to Cart
</button>
</form>

</div>
</div>

</div>

<?php } ?>

</div>

<a href="cart.php" class="btn btn-success w-100 mb-5">
View Cart 🛒
</a>

</div>

</body>
</html>
