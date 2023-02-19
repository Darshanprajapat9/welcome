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

<form action="updateuser.php"  method="post">
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

</body>
</html>
