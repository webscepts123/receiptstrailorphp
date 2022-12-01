<?php include 'includes/header.php';?>

<?php

include_once("connection.php"); 

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM coats ORDER BY id DESC");

?>

<?php
include_once("connection.php");

    
    $sql = "SELECT * FROM coats WHERE id='" . $_GET["id"] . "'";
  

    $result=mysqli_query($mysqli,$sql);
    $singleRow = mysqli_fetch_assoc($result);
    

?>



<div class="container">
    <h3>View Action</h3>
    <br>
    <br>
    <form action="pstatuss.php" method="post" name="form1">
        
        
       <div class="form-group">


         <input type="hidden" name="id" value="<?php echo $singleRow['id']; ?>">
           <select name="status" class="form-control">
             <option value="pending">Pending</option>
             <option value="complete">Complete</option>
             <option value="returned">Returned</option>
             
           </select>
        </div>
        
        <input type="submit"class="btn btn-primary" name="Submit" value="Add Action">
    </form>

</div>