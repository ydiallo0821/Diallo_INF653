<?php
require('../model/database.php');
require('../model/vehicles_db.php');

$vehicles = get_vehicles_by_price();

?>

<h1>Admin - Vehicles</h1>

<table border="1">

<tr>
<th>Year</th>
<th>Model</th>
<th>Price</th>
<th>Delete</th>
</tr>

<?php foreach($vehicles as $vehicle) : ?>

<tr>
<td><?php echo $vehicle['year']; ?></td>
<td><?php echo $vehicle['model']; ?></td>
<td><?php echo $vehicle['price']; ?></td>

<td>
<form action="delete_vehicle.php" method="post">
<input type="hidden" name="vehicle_id"
value="<?php echo $vehicle['vehicle_id']; ?>">
<input type="submit" value="Delete">
</form>
</td>

</tr>

<?php endforeach; ?>

</table>