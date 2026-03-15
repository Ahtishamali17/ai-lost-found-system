<?php

include "db.php";

$title=$_POST['title'];
$desc=$_POST['description'];
$location=$_POST['location'];
$email=$_POST['contact'];

$image=$_FILES['image']['name'];

move_uploaded_file(
$_FILES['image']['tmp_name'],
"uploads/".$image
);

$conn->query("INSERT INTO lost_items(title,description,location,image,email)
VALUES('$title','$desc','$location','$image','$email')");

echo "<script>
alert('Lost item reported successfully');
window.location='index.html';
</script>";

?>