<?php

include "db.php";

$query=$_POST['query'];

$result=$conn->query("
SELECT * FROM lost_items
WHERE description LIKE '%$query%'
");

while($row=$result->fetch_assoc()){

echo "<div class='card'>";

echo "<h3>".$row['title']."</h3>";

echo "<p>".$row['description']."</p>";

echo "<img src='uploads/".$row['image']."' width='120'>";

echo "</div>";

}

?>