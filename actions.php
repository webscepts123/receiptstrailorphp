<?php include 'includes/header.php';?>


<?php
//including the database connection file
include_once("connection.php");

 $sql = "SELECT * FROM rentorders WHERE id='" . $_GET["id"] . "'";

    $result=mysqli_query($mysqli,$sql);
    $singleRow = mysqli_fetch_assoc($result);


?>


<div class="container">
    <h3>View Action</h3>
    
    <form actions="addactions" method="post">
        
        
       <div class="form-group">
         <label>Action</label>
           <select name="status" class="form-control">
             <option value="pending">Pending</option>
             <option value="complete">Complete</option>
             <option value="returned">Returned</option>
             
           </select>
        </div>
        
        <input type="submit"class="btn btn-primary" name="Submit" value="Add Action">
    </form>

</div>