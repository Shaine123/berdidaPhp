<?php
 class Crud{
    private $db;

    // private $firstname = $_REQUEST['fname'];
    // private $lastname = $_REQUEST['lname'];
    // private $date = $_REQUEST['date'];
    // private $specialty = $_REQUEST['specialty'];
    // private $email = $_REQUEST['email'];
    // private  $phone = $_REQUEST['phone']; 

    function _construct($conn){
        $this->db = $conn;
    }
   public function insert($firstname,$lastname,$date,$specialty,$email,$phone){
        try{
            $sql = "INSERT INTO employeedata VALUES (:FirstName,:LastName,:BirthDay,:Specialty,:EmailAddress,:PhoneNumber)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindparam(':FirstName',$firstname);
            $stmt->bindparam(':LastName',$lastname);
            $stmt->bindparam(':BirthDay',$date);
            $stmt->bindparam(':Specialty',$specialty);
            $stmt->bindparam(':EmailAddress',$email);
            $stmt->bindparam(':PhoneNumber',$phone);

            $stmt ->execute();
            return true;
        }catch(PDOExeption $e){
            echo $e->getMessage;
            return false;
        }
   }
 }








?>