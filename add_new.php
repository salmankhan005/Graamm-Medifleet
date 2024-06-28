<?php
include "db_conn.php";

if(isset($_POST['submit'])){
    $Name = $_POST['Name'];
    $Role = $_POST['Role'];
    $department = $_POST['department'];
    $Salary = $_POST['Salary'];
    $email = $_POST['email'];
    $Password = $_POST['Password'];
    $joineddate = $_POST['joined_date'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `employees`(`id`, `Name`, `Role`, `department`, `Salary`, `email`, `Password`, `joined_date`, `gender`)
     VALUES (Null,'$Name','$Role','$department','$Salary','$email','$Password','$joined_date','$gender')";
    
    $result = "mysqli_query($conn,$sql)";

    if ($result) {
        header("Location: index.php?msg=New record created successfully");
     } else {
        echo "Failed: " . mysqli_error($conn);
     }
  }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      Employees Management
   </nav>

    <div class="container">
      <div class="text-center mb-4">
         <h3>Add Employee</h3>
         <p class="text-muted">Complete the form below to add a new Employee</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Name:</label>
                  <input type="text" class="form-control" name="Name" placeholder="Albert">
               </div>

               <div class="col">
                  <label class="form-label">Role:</label>
                  <input type="text" class="form-control" name="Role" placeholder="Einstein">
               </div>
            </div>

            <div class="col">
               <label class="form-label">department:</label>
               <input type="text" class="form-control" name="department" placeholder="IT">
            </div>
            <div class="col">
                  <label class="form-label">Salary:</label>
                  <input type="number" class="form-control" name="Salary" placeholder="Amount">
               </div>
               <div class="mb-3">
                  <label class="form-label">email:</label>
                  <input type="email" class="form-control" name="email" placeholder="example@gmail.com">
               </div>
               <div class="col">
                  <label class="form-label">Password:</label>
                  <input type="password" class="form-control" name="Password" placeholder="12345678">
               </div>
               <div class="col">
                  <label class="form-label">joined_date:</label>
                  <input type="date" class="form-control" name="joined_date" placeholder="2020-07-01">
               </div>

            <div class="form-group mb-3">
               <label>Gender:</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="gender" id="male" value="male">
               <label for="male" class="form-input-label">Male</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="gender" id="female" value="female">
               <label for="female" class="form-input-label">Female</label>
            </div>

            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div> 

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>