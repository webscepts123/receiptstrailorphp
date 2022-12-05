<?php include 'includes/header.php';?>


<?php

include_once("connection.php");

if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusType = 'alert-success';
            $statusMsg = 'Members data has been imported successfully.';
            break;
        case 'err':
            $statusType = 'alert-danger';
            $statusMsg = 'Some problem occurred, please try again.';
            break;
        case 'invalid_file':
            $statusType = 'alert-danger';
            $statusMsg = 'Please upload a valid CSV file.';
            break;
        default:
            $statusType = '';
            $statusMsg = '';
    }
}


?>

<?php 

include_once("connection.php");

if(isset($_POST['importSubmit'])){
    
    // Allowed mime types
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    
    // Validate whether selected file is a CSV file
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        
        // If the file is uploaded
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            // Skip the first line
            fgetcsv($csvFile);
            
            // Parse data from CSV file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                // Get row data
                $code   = $line[0];
                $name  = $line[1];
                $description  = $line[2];
                $min_price = $line[3];
                $max_price = $line[4];
                $avastock = $line[5];
                $qty = $line[6];
                $price = $line[7];
                
                // Check whether member already exists in the database with the same email
                $prevQuery = "SELECT id FROM products WHERE name = '".$line[1]."'";
                $prevResult = $db->query($prevQuery);
                
                if($prevResult->num_rows > 0){
                    // Update member data in the database
                    $db->query("UPDATE products SET name = '".$name."', phone = '".$phone."', status = '".$status."', modified = NOW() WHERE email = '".$email."'");
                }else{
                    // Insert member data in the database
                    $db->query("INSERT INTO products (name, email, phone, created, modified, status) VALUES ('".$name."', '".$email."', '".$phone."', NOW(), NOW(), '".$status."')");
                }
            }
            
            // Close opened CSV file
            fclose($csvFile);
            
            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}

// Redirect to the listing page
header("Location: index.php".$qstring);

?>




<div class="container">
    
    <?php if(!empty($statusMsg)){ ?>
        <div class="col-xs-12">
            <div class="alert <?php echo $statusType; ?>"><?php echo $statusMsg; ?></div>
        </div>
    <?php } ?>
    
    <br>
    <br>


    <h5 class="head5">Add Product</h5>
    
    <div class="form-row">
        <div class="col-md-12 head">
            <div class="float-right">
                <a href="javascript:void(0);" class="btn btn-success" onclick="formToggle('importFrm');"><i class="plus"></i> Import</a>
            </div>
        </div>
        <!-- CSV file upload form -->
        <div class="col-md-12" id="importFrm" style="display: none;">
            <form action="importData.php" method="post" enctype="multipart/form-data">
                <input type="file" name="file" />
                <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
            </form>
        </div> 
    </div>
	<form action="addproducts.php" method="post" name="form1">
            <div class="form-group">
                <label>Select Category</label>
                <select class="form-control">
                <option value="">Select the Item</option>
                 
                    <?php
                        include "connection.php";  // Using database connection file here
                        $products_cat = mysqli_query($mysqli, "SELECT name From category");  // Use select query here 

                        while($product_categoty = mysqli_fetch_array($products_cat))
                        {
                            echo "<option value='". $product_categoty['id'] ."'>" .$product_categoty['name'] ."</option>";  // displaying data in option menu
                        }	
                    ?>  
                </select>
            </div>
            <br>

            <div class="form-group">
                <label>Code</label>
                <input  type="nubmer" name="code" class="form-control ">
            </div>
            <br>
            <div class="form-group">
                <label>Name</label>
                <input  type="text" name="name" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control">
            </div>

        <br>

      
            <div class="row">
              
                <div class="col-sm">
                <label>Min Price</label>
                <input type="number" name="min_price" class="form-control">
                </div>
                <div class="col-sm">
                <label>Max Price</label>
                <input type="number" name="max_price" class="form-control">
                </div>
            </div>
    
       <br>

       <div class="form-group">
            <label>Avaliable Stock</label>
              <input  type="nubmer" name="avastock" class="form-control">
             
            </div>

            <br>

        <input type="submit" " class="btn btn-primary" name="Submit" value="Add Product">
    </div>
 
    </form>

   
</div>

<script>
function formToggle(ID){
    var element = document.getElementById(ID);
    if(element.style.display === "none"){
        element.style.display = "block";
    }else{
        element.style.display = "none";
    }
}
</script>

<?php include 'includes/footer.php';?>

