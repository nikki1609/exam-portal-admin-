<!DOCTYPE html>
<head>
   <title>Result</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
 <body>
 <div class="container-fluid" style="background-color:purple" >
  <h3>
   <div class="row">
   <div class="col-sm-5"> </div>
  <div class="col-sm-6">RANK LIST</div>
  <div class="col-sm-1"><a onclick="return confirm('Are you sure?')" href="html.php" class="btn btn-danger" align="right">logout</a></td>
  </div> </h3>
  </div><BR><BR>
 <div style="background-color:white">
<?php
include 'stcon.php';
$query="SELECT * FROM st ORDER BY marks DESC";
$res=mysql_query($query);
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
    $x=1;
echo "<table width='400' border='1' cellpadding='1' cellspacing='1' align='center'>";
echo "<tr><th>Serial no.</th><th>Student no.</th><th>Student Name</th><th>Marks</th></th><th>Result</th></tr>";
while($line=mysql_fetch_array($res))
{
  ?>
<tr>
<td> <?php echo $x; ?> </td>
<td> <?php echo $line['student no.'] ?> </td>
<td> <?php echo $line['student name'] ?></td>
<td> <?php echo $line['marks'] ?> </td>
   <td>
   <a href="viewrslt.php?idd=<?php echo $line['id'];?>" class="btn btn-success">click here></td>
   </tr>
      <?php
      $x=$x+1;
}
echo "</table>";
?>
</div>
</body>
</html>


