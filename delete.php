<?php
if(isset($_GET['id'])){

    $delete_id = $_GET['id'];

// database connecton
    $servername="localhost";
$username="root";
$password="";
$dbname="office";

//database connect
$conn = mysqli_connect("localhost", "root", "", "office");
         
// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
else{
 
      $delete = "DELETE FROM `dayone` WHERE id ='$delete_id'";
if (mysqli_query($conn, $delete)) {
    ?>
                <script>
                    alert("Data Deleted... Successfully..");
                    window.location.href = "display.php";
                </script>
    <?php
            } else {
    
                echo "Error in Delete " . mysqli_error($conn);
 }
        }
}
     ?>

