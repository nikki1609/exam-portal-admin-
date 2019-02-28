<!DOCTYPE html>
<head>
   <title>Result</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
 <body>
 <div class="container-fluid" style="background-color:purple">
 <h2 align="center">RESULT</h2>
 </div> <br><br/><br>

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
 <div style="background-color:white">
<?php
include 'int.php';
$right=0;
$wrong=0;
$unattmpt=0;
$query="SELECT result.student no. , result.question,result.response,test.answer
FROM student
INNER JOIN student ON test.question=student.question ";
$res=mysql_query($query);
echo "<tr align='center'>student no.</tr>";
 $y=1;
while($r=mysql_fetch_array($res))
{
  if($y%25==0)
  {
  echo "<tr><td>$x</td><td>{$r['student no.']}</td></tr>";
    while($row=mysql_fetch_array($res))
  {
    if($row['selected_ans']==$row['answer'])
    {
    $right=$right+1;
    }
    else if($row['selected_ans']==0)
    {
      $unattmpt=$unattmpt+1;
    }
    else
    $wrong=$wrong+1;
  }
  $y=$right+$unattmpt+$wrong;
}
}
$marks=4*$right;
?>
<h2 align='center'><?php echo 'FINAL RESULT'; ?></h2> <br> <br>
 <?php echo "<table width='400' border='1' cellpadding='1' cellspacing='1' align='center'>"; ?>
    <tr><td>NO. OF QUESTIONS ATTEMPTED</td><td><?php echo ($right+$wrong); ?> </td></tr>
    <tr><td>NO. OF CORRECT QUESTIONS</td><td><?php echo ($right); ?> </td></tr>
    <tr><td>NO. OF WRONG QUESTIONS</td><td><?php echo $wrong; ?> </td></tr>
    <tr><td>TOTAL MARKS</td><td><?php echo $marks; ?> </td></tr>
        <?php echo "</table>"; ?>
 </div>
 </body>
 </html>


