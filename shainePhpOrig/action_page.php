<?php 
    require 'includes/header.php';
    require_once 'db/conn.php';
    require_once 'db/crud.php';
  ?>
 <h1 style="color:green; text-align: center;">YOU HAVE BEEN REGISTERED</h1>
<?php
   $firstname = $_REQUEST['fname'];
   $lastname = $_REQUEST['lname'];
   $date = $_REQUEST['date'];
   $specialty = $_REQUEST['specialty'];
   $email = $_REQUEST['email'];
   $phone = $_REQUEST['phone'];

   $crud = new Crud();

   $isSuccess = $crud->insert($firstname,$lastname,$date,$specialty,$email,$phone);
//    $check = $_REQUEST['checkbox'];
 
  // $host = 'localhost';
  // $dbname = 'employee';
  // $username = 'root';
  // $password = '';
  
  // $conn = mysqli_connect($host,$username,$password,$dbname);
   
  // if (!$conn) {
  //   die("Connection failed: " . mysqli_connect_error());
  // }

//   $sql = "INSERT INTO employeedata(FirstName,LastName,BirthDay,Specialty,EmailAddress,PhoneNumber)
//     VALUES ('$firstname','$lastname','$date','$specialty','$email','$phone')";

// if (mysqli_query($conn,$sql)) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
// mysqli_close($conn);
?>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Info</h5>
    <p class="card-text" ><?php 
    echo "Name: $firstname $lastname <br>
    BirthDay: $date <br>
    Occupation: $specialty <br>
    Phone:  $phone ";?></p>
    <a href="#" class="btn btn-primary">Confirm</a>
  </div>
</div>
<?php require 'includes/footer.php'?>   