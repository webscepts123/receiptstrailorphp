<?php include 'includes/header.php';?>



<div class="container">
    <br><br>
    <div class="card p-5">
        <h3>Add Printer</h3>  
      	<form action="terminalprinterx.php" method="post" name="form1">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Printer Name</label>
                    <input  type="text" name="name" class="form-control" placeholder="">
                </div>
                <div class="form-group col-md-6">
                    <label>Connection Type</label>
                    <select name= "ctype" class=" search-box form-control" searchable id="cars">
                        <option>Network</option>
                        <option>Window</option>
                        <option>Linux</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Capability Profile</label>
                    <select name= "cprofile" class=" search-box form-control" searchable id="cars">
                        <option>Default</option>
                        <option>Simple</option>
                        <option>Star Branded</option>
                        <option>Espon Tep</option>
                        <option>P822D</option>
                    </select>
                </div>           
                <div class="form-group col-md-4">
                    <label>Characters Per Line</label>
                    <input type="text" name="charactername" class="form-control" value="42">
                </div>
                <div class="form-group col-md-4">
                    <label>Path</label>
                    <input type="text" name="path" class="form-control" placeholder="Name">
                </div>
            </div>         
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="submit"class="btn btn-primary" name="Submit" value="Add Printer">
                </div>
            </div>
        </form>   
    </div>
    <br><br>
</div>
  <?php include 'includes/footer.php';?>




