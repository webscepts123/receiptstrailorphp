<?php include 'includes/header.php';?>

<?php
  include_once("connection.php"); 
  
  $sql = "SELECT * FROM printer WHERE id='" . $_GET["id"] . "'";

    $result=mysqli_query($mysqli,$sql);
    $singleRow = mysqli_fetch_assoc($result);
  ?>

<div class="container">
  <h3>Add Printer</h3>  
    
</div>

  <div class="container" style="
    padding: 51px;
">
      	<form action="terminalprinterx.php" method="post" name="form1">
            <div class="form-group">
                <label>Printer Name</label>
                <input  type="text" name="name" class="form-control" placeholder="">
            </div>
            <br>

            <div class="form-group">
                <label>Connection Type</label>
                <select name= "ctype" class=" search-box form-control" searchable id="cars">
                    <option>Network</option>
                    <option>Window</option>
                    <option>Linux</option>

                </select>

            </div>

            <div class="form-group">
                <label>Capability Profile</label>
                <select name= "cprofile" class=" search-box form-control" searchable id="cars">
                    <option>Default</option>
                    <option>Simple</option>
                    <option>Star Branded</option>
                    <option>Espon Tep</option>
                    <option>P822D</option>


                </select>

            </div>

                    
            
            <div class="form-group">
                <label>Characters Per Line</label>
                <input type="text" name="charactername" class="form-control" value="42">
            </div>

            <div class="form-group">
                <label>Path</label>
                <input type="text" name="path" class="form-control" placeholder="Name">
            </div>

        <br>
        
       
        
        
        <div class="form-group">
                <label>Path</label>
                <input type="text" name="code" class="form-control"placeholder="">
            </div>

        <br>
        
            
      
        <br>
            
  

         <input type="submit"class="btn btn-primary" name="Submit" value="Add Printer">
    </div>
 
    </form>
      
      
  </div>
  
  <?php include 'includes/footer.php';?>




