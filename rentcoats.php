<?php include 'includes/header.php';?>

<?php


//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM coats ORDER BY id DESC");


?>

<?php if(!empty($statusMsg)){ ?>
        <div class="col-xs-12">
            <div class="alert <?php echo $statusType; ?>"><?php echo $statusMsg; ?></div>
        </div>
    <?php } ?>

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
<script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>
<script>
  $(document).ready( function () {
  var table = $('#example').DataTable();
  
      $('.dataTables_filter input')
       .off()
       .on('keyup', function() {
          $('#example1').DataTable().column(0).search(this.value.trim(), false, false).draw();
       });    

  

} );
  </script>
    <div class="container">
      <br><br>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">View Product</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dt-buttons btn-group flex-wrap">
            <button onclick="window.location.href='rentproduct.php';" class="btn btn-primary">Add Product</button>
            <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Processing</span></button>
            <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Completed</span></button>
            <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>To Recieve</span></button>
          </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div id="example1_filter" class="dataTables_filter">
            <label>Search:<input type="search" class="" placeholder="" aria-controls="example"></label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <table id="example1" class="table table-bordered table-striped dataTable dtr-inline display nowrap" aria-describedby="example1_info">
            <thead>
              <tr>
                <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">ID No</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Product</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">SKU</th>`
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Status</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Category</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Sub Category</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Price</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr class="odd">
                <?php
                  // Include the qrlib file
                  include 'phpqrcode/qrlib.php';
      	            while($res = mysqli_fetch_array($result)) {		
      		            echo "<tr class='odd'>";
                      echo   "<input type='checkbox' class='custom-control-input'>";
        		          echo "<td>".$res['id']."</td>";
        		          echo "<td>".$res['idno']."</td>";
        		          echo "<td>".$res['productname']."</td>";	
        		          echo "<td>".$res['code']."</td>";	
                      echo "<td>".$res['status']."</td>";	
                      echo "<td>".$res['category']."</td>";
                      echo "<td>".$res['subcategory']."</td>";
                      echo "<td>".$res['price']."</td>";
                      echo "<td><a class='btn btn-primary' href=\"rentedit.php?id=$res[id]\">Edit</a><a class='btn btn-danger' href=\"productdel.php?del=$res[id]\">Delete</a> <a class='btn btn-primary' href=\"qrcode.php?id=$res[id]\">View QR</a><a class='btn btn-primary' href=\"pstatus.php?id=$res[id]\">Status</a> </td>";	
                    }
                ?>
              </tr>
            </tbody>    
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-5">
        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
      </div>
      <div class="col-sm-12 col-md-7 ">
        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
          <ul class="pagination py-3">
            <li class="paginate_button page-item p-0 previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
            <li class="paginate_button page-item p-0 active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
            <li class="paginate_button page-item p-0 "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
            <li class="paginate_button page-item p-0 "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
            <li class="paginate_button page-item p-0 "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
            <li class="paginate_button page-item p-0 "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
            <li class="paginate_button page-item p-0 "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
            <li class="paginate_button page-item p-0 next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  </div>
    <!-- /.card-body -->
  </div>

</div>





 

   

  <?php include 'includes/footer.php';?>



