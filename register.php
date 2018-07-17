<?php
    include('DBconn.php');
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>REGISTER</title>
    </head>
    <body >
         <style>
            form{
                margin-left: 250px;
                
            }
              input[type=text],[type=password],[type=number]{
                 border: 25%;
                padding: 5px 10px 5px 10px;
                width: 200px;
                border-radius: 10px;
                border-width: 3px;
                 border:2px solid #adadad;
                font-size:18px;
                font-weight:700;
                font-family:'Droid Serif',serif;
                margin-bottom:15px
                
             }
             select{  border: 25%;
                padding: 5px 10px 5px 10px;
                width: 200px;
                border-radius: 10px;
                border-width: 3px;
                 border:2px solid #adadad;
                font-size:18px;
                font-weight:700;
                font-family:'Droid Serif',serif;
                margin-bottom:15px}
           
            input[type=submit],[type=reset]{
                background-color: #00ff90;padding: 5px 10px 5px 10px;
            }
              body{
                background-color: #cecece;
            }
            img{
                margin: auto;
             display: block; 
                            
            }
             h2{
                text-align: center;
                color: #4800ff;                                     
                } 
            h3{
                text-align: center;
                color: #f00;                                     
                }                                     
        </style>
              <br>
         <img src="img/images.png" alt="missing" >
        <br>
        <fieldset style="margin-left: 500px;margin-right:500px">
            <legend style="text-align: center"><h3 style="color:green">Customer Details</h3></legend>
            <br>    
    
          <form method="post">
            <label for="usr">USERNAME : </label><input  id="usr" type="text" name="user" placeholder="Username" required><br>
            <label for="pss">PASSWORD : </label><input id="pss" type="password" name="pass" placeholder="Password"required><br>
            <label for="rpass">RE-ENTER : </label><input id="rpass" type="password" name="repass" placeholder="Re-enter"required><br>
            <label for="ara">ADDRESS :</label><br><br> <textarea id="ara" style="margin-right: 20px;padding: 20px" name="add" rows="5" cols="30" required></textarea><br>
            <label for="mbl">MOBILE : </label><input id="mbl" type="number"  name="ph" placeholder="Phone" required><br>
            <label for="email">EMAIL : </label><input id="email" type="text"  name="email" placeholder="Email" required><br>

            <label for="accn">ACCOUNT NUMBER : </label><input type="number" name="accno" placeholder="Account no." required><br>
            <label for="accty">ACCOUNT TYPE : </label>
            <select name="acctype" >
            <option value="empty">----select type----</option>

            <option value="curr">Current Account</option>
            <option value="save">Saving Account</option>                                          
           </select><br>
            <label for="ifs">IFSC : </label><input type="text" name="ifsc" placeholder="IFSC" required><br>
            <label for="brcode">BRANCH CODE : </label><input type="number" name="brcode" placeholder="Branch Code" required><br>

              <input type="submit" name="sub" value="Register">
            <input type="reset" value="RESET">            
          </form>
       <br>
            </fieldset>
          <h3><a href=login.php>Sign IN</a></h3>
            </body>
   <?php
          //variables for POST
   if(isset($_POST['sub'])){
           $user=$_POST['user'];
           $pss=$_POST['pass'];
           $repass=$_POST['repass'];
           $ph=$_POST['ph'];
           $su=$_POST['sub'];
           $address=$_POST['add'];
           $email=$_POST['email'];
           $accno=$_POST['accno'];
           $acctype=$_POST['acctype'];
           $ifsc=$_POST['ifsc'];
           $brcode=$_POST['brcode'];
          
             
                 if($pss==$repass){
                           $sql1="INSERT INTO login(username,password,mobile,email,address,accno,acctype,ifsc,brcode)
                            VALUES('$user','$pss',$ph,'$address','$email',$accno,'$acctype','$ifsc',$brcode)";
                            $sql2="INSERT INTO balance(username,baln,accno,ifsc) VALUES('$user',0,$accno,$brcode)";   
                           if($conn->query($sql1)===TRUE && $conn->query($sql2)===TRUE){
                                 echo"<h2>","You registred successfully","</h2>";
                           }
            
                 }
                 else
                 echo"<h3>","Password mismatch","</h3>";
            }
            
        ?>
</html>
