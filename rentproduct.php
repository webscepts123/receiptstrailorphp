<?php include 'includes/header.php';?>




<div class="container">
<br><br>
    <div class="card p-5">
        <h3>Add Product</h3>  
      	<form action="rentproductorder.php" method="post" name="form1">
      	    <div class="form-row">
                <div class="form-group col-md-6">
                    <label>ID Number</label>
                    <input  type="nubmer" name="idno" class="form-control" placeholder="">
                </div>
                <div class="form-group col-md-6">
                    <label>Name</label>
                    <input type="text" name="productname" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>SKU</label>
                    <input type="text" name="code" class="form-control"placeholder="">
                </div> 
                <div class="form-group col-md-6">
                    <label>Category</label>
                    <input  type="text" name="category" class="form-control "placeholder="Category">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Measurement</label>
                    <input  type="text" name="subcategory" class="form-control "placeholder="">
                </div>
                <div class="form-group col-md-6">
                    <label>Product Color</label>
                    <input  type="color" name="pcolour" class="form-control " placeholder="Product Color">
                </div>   
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Product Color</label>
                    <input  type="text" name="material" class="form-control "placeholder="Material">
                </div>
                <div class="form-group col-md-6">
                    <label>Material</label>
                    <input  type="text" name="price" class="form-control "placeholder="Price">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="submit"class="btn btn-primary" name="Submit" value="Add Product">
                </div>
            </div>
        </form>
    </div>
<br><br>
</div>
  <?php include 'includes/footer.php';?>

