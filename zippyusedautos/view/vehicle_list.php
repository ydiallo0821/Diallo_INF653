<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<h1>Zippy Used Autos</h1>

<a href="?sort=price">Sort by Price</a>
<a href="?sort=year">Sort by Year</a>

<table border="1">

<tr>
<th>Year</th>
<th>Model</th>
<th>Price</th>
</tr>

<?php foreach($vehicles as $vehicle) : ?>

<tr>
<td><?php echo $vehicle['year']; ?></td>
<td><?php echo $vehicle['model']; ?></td>
<td>$<?php echo $vehicle['price']; ?></td>
</tr>

<?php endforeach; ?>

</table>

</body>
</html>