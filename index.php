<?php
    session_start();
    
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Index</title>
        <style>
            body{
                background-color: #cecece;
            }
            img{
                margin: auto;
             display: block; 
                            
            }
            .pic{ opacity: 1;
                   filter: alpha(opacity=100); 
                  
                  
            } 
            .pic:hover {
                 opacity: 0.3; 
                 filter: alpha(opacity=30); 
                         
            }

        </style>
    </head>
    <body >
        
        <img src="img/images.png" alt="missing" >
        <br>
        <br>
        <fieldset style="padding-bottom: 230px;margin-left: 435px;margin-right: 435px">
        <table style="margin-left: auto;margin-right: auto">
           <tr>
           <td style="color: #64297d;font-size: 45px">  WELCOME TO INTERNET BANKING  </td>  
           </tr>
            
        </table>
        <br>
        <br>
        <br>
        <br>
        <table style="margin-left: auto;width: 100%;margin-right: auto">
        <tr>
            <td><a href="login.php"><img class="pic"src="img/login.png" alt="login"></a></td>
            <td><a href="register.php"><img class="pic" src="img/reg.png" alt="reg"></a></td>  
        </tr>
        </table>
        <br>
        <br>
        <h2 style="text-align: center;color: #4800ff">CLICK ABOVE</h2>
            </fieldset>
        <h5 style="text-align: center;color: #000;padding: 0px 0px 30px 10px">Copyright @2017</h5>
            
            
    </body>
</html>
