<?php include 'includes/header.php';?>

<?php

//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)

$sql = "SELECT * FROM rentorders WHERE id='" . $_GET["id"] . "'";

$result=mysqli_query($mysqli,$sql);
$singleRow = mysqli_fetch_assoc($result);
?>


<div class="container">
  <h3>Add Text</h3>  
    
</div>

<div class="container" style="padding: 51px;">
    	<form action="addtextu.php" method="post" name="form1">
            <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $singleRow['id']; ?>">

                <label>Add Text</label>
                <input type="text" name="addtext" class="form-control ">
            </div>
            <br>

        
        <input type="submit" " class="btn btn-primary" name="Submit" value="Add Text">
    
</div>

 
    </form>

   
</div>