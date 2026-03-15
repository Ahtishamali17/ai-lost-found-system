<?php

include "db.php";

$title=$_POST['title'];
$desc=$_POST['description'];
$location=$_POST['location'];

$image=$_FILES['image']['name'];

move_uploaded_file($_FILES['image']['tmp_name'],"uploads/".$image);

$conn->query("INSERT INTO found_items(title,description,location,image)
VALUES('$title','$desc','$location','$image')");

$found_id=$conn->insert_id;

$result=$conn->query("SELECT * FROM lost_items");

while($row=$result->fetch_assoc()){

$lostDesc=$row['description'];

$similarity=shell_exec("python nlp.py \"$lostDesc\" \"$desc\"");

$similarity=floatval($similarity)*100;

if($similarity>60){

$conn->query("INSERT INTO matches(lost_id,found_id,similarity)
VALUES(".$row['id'].",$found_id,$similarity)");

}

}

echo "<script>
alert('Found item submitted');
window.location='matches.html';
</script>";

?>