    <?php
       $srn="localhost:3307";
       $user="root";
       $pass="";
      $DB="banking";
    $conn=new mysqli($srn,$user,$pass,$DB);
    if($conn->connect_error){
        die("CONN FAILED");
    }

?>