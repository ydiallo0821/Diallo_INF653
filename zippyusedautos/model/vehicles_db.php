<?php

function get_vehicles_by_price() {
    global $db;
    $query = 'SELECT * FROM vehicles ORDER BY price DESC';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}

function get_vehicles_by_year() {
    global $db;
    $query = 'SELECT * FROM vehicles ORDER BY year DESC';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}

function delete_vehicle($vehicle_id) {
    global $db;
    $query = 'DELETE FROM vehicles WHERE vehicle_id = :vehicle_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':vehicle_id', $vehicle_id);
    $statement->execute();
}

function add_vehicle($year,$model,$price,$make_id,$type_id,$class_id) {
    global $db;
    $query = 'INSERT INTO vehicles
              (year,model,price,make_id,type_id,class_id)
              VALUES
              (:year,:model,:price,:make_id,:type_id,:class_id)';

    $statement = $db->prepare($query);
    $statement->bindValue(':year',$year);
    $statement->bindValue(':model',$model);
    $statement->bindValue(':price',$price);
    $statement->bindValue(':make_id',$make_id);
    $statement->bindValue(':type_id',$type_id);
    $statement->bindValue(':class_id',$class_id);
    $statement->execute();
}
?>