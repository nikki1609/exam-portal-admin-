<!DOCTYPE html>
<head>
   <title>view questions</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script>
function validateForm()
{
    var x = document.forms["myForm"][""].value;
    var y =document.forms["myForm"]["opt-1"].value;
    if (x == "" || y=="")
     {
        alert("please fill all the fields");
        return false;
    }
}
</script>


</head>
 <body>
 <div class="container-fluid" style="background-color:purple">
 <h2 align="center">view questions </h2>
 </div>
  <div class="copntainer-fluid" >
 <ul class="breadcrumb">
  <li><a href="#PHP">PHP</a></li>
  <li><a href="#HTML/CSS">HTML/CSS</a></li>
  <li><a href="#JAVA">JAVA</a></li>
  <li><a href="#C">C</a></li>
  <li><a href="#APTITUTE">APTITUDE</a></li>
</ul>
</div>
 <div style="background-color:white">
<div class="row">
  <div class="col-sm-2" style="background-color:lavender;">
    <div class="nav nav-sidebar"> <br><br>
    <li ><a href="check.php"><strong>Add new questions</strong></a></li>
    <li ><a href="view.php"><strong>View all questions</strong></a></li>
    <li ><a href="delques.php"><strong>Delete questions</strong></a></li><br>
    <li ><a href="adcat.php"><strong>Add category</strong></a></li>
    <li ><a href="delcat.php"><strong>Delete category</strong></a></li>
    <li ><a href="result.php"><strong>Rank list</strong></a></li> <br><br><br><br><br><br><br><br>
    </div>
    </div>
    <div class="col-sm-2" style="background-color:white;"></div>
 <div class="container label col-sm-4">
             <form action="view.php" name="c" onsubmit="return validateForm()" method="POST">
             <label for="text">category</label>
             <input type="text" class="form-control" name="set" placeholder="enter set">
   <a href="view.php?idd=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
              </form>
 </div>
 </div>
 <?php
include 'int.php';
$query=mysql_query("SELECT * FROM test where set ==1");
$q=mysql_query("SELECT * FROM test");
$a= mysql_query("SELECT * FROM test");
$b=mysql_query("SELECT * FROM test");
$c=mysql_query("SELECT * FROM test");
$r =mysql_fetch_assoc($q);
echo "<table width='500' border='1' cellpadding='1' cellspacing='1' align='center'>";
$y=1;
if(isset($_POST['set']=='1'))
{
  while($row=mysql_fetch_assoc($query))
    {
    if($row['category']=='PHP')
    {
      if($y<=5)
    {
    $z=1;
   echo "<tr><td>$y</td><td>{$row['question']}</td></tr>";
   echo "<tr><td>$z</td><td>{$row['option1']}</td></tr>";
   $z=$z+1;
   echo "<tr><td>$z</td><td>{$row['option-2']}</td></tr>";
   $z=$z+1;
   echo "<tr><td>$z</td><td>{$row['option3']}</td></tr>";
   $z=$z+1;
   echo "<tr><td>$z</td><td>{$row['option4']}</td></tr>";
   echo "<tr><td>ans</td><td>{$row['answer']}</td</tr>";
   $y=$y+1;
  }
    }
    }
    while($row=mysql_fetch_assoc($a))
    {
  if($row['category']=='HTML/CSS')
  {
    if($y<=10)
    {
      if($y>5)
    {
    $z=1;
   echo "<tr><td>$y</td><td>{$row['question']}</td></tr>";
   echo "<tr><td>$z</td><td>{$row['option1']}</td></tr>";
   $z=$z+1;
   echo "<tr><td>$z</td><td>{$row['option-2']}</td></tr>";
   $z=$z+1;
   echo "<tr><td>$z</td><td>{$row['option3']}</td></tr>";
   $z=$z+1;
   echo "<tr><td>$z</td><td>{$row['option4']}</td></tr>";
   echo "<tr><td>ans</td><td>{$row['answer']}</td</tr>";
   $y=$y+1;
  }
    }
    }
    }
    while($row=mysql_fetch_assoc($b))
    {
     if($row['category']=='JAVA')
     {
       if($y<=15)
     {
       if($y>10)
    {
    $z=1;
   echo "<tr><td>$y</td><td>{$row['question']}</td></tr>";
   echo "<tr><td>$z</td><td>{$row['option1']}</td></tr>";
   $z=$z+1;
   echo "<tr><td>$z</td><td>{$row['option-2']}</td></tr>";
   $z=$z+1;
   echo "<tr><td>$z</td><td>{$row['option3']}</td></tr>";
   $z=$z+1;
   echo "<tr><td>$z</td><td>{$row['option4']}</td></tr>";
   echo "<tr><td>ans</td><td>{$row['answer']}</td</tr>";
   $y=$y+1;
  }
    }
     }
    }
    while($row=mysql_fetch_assoc($c))
    {
     if($row['category']=='C')
     {
       if($y<=20)
       {
         if($y>15)
    {
    $z=1;
   echo "<tr><td>$y</td><td>{$row['question']}</td></tr>";
   echo "<tr><td>$z</td><td>{$row['option1']}</td></tr>";
   $z=$z+1;
   echo "<tr><td>$z</td><td>{$row['option-2']}</td></tr>";
   $z=$z+1;
   echo "<tr><td>$z</td><td>{$row['option3']}</td></tr>";
   $z=$z+1;
   echo "<tr><td>$z</td><td>{$row['option4']}</td></tr>";
   echo "<tr><td>ans</td><td>{$row['answer']}</td</tr>";
   $y=$y+1;
  }
    }
       }
    }
       while($row=mysql_fetch_assoc($q))
    {
     if($row['category']=='APTITUTE')
     {
     if($y>20)
     {
       if($y<=25)
  {
    $z=1;
   echo "<tr><td>$y</td><td>{$row['question']}</td></tr>";
   echo "<tr><td>$z</td><td>{$row['option1']}</td></tr>";
   $z=$z+1;
   echo "<tr><td>$z</td><td>{$row['option-2']}</td></tr>";
   $z=$z+1;
   echo "<tr><td>$z</td><td>{$row['option3']}</td></tr>";
   $z=$z+1;
   echo "<tr><td>$z</td><td>{$row['option4']}</td></tr>";
   echo "<tr><td>ans</td><td>{$row['answer']}</td</tr>";
   $y=$y+1;

    }
    }
    }
    }
  }
echo "</table>";

?>


</div>
</body>
</html>