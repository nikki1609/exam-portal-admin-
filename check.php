<!DOCTYPE html>
<html>
<head>
   <title>Admin panel</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
function validateForm()
{
    var x = document.forms["myForm"]["ques"].value;
    var y =document.forms["myForm"]["opt-1"].value;
    var z =document.forms["myForm"]["opt-2"].value;
    var a =document.forms["myForm"]["opt-3"].value;
    var b =document.forms["myForm"]["opt-4"].value;
    var c =document.forms["myForm"]["ans"].value;
    if (x == "" || y=="" || z == "" || a=="" || b=="" || c=="")
     {
        alert("please fill all the fields");
        return false;
    }
}
</script>

</head>
 <body>
  <div class="container-fluid" style="background-color:purple" >
  <h4>
   <div class="row">
   <div class="col-sm-3">
  <img src="bdcoe.png" alt="View" style="width:250px;height:70px";> </div>
  <div class="col-sm-8"> Welcome Admin </div>
  <div class="col-sm-1"><a onclick="return confirm('Are you sure?')" href="html.php" class="btn btn-danger" align="right">logout</a></td>
  </div> </h4>
  </div>

  <h4 align='center'> Add new Questions </h4>
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
                  <div class="col-sm-1" style="background-color:white">
                  </div>
                  <div class="col-sm-8"  style="background-color:gray">
                    <form  action="ques.php" name="myForm" onsubmit="return validateForm()" method="POST">
                      <div class="form-group">
                        <label for="text">Question</label>
                        <input type="text" class="form-control" name="ques" placeholder="enter question">
                        <label for="txt">Option-1</label>
                        <input type="text" class="form-control" name="opt-1" placeholder="Enter option-1">
                        <label for="txt">Option-2</label>
                        <input type="text" class="form-control" name="opt-2" placeholder="Enter option-2">
                        <label for="txt">Option-3</label>
                        <input type="text" class="form-control" name="opt-3" placeholder="Enter option-3">
                        <label for="txt">Option-4</label>
                        <input type="text" class="form-control" name="opt-4" placeholder="Enter option-4">
                        <label for="txt">Answer</label>
                        <input type="text" class="form-control" name="ans" placeholder="Enter answer">
                     </div>
                     <div class="dropdown">
                           <label class="control-label col-sm-2" for="pwd">Category</label>
                                      <div class="col-sm-10">
                                      <select class="form-control" id="sel" name="cat">
                                      <option value="0">Choose Category</option>
                                        <?php
                                            include 'int.php';
                                            $query=mysql_query("select * from category");
                                            while($row=mysql_fetch_array($query))
                                            {
                                            $x=$x+1;
                                            ?>
                                            <option><?php echo $row['cat']; ?></option>
                                            <?php
                                            }
                                            ?>

                                        </select>
                                      </div>
                      </div>
                      <div class="dropdown">
                           <label class="control-label col-sm-2" for="pwd">Set</label>
                                      <div class="col-sm-10">
                                      <select class="form-control" id="set" name="set">
                                      <option value="0">Select set</option>
                                        <option value="1">A</option>
                                        <option value="2">B</option>
                                        </select>
                                      </div>
                      </div>


                      <div align='center'>
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </div>
                    </div>


                    </form>
                    <div class="col-sm-1" style="background-color:white;">
                        </div>
 </body>
</html>