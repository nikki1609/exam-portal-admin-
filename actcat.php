<?php
include 'int.php';
@$cat=$_POST['cat'];
if(isset($_POST['submit']))
{
$query=mysql_query("SELECT * FROM category where cat='$cat'");
$res=mysql_num_rows($query);
  if($res!=0)
  {
     die("category already exit");
  }
  if(!empty($cat))
  {
    $query=mysql_query("INSERT INTO category VALUES('','$cat')");
    die("your category has added successfully.<br><a href = 'check.php'> Click here! </a> admin page</a>.<br>
    <a href = 'adcat.php'> Click here! </a>previous page");


  }
}
?>