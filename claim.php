<?php

include "db.php";

$id=$_GET['id'];

$conn->query("UPDATE matches SET claimed=1 WHERE id=$id");

echo "Item claimed successfully";

?>