<!DOCTYPE html>
 <html>
  <head>
   <title> Home Page </title>
      <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
  <table style="background-color:#FFFFFF;width:100%;opacity:.9;"><tr><td>
   <div id="full">
   <a name="top"> </a>
   <table style="width:100%; hight:150px;">
   <tr><td>
   <div style=""><img src="image/11.PNG" height="150" width="125"/></div></td><td><div style="font-size:40px;">
   <b>Computer &nbsp;&nbsp;Science &nbsp;&nbsp;&amp;&nbsp;&nbsp; Engineering&nbsp;&nbsp; Department(CSED)</b>
   </br><i>Motilal Nehru National Institute of Technology Allahabad</i></div>
   </td></tr>
   </table>
<div class="parallax">
<div class="navbar">
  <a href="home.php">Home</a>
  <a href="#">About</a>
  <a href="adminlogin.php" class="right">Admin Login </a>
</div>
<br>

<table align="center" border="0" WIDTH="50%" height="250">
      <!-- <h1 class="text-center bg-warning"><b>LOGIN<b></h1> -->
<center><a  style="color: green; font-size: 35px; font-family: Arial, Helvetica, sans-serif;">User Login</a></center>

    <form method="post" action="">
    <br>
  
        <tr>
          <th class="text-primary">LOGIN ID</th>
          <th>
          <input class="form-control"type="TEXT" title="enter your regitered LOGIN ID"  placeholder="LOGIN ID"  maxlength="10" size="25"  id="loginid2" name="loginid"/></tD>
        </th>
        <tr>
          <th class="text-primary">ENTER PASSWORD</th>
          <th><input class="form-control" type="password" name="pass" id="pass2"/></th>
          </tr>
                 <?php
      if(isset($found))
      {
        echo "Invalid Username or Password";
      }
      ?>
          </span></td>
         <th></th>
        <th class="errors">
          <input class="btn btn-danger "type="submit" name="submit" id="submit" Value="Login"/>
        
        <a class="btn btn-success " href="signup.php">New user ? click here</a></th>
      </table>
      
    </form></td>
  </tr>
</table>

  </body>
 </html>
