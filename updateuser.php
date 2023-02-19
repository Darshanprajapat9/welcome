<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example">

<?php 

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

if (isset($_REQUEST['id'])) {

    $id = $_REQUEST['id']; 

    $sql = "SELECT * FROM `dayone` WHERE `id`='$id'";

    $result = mysqli_query($conn ,$sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $name = $row['name'];

            $mobile = $row['mobile'];

            $email = $row['email'];

            $city  = $row['city'];

           $id = $row['id'];

        } 

        if (isset($_POST['update'])) {

            $name = $_POST['name'];
    
            $mobile = $_POST['mobile'];
    
              $email = $_POST['email'];
    
            $city = $_POST['city']; 
    
         $sql = " UPDATE `dayone` SET `name`='$name',`mobile`='$mobile',`email`='$email',`city`='$city' WHERE `id`='$id' ";
    
            $result = mysqli_query($conn , $sql); 
    
            if ($result == TRUE) {
    
                echo "Record updated successfully.";
                header('Location: display.php');
    
            }else{
    
                echo "Error:" . $sql . "<br>" . $conn->error;
    
            }
    
        } 

    ?>

<form action="updateuser.php"  method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                     <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $name; ?>" name="name" placeholder="enter the name">
                     <input type="hidden" name="id" value="<?php echo $id; ?>">
                   </div>
                   <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">mobile</label>
                     <input type="text" class="form-control" id="exampleFormControlInput1"  value="<?php echo $mobile; ?>"  name="mobile" placeholder="enter the contsct number">
                   </div>
                   <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                     <input type="email" class="form-control" id="exampleFormControlInput1" value="<?php echo $email; ?>" name="email" placeholder="enter the email">
                   </div>
                   
            
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">City</label>
                 <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $city; ?>"  name="city" placeholder="enter the city">
               </div>
              
              <button class="btn btn-outline-primary" type="submit" name="update">update</button>
              </form>

           
    <?php

    } 
   

    

}


?>
</body>
</html>