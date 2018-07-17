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
              input[type=submit] {
                  background-color: #00ff90;
                  padding: 5px 10px 5px 10px;
                  border-bottom-width: medium;
                  border-radius: 10px;
                  width: 20%;
                  margin-top: 10px;
                  background-color: #474242;
                  cursor: pointer;
                  color: #fff;
                  border: 2px solid #adadad;
                  font-size: 18px;
                  font-weight: 700;
                  margin-left: 400px;
                  font-family: 'Droid Serif',serif;
                  margin-bottom: 15px;
              }
              input[type=number] {
                  border: 25%;
                  padding: 5px 10px 5px 10px;
                  width: 200px;
                  border-radius: 10px;
                  border-width: 3px;
                  border: 2px solid #adadad;
                  font-size: 18px;
                  font-weight: 700;
                  font-family: 'Droid Serif',serif;
                  margin-bottom: 15px;
              }
              .ip{
                    padding: 5px 10px 5px 10px;
                  width: 200px;
                  font-size: 20px;
                  font-weight: 700;
                  font-family: 'Droid Serif',serif;
                  
                  
              }
    
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
                  color: #f00;
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
            <form method="post" >
                <div style="text-align: center">
            <label for="am" class="ip">ENTER THE AMOUNT : </label><input id="am" type="number" name="amount" placeholder="amount" required>
                    </div>
                
               <br> <input type="submit" name="su" value="WITHDRAW">
            </form>
             
        <?php
        if(isset($_POST['su'])){
            $bal=$_POST['amount'];
            
             $srn="localhost:3307";
       $user="root";
       $pass="";
      $DB="banking";
      
    $conn=new mysqli($srn,$user,$pass,$DB);
    if($conn->connect_error){
        die("CONN FAILED");
    }
      $but = 0;
      $sql="SELECT baln from balance where username = '$name'";
         
                    
                $result = $conn->query($sql);
                      if($result->num_rows>0){
                            while($row = $result->fetch_assoc()) {
                                  $avail=$row['baln']-$bal;
                                  if($bal<0)
                                  {
                                    $but = 1;
                                  }

                                  if($avail>0 && $but==0){

                                      $sql="UPDATE balance SET baln=baln-$bal  where username ='$name'";
                                       if($conn->query($sql)===TRUE){
                                        echo"<h2>","MONEY SUCCESSFULLY DEBITED","</h2>" ;                                              
                                       }
                                  }
                                  else{
                                      echo"<h2>","NOT ENOUGH BALANCE or WRONG AMOUNT","</h2>" ;                                              
                                  }
                            }
                      }
         
  }       
            ?>
           </fieldset>
        <br>
    </body>
</html>
