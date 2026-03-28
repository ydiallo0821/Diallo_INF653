<?php
require('model/database.php');
require('model/vehicles_db.php');

$sort = filter_input(INPUT_GET,'sort');

if($sort == 'year'){
    $vehicles = get_vehicles_by_year();
}
else{
    $vehicles = get_vehicles_by_price();
}

include('view/vehicle_list.php');
?>