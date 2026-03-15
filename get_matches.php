<?php

include "db.php";

$sql="SELECT 
lost_items.title AS lost,
found_items.title AS found,
matches.similarity
FROM matches
JOIN lost_items ON matches.lost_id=lost_items.id
JOIN found_items ON matches.found_id=found_items.id";

$result=$conn->query($sql);

$data=[];

while($row=$result->fetch_assoc()){

$data[]=$row;

}

echo json_encode($data);

?>