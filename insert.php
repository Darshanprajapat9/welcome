<?php
$servername="localhost";
$username="root";
$password="";
$dbname="office";

//database connect
$conn = mysqli_connect("localhost", "root", "", "office");
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
if (isset($_POST['submit'])) {
 $name = $_POST['name'];
 $mobile = $_POST['mobile'];
  $email = $_POST['email'];
    $city = $_POST['city'];
 $insert = "INSERT INTO `dayone`( `name`, `mobile`, `email`, `city`) VALUES ('$name','$mobile','$email','$city')";
 if(mysqli_query($conn,  $insert)) {
    echo "<h3>data stored in a database successfully </h3>";
    header('Location: display.php');
} else{
    echo "ERROR: Hush! Sorry  $insert. "
        . mysqli_error($conn);
}
}
mysqli_close($conn);

?>
    