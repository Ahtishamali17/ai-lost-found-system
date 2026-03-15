<?php

include "db.php";

$email=$_POST['email'];
$password=$_POST['password'];
$role=$_POST['role'];

$result=$conn->query("SELECT * FROM users
WHERE email='$email'
AND password='$password'
AND role='$role'");

if($result->num_rows>0){

if($role=="admin"){

header("Location: admin/dashboard.php");

}

else{

header("Location: student_dashboard.php");

}

}

else{

echo "<script>
alert('Invalid Login');
window.location='login.html';
</script>";

}

?>