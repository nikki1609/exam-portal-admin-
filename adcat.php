<!DOCTYPE html>
<head>
   <title>add category</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
function validateForm()
{
    var x = document.forms["c"]["cat"].value;
    if (x == "" )
    {
    alert("please fill the field");
        return false;
    }
}
</script>
</head>
 <body>
 <div class="container-fluid" style="background-color:purple">
 <h2 align='center'>ADD CATEGORY</h2> <br>
 </div>
 <br><br
 <div class="row">
  <div class="col-sm-2" style="background-color:lavender;">
    <div class="nav nav-sidebar"> <br><br>
    <li ><a href="check.php"><strong>Add new questions</strong></a></li>
    <li><strong>.View all questions</strong></li>
    <li ><a href="seta.php"><strong>SET-A</strong></a></li>
    <li ><a href="setb.php"><strong>SET-B</strong></a></li>
    <li ><a href="delques.php"><strong>Delete questions</strong></a></li><br>
    <li ><a href="adcat.php"><strong>Add category</strong></a></li>
    <li ><a href="delcat.php"><strong>Delete category</strong></a></li>
    <li ><a href="result.php"><strong>Rank list</strong></a></li> <br><br><br><br><br><br><br><br>
    </div>
    </div>
 <div class="col-sm-2" style="background-color:white;"></div>
 <div class="container label col-sm-4">
             <form action="actcat.php" name="c"  onsubmit="return validateForm()" method="POST">
             <label for="text">category</label>
             <input type="text" class="form-control" name="cat" placeholder="enter category">
             <center><button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </form>
 </div>
 </div>
 </body>
</html>