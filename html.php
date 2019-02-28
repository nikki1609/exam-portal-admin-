<!DOCTYPE html>
<html>
<head>
      <title>Admin Login</title>
      <link rel="stylesheet" type="text/css" href="style.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <style>
      body{
    background-color : purple;
       }
     div.transparency
     {
    #frm{
  border: solid grey 1px;
  width: 20%;
  border-radius: 5px;
  margin: 100px auto;
  padding: 50px;
}
#btn{
  color: #fff;
  background: #337ab7;
  padding: 5px;
  margin-left: 69%;

     }
      }
</style>
<script>
function validateForm() {
    var x = document.forms["myForm"]["username"].value;
    var y =document.forms["myForm"]["password"].value;

    if (x == "" || y=="") {
        alert("please fill all the fields");
        return false;
    }
}
</script>
</head>
<body>
<div class="background">
<div class="transparency">
  <div id="frm">
  <h2> ADMIN LOGIN </h2>
      <form action="login.inc.php" name="myForm" onsubmit="return validateForm()" method="POST">
          <p>
            <label>UserName:</label>
            <input type="text" id="username" name="username" placeholder="username" />
          </p>
          <p>
          <label>Password : </label>
          <input type="password" id="password" name="password" placeholder="password" />
          </p>
          <p>
          <input type="submit" id="btn" value="Login" />
          </p>

       </form>
    </div>
    </div>
    </div>
    
 </body>
</html>