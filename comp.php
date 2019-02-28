<?php
include 'int.php';

$query = mysql_query("select * FROM st ORDERED BY marks ASC");
//foreach($x=0;$x<=500;$x++)
//{
  //foreach($y=1;$y<=500-$x;$y++)
  //{
  while($row=mysqli_fetch_array($query))
        echo $row['marks'];
  //}
//}
?>