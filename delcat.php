 <!DOCTYPE html>
<html>
<head>
   <title>View catetory</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
 <body>
 <div class="container-fluid" style="background-color:purple">
 <h2 align="center">DELETE CATEGORY </h2>
 </div>
 <div style="background-color:white">
 <?php
include 'int.php';
$query=mysql_query("SELECT * FROM category");
?>
<div class="row">
  <div class="col-sm-2" style="background-color:lavender;">
    <div class="nav nav-sidebar"> <br><br><br><br>
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
<?php
echo "<table width='500' border='1' cellpadding='1' cellspacing='1' align='center'>";
echo "<tr><th>ID NO.</th><th>QUESTION</th><th>ACTION</th></tr>";
while($row=mysql_fetch_assoc($query))
{
?>
<tr>
<td> <?php echo $row['id'] ?> </td>
<td> <?php echo $row['cat'] ?></td>
   <td>
   <a onclick="return confirm('Are you sure?')" href="delcat.php?idd=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
   </tr>.
<?php
}
echo "</table>";
if(isset($_GET['idd']))
{
  $idd=$_GET['idd'];
  $res=mysql_query("delete from category where id='$idd'");
  if($res)
  {
    header("location:delcat.php");
  }
  else
  {
?>
    <script>
    alert("failed to delete auestion");
    window.location.href='delcat.php';
    </script>
<?php
  }
}
?>
</div>
</body>
</html>