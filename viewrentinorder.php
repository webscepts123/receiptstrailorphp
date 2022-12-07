<?php include 'includes/header.php';?>


<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM  textprinter ORDER BY id DESC");
?>





<div class="container">
<br><br>
    <div class="card p-5">
        <h3>Rent Order</h3>  
        <br>
      	<form action="addtextu.php" method="post" name="form1">
      	    <div class="form-row">
 
     
                <div class="form-group col-md-6">
                    <label>Add Text</label>
                    <input type="text" name="addtext" class="form-control" placeholder="Name">
                </div>
            </div>
          
          
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="submit"class="btn btn-primary" name="Submit" value="Print">
                </div>
            </div>
        </form>
    </div>
<br><br>
</div>


<div class="container">
    <br><br>
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">View Order Invoice</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
          <div class="row">
            <div class="col-sm-12 col-md-9 d-flex align-items-end pb-2">
            
           </div>
          </div>
          <div class="col-sm-12 col-md-3">
            <div id="example1_filter" class="dataTables_filter">
              <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
              <thead>
                <tr>
                  <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Text</th>

                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Action</th>
                </tr>
              </thead>
              <tbody>  
                <?php
	                while($res = mysqli_fetch_array($result)) 
	                {		
		                echo "<tr class='odd'>";
		                echo "<td >".$res['id']."</td>";
		                echo "<td>".$res['addtext']."</td>";
                 
                    echo "<td><a class='btn btn-primary' href=\"invoiceprintp.php?id=$res[id]\">Invoice</a>  </td>";
	                } 
                ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-5 ">
            <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
          </div>
          <div class="col-sm-12 col-md-7 d-flex justify-content-end">
            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
              <ul class="pagination">
                <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                <li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
</div>


<script>
  function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
  }
</script>
  <?php include 'includes/footer.php';?>

