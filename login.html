<?php
    include('DBconn.php');
    session_start();
     if(!isset($_SESSION)){
        header('location:home.php');
       
    }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Login</title>
    </head>
    <body style="background-color: #cecece";font-family:verdana">
        <script>
            function check(){
            var user = document.getElementById('usr');
            var pss = document.getElementById('pss');
            if (user == "" || pss == "") {
                alert("Enter both the field");
                return false;
            }
            else{
                return true ;
            }
            }
        </script>
         <style>
            /*form{
                margin-left: 280px;
                
            }*/
           img{
                margin: auto;
             display: block; 
                            
            }
           
            /*input[type=submit]{
                background-color: #00ff90;padding: 5px 10px 5px 10px;
                border-bottom-width: medium;
                border-radius: 10px;
               
                width:20%;
                margin-top:10px;
                background-color:#474242;
                cursor:pointer;
                color:#fff;
                border:2px solid #adadad;
                font-size:18px;
                font-weight:700;
                font-family:'Droid Serif',serif;
                margin-bottom:15px
            }
             input[type=text],[type=password]{
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
                
             }*/
            h3{
                text-align: center;
                color: #f00;                                     
                }                                     
        </style>
          <img src="img/images.png" alt="missing" >
        
        <br>
        <br>
        <br>
        <fieldset style="margin-left: 500px;margin-right: 500px">
            <legend style="text-align: center">Login PAGE</legend>
            <br>
            <div class="container">
          <form method="post" onsubmit="return check()">
          <div class="form-group">
          <label class="control-label" for="usr"> USERNAME :  </label><input class="form-control col-sm-10" type="text" id="usr" name="user" placeholder="Username" id="usr" required>
          </div>
          <div class="form-group">
          <label class="control-label" for="pss"> PASSWORD :  </label><input class="form-control col-sm-10" type="password" id="pss" name="pass" placeholder="Password"id="pss"required>
          </div>
            <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
          </form>
          </div>
            <br>
      </fieldset>
        <h3><a href=register.php>Sign UP</a></h3>
        <?php
            $ch=1 ;
            if(isset($_POST['sub'])){
         $ur=$_POST['user'];
           $pss=$_POST['pass'];  
           $su=$_POST['sub'];   

           $_SESSION["usrnm"]="$ur";
        
             

                 $sql="SELECT username,password from login";
                 $res=$conn->query($sql);
                     if($res->num_rows>0){
                         while($row=$res->fetch_assoc()){
                               if($row['username']==$ur&&$row['password']==$pss){
                                  echo"correct";
                                  $ch=0;
                                header('location:home.php');
                               }
                         }    
                         
                     }
                     if($ch==1){
                         echo"<h3>","Wrong USER and PASS","</h3>";     
                    }
            } 
        ?>
      

    </body>
</html>
