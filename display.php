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

    <!-- Example Code -->
    
    <nav class="navbar navbar-expand-lg bg-warning fixed-top">
      <div class="container">
        <a class="navbar-brand text-danger" href="#">CRUD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
              <a class="nav-link text-danger" href="index.html">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="display.php">Display</a>
              </li>
           
          </ul>
         
        </div>
      </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-hover">
                   <thead>
                          <tr>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">mobile</th>
                            <th scope="col">email</th>
                            <th scope="col">city </th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
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
                           else{
                            //select query
                                $userselect =  "SELECT * FROM `dayone`";
                    
                                //excute query
                              $result = mysqli_query($conn, $userselect);
                    
                              if(mysqli_num_rows($result)>0)
                              {
                                while($row = mysqli_fetch_assoc($result) ){
                                    ?>
                                        <tr>
                       <td> <?php echo $row['id']; ?></td>
                    <td> <?php echo $row['name']; ?></td>
                    <td> <?php echo $row['mobile']; ?></td>
                    <td> <?php echo $row['email']; ?></td>
                    <td> <?php echo $row['city']; ?></td>
                          
     <td><a href="updateuser.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-warning">Update</a> </td>

<td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-danger">Delete</a> </td>
       </tr>

           <?php
       }

     }
     else{
       echo"Data not Fetch";
     }
   }
   ?>
                          
                        
                        </tbody>
                      
                  </table>
            </div>
        </div>
    </div>

</body>
</html>