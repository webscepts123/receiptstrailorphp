<?php include 'includes/header.php';?>


<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM rentorders ORDER BY id DESC");
?>


<style>
    
    
    #myInput {
  font-size: 16px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
}
</style>
<h2 class=" container head3">View Orders</h2>
<br>

<div class="container">
    <button onclick="window.location.href='addorderr.php';" class="btn btn-success">Add Order</button>

<div class="flex">
    <label>From</label>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search..">
    <label>To</label>
    <input type="text" placeholder="Search..">
   
    <button class="btn btn-primary">Go</button>
</div>
</div>
<br>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Receipt No</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Amount</th>
      <th scope="col">Advance Amount</th>
      <th scope="col">Status</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Action</th>
      

    </tr>
  </thead>
  <tbody id="myUL">
  <?php
	while($res = mysqli_fetch_array($result)) {		
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['customername']."</td>";
    echo "<td>".$res['amount']."</td>";
    echo "<td>".$res['advanceamt']."</td>";
    echo "<td>".$res['status']."</td>";
    echo "<td>".$res['paymethod']."</td>";
    echo "  <td><a class='btn btn-primary' href=\"rentinvoice.php?id=$res[id]\">View Invoice</a>  </td><td><a class='btn btn-primary' href=\"terminalprint.php?id=$res[id]\">View termal Invoice</a>  </td><td><a class='btn btn-primary' href=\"rentqrcodeorder.php?id=$res[id]\">View QR Code</a>  </td><td><a class='btn btn-primary' href=\"actions.php?id=$res[id]\">View Action</a>  </td><td><a class='btn btn-primary' href=\"paymethod.php?id=$res[id]\">Payment Method</a>  </td> ";
	
	
	}
  ?>
 
  </tbody>
</table>
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
