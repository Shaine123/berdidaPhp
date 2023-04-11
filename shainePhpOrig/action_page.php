<?php require 'includes/header.php'?>
 <h1 style="color:green; text-align: center;">YOU HAVE BEEN REGISTERED</h1>
<?php
   $firstname = $_REQUEST['fname'];
   $lastname = $_REQUEST['lname'];
   $date = $_REQUEST['date'];
   $specialty = $_REQUEST['specialty'];
   $phone = $_REQUEST['phone'];
//    $check = $_REQUEST['checkbox'];
 

   
?>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Info</h5>
    <p class="card-text" ><?php echo "My name is $firstname $lastname Born on $date . I am $specialty  and you can contact my phone number $phone ";?></p>
    <a href="#" class="btn btn-primary">Confirm</a>
  </div>
</div>
<?php require 'includes/footer.php'?>   