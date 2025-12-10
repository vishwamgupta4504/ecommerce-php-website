<?php
session_start();

if(isset($_POST['add'])){
  $_SESSION['cart'][]=[
      "id"=>$_POST['id'],
      "name"=>$_POST['name'],
      "price"=>$_POST['price'],
      "qty"=>1
  ];
}

// 🟢 REMOVE ITEM
if(isset($_GET['remove'])){
foreach($_SESSION['cart'] as $k=>$v){
if($v['id']==$_GET['remove']){
unset($_SESSION['cart'][$k]);
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Cart</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container mt-5">

<h3>🛒 Your Cart</h3>

<table class="table table-hover shadow bg-white">

<tr class="table-dark">
<th>Product</th>
<th>Price</th>
<th>Qty</th>
<th>Total</th>
<th>Action</th>
</tr>

<?php
$grand=0;
if(isset($_SESSION['cart'])){
foreach($_SESSION['cart'] as $item){
$t=$item['price']*$item['qty'];
$grand+=$t;
?>

<tr>
<td><?php echo $item['name']; ?></td>
<td>₹<?php echo $item['price']; ?></td>
<td><?php echo $item['qty']; ?></td>
<td>₹<?php echo $t; ?></td>
<td>
<a href="cart.php?remove=<?php echo $item['id']; ?>"
class="btn btn-danger btn-sm">
Remove
</a>
</td>
</tr>

<?php }} ?>

<tr class="fw-bold">
<td colspan=3>GRAND TOTAL</td>
<td colspan=2>₹<?php echo $grand; ?></td>
</tr>

</table>

<a href="checkout.php" class="btn btn-success">Checkout ✅</a>
<a href="index.php" class="btn btn-secondary">Back</a>

</div>

</body>
</html>
