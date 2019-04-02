<?php require_once('include/connection.php' ); ?>

<?php

if (isset($_POST['submit'] ) ){

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$password = $_POST['pwd'];


$sql ="INSERT INTO user (first, last, uid, password) VALUES ('$first', '$last', '$uid', '$password')";
$result = $connection->query($sql);

}

?>


<html>
<body>

<form action="select.php" method="POST">

<input type="text" name="first" placeholder="firstname">
<input type="text" name="last" placeholder="lastname">
<input type="text" name="uid" placeholder="Username">
<input type="password" name="pwd" placeholder="Password">
<button type="submit" name="submit">Sign Up</button>
</form>



</body>
</html>


<?php mysqli_close($connection); ?>