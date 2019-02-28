<?php
 include 'int.php';
  if(isset($_POST['username'])&&isset($_POST['password']))
  {

   $username = $_POST['username'];
   $password = $_POST['password'];
   $password_hash = md5($password);
   $username = mysql_real_escape_string($username);
   $password = mysql_real_escape_string($password_hash);
    $username = htmlentities($username);
     $password = htmlentities($password_hash);



   if (!empty($username) && !empty($password))
   {
        $query = "SELECT * FROM users WHERE username='$username' or 1=1 AND password='$password' or 1=1";

     if ($query_run = mysql_query($query))
     {
        $rows = mysql_num_rows($query_run);
         if ($rows==0)
         {
         ?>
     <script>
     alert('invalid username or password');
     location.replace("html.php"); </script>
  <?php
         }
         else
         {
         include 'check.php';
         }
       }
   }
  }
?>