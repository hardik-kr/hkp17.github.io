<?php
    
    session_start();
   $nm=$_SESSION["usrnm"];
    if($nm==NULL){
        header('location:index.php');
    }
   

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Welcome</title>
    </head>
  
  
    <body style="background-color:#cecece">
          <style>
       
    
         img{
                margin: auto;
             display: block; 
                            
            }
        td{
            font-size: 25px;
            color: white;
            background-color: #4CAF50;
            border-collapse: collapse;
            text-align: center;
        }
              h2{
                  color: #4415bb;
                  text-align: center
              }
      
      
    </style>
        <?php
            $name=$_SESSION["usrnm"];
        ?>
          <img src="img/images.png" alt="missing" >
        <br>
        <br>
        <fieldset style="padding-bottom: 300px;margin-left: 435px;margin-right: 435px;border-collapse: collapse">
         <table style="margin-left: auto;margin-right: auto;width:100%">
           <tr style="border-collapse: collapse" >
                <td ><a href="home.php">HOME</a></td>  
                <td ><a href="about.php">ABOUT US</a></td>
                <td ><a href="contact.php">CONTACT US</a></td>
                <td  style="text-align: end;width: 350px"><a href="logout.php">LOGOUT</a></td>
           </tr>     
        </table>
            <br>
           
            <table style="margin-left: auto;margin-right: auto;width:100%">
              <tr>
                    <td style="text-align: left"><marquee><?php echo"WELCOME : ","$name"?></marquee> </td>
                   <td style="text-align: end"><marquee><?php echo"Date : ".date("d-m-Y")?></marquee>   </td>
              </tr>
            </table>
            <br>
            <br>
            <h2></h2>
             
        <?php
             $srn="localhost:3307";
       $user="root";
       $pass="";
      $DB="banking";
    $conn=new mysqli($srn,$user,$pass,$DB);
    if($conn->connect_error){
        die("CONN FAILED");
    }
            
            
           
            $sql="SELECT baln from balance where username ='$name'";
            $result = $conn->query($sql);
            if($result->num_rows>0){
                $ch=1;
                 while($row = $result->fetch_assoc()) {
                     $ch=2;
                                 echo"<h2>","AVAILABLE BALANCE : RS ".$row["baln"]." INR","</h2>";
                               
                           }
            }
           
            ?>
           </fieldset>
        <br>
    </body>
</html>
