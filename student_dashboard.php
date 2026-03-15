<?php
include "db.php";

$result=$conn->query("SELECT * FROM lost_items");
?>

<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">

<title>Student Dashboard</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<nav>

<h2>Student Dashboard</h2>

<div>

<a href="index.html">Home</a>
<a href="matches.html">Matches</a>

</div>

</nav>


<div class="container">

<h2>My Lost Items</h2>

<?php

while($row=$result->fetch_assoc()){

echo "

<div class='card'>

<h3>".$row['title']."</h3>

<p>Status: ".$row['status']."</p>

<img src='uploads/".$row['image']."' width='150'>

</div>

";

}

?>

</div>

</body>

</html>