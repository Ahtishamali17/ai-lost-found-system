<?php
include "../db.php";

$lost=$conn->query("SELECT COUNT(*) AS c FROM lost_items")->fetch_assoc()['c'];
$found=$conn->query("SELECT COUNT(*) AS c FROM found_items")->fetch_assoc()['c'];
$matches=$conn->query("SELECT COUNT(*) AS c FROM matches")->fetch_assoc()['c'];
?>

<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<meta charset="UTF-8">
<title>Admin Dashboard</title>

<link rel="stylesheet" href="../style.css">

</head>

<body>

<nav>

<h2>Admin Dashboard</h2>
<h2>Analytics</h2>

<canvas id="chart" width="400" height="200"></canvas>
<div>
<a href="../index.html">Home</a>
<a href="../matches.html">Matches</a>
</div>

</nav>


<div class="container">

<h2>Analytics</h2>

<div class="stats">

<div class="stat-box">
<h3><?php echo $lost ?></h3>
<p>Lost Items</p>
</div>

<div class="stat-box">
<h3><?php echo $found ?></h3>
<p>Found Items</p>
</div>

<div class="stat-box">
<h3><?php echo $matches ?></h3>
<p>Matches</p>
</div>

</div>

</div>
<script>

const ctx = document.getElementById('chart');

new Chart(ctx, {
type: 'bar',

data: {
labels: ['Lost Items','Found Items','Matches'],

datasets: [{
label: 'Campus Lost & Found Analytics',
data: [<?php echo $lost ?>,<?php echo $found ?>,<?php echo $matches ?>],
backgroundColor:[
'#ef4444',
'#22c55e',
'#3b82f6'
]
}]
}

});

</script>
</body>
</html>