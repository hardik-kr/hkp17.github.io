<?php
    include('DBconn.php');
    session_start();
    if(!isset($_SESSION['usrnm'])){
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
        .button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
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
        .but {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    opacity: 1;
     filter: alpha(opacity=100); 
                  
         }
        .but:hover {
                 opacity: 0.3; 
                 filter: alpha(opacity=30); 
                         
            }
    </style>
        <?php
            $name=$_SESSION["usrnm"];
        ?>
          <img src="img/images.png" alt="missing" >
        <br>
        <br>
        <fieldset style="padding-bottom: 520px;margin-left: 435px;margin-right: 435px;border-collapse: collapse">
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
            <table style="margin-left: auto;margin-right: auto;width:100%;padding:50px">
                
                   <tr > 
                   <td style="background-color: #cecece; padding: 20px"><button class="but"  onclick="location.href='balance.php'" >BALANCE INFO</button></td>
                    <td style="background-color: #cecece;padding: 20px"><button class="but"  onclick="location.href='fund.php'" >FUND TRANSFER</button></td>
                   </tr>
                
                <tr style="padding: 10px"> 
                   <td style="background-color: #cecece; padding: 20px"><button class="but"  onclick="location.href='deposit.php'" >DEPOSIT</button></td>
                    <td style="background-color: #cecece; padding: 20px"><button class="but"  onclick="location.href='withdrawal.php'" >WITHDRAWAL</button></td>
                   </tr>
                            </table>
            </fieldset>
       
        <br>
    </body>
</html>
