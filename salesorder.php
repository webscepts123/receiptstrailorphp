<?php include 'includes/header.php';?>

<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM rentcustomer ORDER BY id DESC");
?>

<style>
  .result
  {
    background-color: DodgerBlue;
    color: white;
    left: 0;
    right: 0;
    z-index: 99;
  }
</style>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("#p").hide();
  });
  $("#show").click(function(){
    $("#p").show();
  });
});
</script>

<script>
$(document).ready(function(){
  $("#hide1").click(function(){
    $("#p2").hide();
  });
  $("#show1").click(function(){
    $("#p2").show();
  });
});
</script>

<script>
$(document).ready(function(){
  $("#hide2").click(function(){
    $("#p3").hide();
  });
  $("#show2").click(function(){
    $("#p3").show();
  });
});
</script>

<script>
$(document).ready(function(){
  $("#hide3").click(function(){
    $("#p4").hide();
  });
  $("#show3").click(function(){
    $("#p4").show();
  });
});
</script>

<script>
$(document).ready(function(){
  $("#hide4").click(function(){
    $("#p5").hide();
  });
  $("#show4").click(function(){
    $("#p5").show();
  });
});
</script>

<script>
$(document).ready(function(){
  $("#hide5").click(function(){
    $("#p6").hide();
  });
  $("#show5").click(function(){
    $("#p6").show();
  });
});
</script>

<script>
$(document).ready(function(){
  $("#hide6").click(function(){
    $("#p7").hide();
  });
  $("#show6").click(function(){
    $("#p7").show();
  });
});
</script>

<script>
$(document).ready(function(){
  $("#hide7").click(function(){
    $("#p8").hide();
  });
  $("#show7").click(function(){
    $("#p8").show();
  });
});
</script>

<script>
$(document).ready(function(){
  $("#hide8").click(function(){
    $("#p9").hide();
  });
  $("#show8").click(function(){
    $("#p9").show();
  });
});
</script>


<script>
$(document).ready(function(){
  $("#hide20").click(function(){
    $("#pe11").hide();
  });
  $("#show20").click(function(){
    $("#pe1").show();
  });
});
</script>


<script>
$(document).ready(function(){
  $("#hide21").click(function(){
    $("#pe12").hide();
  });
  $("#show21").click(function(){
    $("#pe2").show();
  });
});
</script>


<script>
$(document).ready(function(){
  $("#hide22").click(function(){
    $("#pe13").hide();
  });
  $("#show22").click(function(){
    $("#pe3").show();
  });
});
</script>

<script>
$(document).ready(function(){
  $("#hide23").click(function(){
    $("#pe14").hide();
  });
  $("#show23").click(function(){
    $("#pe4").show();
  });
});
</script>

<script>
$(document).ready(function(){
  $("#hide24").click(function(){
    $("#pe15").hide();
  });
  $("#show24").click(function(){
    $("#pe5").show();
  });
});
</script>


<script>
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>

<div class="container">
  <h3>Add Order</h3>  
    
</div>

  <div class="container" style="
    padding: 51px;
">
      	<form action="addorderental.php" method="post" name="form1">
            <!-- <div class="form-group">
                <label>ID Number</label>
                <input  type="nubmer" name="idno" class="form-control" placeholder="">
            </div> -->
            <br>
            
            
            <div class="container">
                  <div class="row">
                    <div class="col">
                        <div class="form-group">
                         <label>Customer Name</label>
                          <select name= "customername" class=" search-box form-control" searchable id="cars">
                            <option  >Choose a Customer</option>
                            <?php
	                          while($res = mysqli_fetch_array($result)) {	
                           echo  '<option value= "'.$res['id'].'">' .$res['customername'].'</option>';
                            }
                            ?>
                          </select>

                        </div>
                    </div>
                    <div class="col" style="padding: 30px;">

                         
                        <a href='rentcustomer.php' class="btn btn-success">Add Customer</a>

                    </div>

                  </div>
                          </div>


        <br>
        
            <!-- <div class="container">
                  <div class="row">
                    <div class="col">
                        <div class="form-group">
                          <label>Date</label>
                          <input type="date" name="date" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                          <label>Due Date</label>
                          <input type="date" name="duedate" class="form-control" placeholder="Name">
                        </div>
                    </div>

                  </div>
            </div>
        <br> -->

		<div class="card">
            
              <div class="card-body">
                
                <a id="show20"  class="btn btn-app bg-secondary">
                  <i class="fas fa-barcode"></i> Coat
                </a>
                <a  id="show21"  class="btn btn-app bg-success">
                  <i class="fas fa-users"></i> West Coat
                </a>
                <a id="show22" class="btn btn-app bg-danger">
                  <i class="fas fa-inbox"></i> Shirt
                </a>
                <a id="show23" class="btn btn-app bg-warning">
                  <i class="fas fa-envelope"></i> Trouser
                </a>
                <a  id="show24" class="btn btn-app bg-info">
                  <i class="fas fa-heart"></i> Shorts
                </a>
              </div>

              <div id="pe1" class="container" style="display:none;">
                 <label>Hight, york, half hand with york</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>

                 <label>full hand with york</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>

                 <label>full hand, chest</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>

                 <label>stomach</label>
                 <input type="text" name="hight" class="form-control">

                 <input>
                 <br>
                 <br>

                 <label>seat</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>

                 <label>arm</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>

                 <label>l-bow, fold</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>
             </div>

             <div id="pe2" class="container" style="display:none;">
                 <label>Hight</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>

                 <label>chest</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>

                 <label>stomach</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>

                 <label>seat</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>

             
             </div>

             <div id="pe3" class="container" style="display:none;">
                 <label>Hight</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>

                 <label>york</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>

                 <label>hand</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>

                 <label>chest</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>

                 <label>Stomach</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>

                 <label>Seat</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>


                 <label>Collar</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>

                 <label>arm</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>

                 <label>I-bow</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>

                 <label>Fold Cutting</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>


             
            </div>



              <!-- /.card-body -->
            </div>

            <div id="pe4" class="container" style="display:none;">
                 <label>Hip</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>

                 <label>seat</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>

                 <label>Thighies</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>

                 <label>knee</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>

                 <label>fold</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>

                 <label>zipper</label>
                 <input type="text" name="hight" class="form-control">

                 <br>
                 <br>

                 <label>hight Cutting </label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>


                 <label>hight </label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>

                 <label>Hip </label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>

             
             </div>

             <div id="pe2" class="container" style="display:none;">
                 <label>Hip</label>
                 <input type="text" name="hight" class="form-control">

                 <br>
                 <br>

                 <label>seat</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>

                 <label>Thighies</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>

                 <label>fold</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>

                 <label>zippper</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>

                 <label>Hight</label>
                 <input type="text" name="hight" class="form-control">
                 <br>
                 <br>

                
             
             </div>

        
       	<div class="row">
		      		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		      			<table class="table table-bordered table-hover" id="invoiceItem">	
							<tr>
								<th width="2%"><input id="checkAll" class="formcontrol" type="checkbox"></th>
								<th width="15%">Item No</th>
								<th width="38%">Item Name</th>
								<th width="15%">Quantity</th>
								<th width="15%">Price</th>								
								<th width="15%">Total</th>
							</tr>
													
							<tr>
								<td><input class="itemRow" type="checkbox"></td>
								<td><input type="text"  name="productcode"  class="form-control" autocomplete="off"></td>
								<td><input type="text" class="form-control" name="productname"  autocomplete="off"></td>			
								<td><input type="number"  name="quantity" class="form-control quantity" autocomplete="off"></td>
								<td><input type="number"  name="price"  class="form-control price" autocomplete="off"></td>
								<td><input type="number"  name="total"  class="form-control total" autocomplete="off"></td>
									<td><button class="btn btn-danger delete"  type="button" id="hide">- Delete</button><button class="btn btn-success" id="show" type="button">+ Add More</button></td>
							
							</tr>
							
								<tr id="p"  style="display:none;">>
								<td><input class="itemRow" type="checkbox"></td>
								<td><input type="text"  name="productcode2"  class="form-control" autocomplete="off"></td>
								<td><input type="text" class="form-control" name="productname2"  autocomplete="off"></td>			
								<td><input type="number"  name="quantity2" class="form-control quantity" autocomplete="off"></td>
								<td><input type="number"  name="price2"  class="form-control price" autocomplete="off"></td>
								<td><input type="number"  name="total2"  class="form-control total" autocomplete="off"></td>
									<td><button class="btn btn-danger delete"  type="button" id="hide1">- Delete</button><button class="btn btn-success" id="show1" type="button">+ Add More</button></td>
							
							</tr>	
								
								
							<tr id="p2"  style="display:none;">
								<td><input class="itemRow" type="checkbox"></td>
								<td><input type="text"  name="productcode3"  class="form-control" autocomplete="off"></td>
								<td><input type="text" class="form-control" name="productname3"  autocomplete="off"></td>			
								<td><input type="number"  name="quantity3" class="form-control quantity" autocomplete="off"></td>
								<td><input type="number"  name="price3"  class="form-control price" autocomplete="off"></td>
								<td><input type="number"  name="total3"  class="form-control total" autocomplete="off"></td>
								<td><button class="btn btn-danger delete"  type="button" id="hide2">- Delete</button><button class="btn btn-success" id="show2" type="button">+ Add More</button></td>
							
							</tr>	
								
								
							<tr id="p3"  style="display:none;" >
								<td><input class="itemRow" type="checkbox"></td>
								<td><input type="text"  name="productcode4"  class="form-control" autocomplete="off"></td>
								<td><input type="text" class="form-control" name="productname4"  autocomplete="off"></td>			
								<td><input type="number"  name="quantity4" class="form-control quantity" autocomplete="off"></td>
								<td><input type="number"  name="price4"  class="form-control price" autocomplete="off"></td>
								<td><input type="number"  name="total4"  class="form-control total" autocomplete="off"></td>
	                            <td><button class="btn btn-danger delete"  type="button" id="hide3">- Delete</button><button class="btn btn-success" id="show3" type="button">+ Add More</button></td>
							
							</tr>
							
								<tr id="p4"  style="display:none;">
								<td><input class="itemRow" type="checkbox"></td>
								<td><input type="text"  name="productcode5"  class="form-control" autocomplete="off"></td>
								<td><input type="text" class="form-control" name="productname5"  autocomplete="off"></td>			
								<td><input type="number"  name="quantity5" class="form-control quantity" autocomplete="off"></td>
								<td><input type="number"  name="price5"  class="form-control price" autocomplete="off"></td>
								<td><input type="number"  name="total5"  class="form-control total" autocomplete="off"></td>
                                <td><button class="btn btn-danger delete"  type="button" id="hide4">- Delete</button><button class="btn btn-success" id="show4" type="button">+ Add More</button></td>
							
							</tr>
							
							<tr id="p5"  style="display:none;">
								<td><input class="itemRow" type="checkbox"></td>
								<td><input type="text"  name="productcode6"  class="form-control" autocomplete="off"></td>
								<td><input type="text" class="form-control" name="productname6"  autocomplete="off"></td>			
								<td><input type="number"  name="quantity6" class="form-control quantity" autocomplete="off"></td>
								<td><input type="number"  name="price6"  class="form-control price" autocomplete="off"></td>
								<td><input type="number"  name="total6"  class="form-control total" autocomplete="off"></td>
                                	<td><button class="btn btn-danger delete"  type="button" id="hide5">- Delete</button><button class="btn btn-success" id="show5" type="button">+ Add More</button></td>
							
							</tr>
							
								<tr id="p6"  style="display:none;">
								<td><input class="itemRow" type="checkbox"></td>
								<td><input type="text"  name="productcode7"  class="form-control" autocomplete="off"></td>
								<td><input type="text" class="form-control" name="productname7"  autocomplete="off"></td>			
								<td><input type="number"  name="quantity7" class="form-control quantity" autocomplete="off"></td>
								<td><input type="number"  name="price7"  class="form-control price" autocomplete="off"></td>
								<td><input type="number"  name="total7"  class="form-control total" autocomplete="off"></td>
                                	<td><button class="btn btn-danger delete"  type="button" id="hide6">- Delete</button><button class="btn btn-success" id="show6" type="button">+ Add More</button></td>
							
							</tr>
							
								<tr id="p7"  style="display:none;">
								<td><input class="itemRow" type="checkbox"></td>
								<td><input type="text"  name="productcode8"  class="form-control" autocomplete="off"></td>
								<td><input type="text" class="form-control" name="productname8"  autocomplete="off"></td>			
								<td><input type="number"  name="quantity8" class="form-control quantity" autocomplete="off"></td>
								<td><input type="number"  name="price8"  class="form-control price" autocomplete="off"></td>
								<td><input type="number"  name="total8"  class="form-control total" autocomplete="off"></td>
									<td><button class="btn btn-danger delete"  type="button" id="hide7">- Delete</button><button class="btn btn-success" id="show7" type="button">+ Add More</button></td>
							
							</tr>
								<tr id="p8"  style="display:none;">
								<td><input class="itemRow" type="checkbox"></td>
								<td><input type="text"  name="productcode9"  class="form-control" autocomplete="off"></td>
								<td><input type="text" class="form-control" name="productname9"  autocomplete="off"></td>			
								<td><input type="number"  name="quantity9" class="form-control quantity" autocomplete="off"></td>
								<td><input type="number"  name="price9"  class="form-control price" autocomplete="off"></td>
								<td><input type="number"  name="total9"  class="form-control total" autocomplete="off"></td>
								 <td><button class="btn btn-danger delete"  type="button" id="hide8">- Delete</button><button class="btn btn-success" id="show8" type="button">+ Add More</button></td>
							
							</tr>
								
									
						</table>
		      		</div>
		      	</div>
		      	

            <div class="row">	
		      		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
		      			<h3>Notes: </h3>
		      			<div class="form-group">
							<textarea class="form-control txt" rows="5" name="notes" placeholder="Your Notes"></textarea>
						</div>
						<br>
					
						
		      		</div>
		      		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<span class="form-inline">
							
													
							<div class="form-group">
								<label>Total: &nbsp;</label>
								<div class="input-group">
									<input value="<?php echo $invoiceValues['order_total_after_tax']; ?>" type="number" class="form-control" name="totalAftertax" id="totalAftertax" placeholder="Total">
								</div>
							</div>
							<br>
							<br>
							<div class="form-group">
								<label>Amount Paid: &nbsp;</label>
								<div class="input-group">
									<input value="<?php echo $invoiceValues['order_amount_paid']; ?>" type="number" class="form-control" name="amountPaid" id="amountPaid" placeholder="Amount Paid">
								</div>
							</div>
							<br>
							<br>
							<div class="form-group">
								<label>Amount Due: &nbsp;</label>
								<div class="input-group">
									<input value="<?php echo $invoiceValues['order_total_amount_due']; ?>" type="number" class="form-control" name="amountDue" id="amountDue" placeholder="Amount Due">
								</div>
							</div>
							<br>
							<br>
						</span>
					</div>
		      	</div>


        
        <div class="form-group">
            <input type="hidden" name="status" value="Preparing" class="form-control">
        </div>
            
  

         <input type="submit"class="btn btn-primary" name="Submit" value="Add Product">
    </div>
 
    </form>
      
      
  </div>
  
  
  
  <?php include 'includes/footer.php';?>

