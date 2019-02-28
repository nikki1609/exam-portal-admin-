<?php
include 'int.php';
include 'check.php';
@$question=$_POST['ques'];
@$opt1=$_POST['opt-1'];
@$opt2=$_POST['opt-2'];
@$opt3=$_POST['opt-3'];
@$opt4=$_POST['opt-4'];
@$ans=$_POST['ans'];
$array=[$question,$opt1,$opt2,$opt3,$opt4];
@$cat=$_POST['cat'];
@$set=$_POST['set'];


if(isset($_POST['submit']))
{
  $check=mysql_query("select * from test WHERE question ='$question'");
  $row=mysql_num_rows($check);
  if($row!=0)
  {
     ?>
     <script> 
     alert('question already exit');
     location.replace("check.php"); </script>
  <?php
  }
  if(!empty($question) && !empty($opt1) && !empty($opt2) && !empty($opt3) && !empty($opt4) && !empty($ans) && !empty($cat) && !empty($set))
  {
  if($ans=array_search($ans,$array))
  {
    $query=mysql_query("INSERT INTO TEST VALUES('','$question','$opt1','$opt2','$opt3','$opt4','$ans','$cat','$set')");
    echo "<script>
  alert('your question has added successfully');
  location.replace('check.php'); </script>";
  }
  else
  {
  echo "<script>
  alert('please enter valid answer');
  location.replace('check.php'); </script>";
  }
}
}

?>


