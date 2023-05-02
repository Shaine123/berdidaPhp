<?php require 'includes/header.php'?>

<form style=" padding: 15px; " class="rounded-3 border border-secondary d-flex flex-column mb-3 " action="action_page.php" method="POST">
    <h1 class="text-center">Login Form</h1>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter firstname" name="fname">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Last name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter lastname" name="lname">
  </div>
  <div class="mb-3">
    <label for="startDate">Date of Birth</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter lastname" name="date">
  </div>
<!-- This is the jquery code for date 
  <label for="startDate">Date of Birth</label>
  <input id="datepicker" type="text" name="date"/> -->

  <div class="mb-3">
  <label class="form-label" for="specialty">Specialty</label>
  <select class="form-select" aria-label="Default select example" id="specialty" name="specialty">
  <option selected>Specialty</option>
  <option value="Database Admin">Database Admin</option>
  <option value="Software Developer">Software Developer</option>
  <option value="Web Administrator">Web Administrator</option>
</select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username" name="email">
  </div>
  <div class="mb-3">
  <label class="form-label" for="typePhone">Phone number</label>
   <input type="tel" id="typePhone" class="form-control" placeholder="Enter phonenumber" name="phone"/>
   <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="checkbox">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary ">Submit</button>
</form>


<?php require 'includes/footer.php'?>
   