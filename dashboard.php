<?php include 'includes/header.php';?>


<?php 
include("connection.php");

$result = mysqli_query($mysqli, "SELECT * FROM orders WHERE order_due='1' ");
$rows = mysqli_num_rows($result);


?>

<?php 
include("connection.php");

$result = mysqli_query($mysqli, "SELECT * FROM rentorders  ");
$rowspp = mysqli_num_rows($result);


?>

<?php 
include("connection.php");

$results = mysqli_query($mysqli, "SELECT COUNT name FROM orders ");


$rowsb = mysqli_num_rows($result);


?>

<?php 
include("connection.php");

$results = mysqli_query($mysqli, "SELECT COUNT customername FROM rentcustomer");


$rowsbss = mysqli_num_rows($result);


?>

<?php
include("connection.php");
 if (!$mysqli) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
         $sql ="SELECT * FROM orders";
         $result = mysqli_query($mysqli,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $productname[]  = $row['paid_amount']  ;
            $sales[] = $row['TotalSales'];
        }
 
 
 }
 
 
?>


<style>
    .order-card {
    color: #fff;
}

.bg-c-blue {
    background: linear-gradient(45deg,#4099ff,#73b4ff);
}

.bg-c-green {
    background: linear-gradient(45deg,#2ed8b6,#59e0c5);
}

.bg-c-yellow {
    background: linear-gradient(45deg,#FFB64D,#ffcb80);
}

.bg-c-pink {
    background: linear-gradient(45deg,#FF5370,#ff869a);
}


.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.card .card-block {
    padding: 25px;
}

.order-card i {
    font-size: 26px;
}

.f-left {
    float: left;
}

.f-right {
    float: right;
}
</style>

 <br>


<?php
$databaseHost = 'localhost';
$databaseName = 'receiptstailor_demo';
$databaseUsername = 'receiptstailor_demo';
$databasePassword = 'xCV(MrQQRvS5';
$con  = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if(!$con){
echo "Problem in database connection..." .mysqli_error();
}else{
$sql = "SELECT * FROM rentorders";
$result = mysqli_query($con,$sql);
$chart_data = "";
while($row = mysqli_fetch_array($result)){
$productname[] = $row['date'];
$sales[] = $row['price'];
}
}
?>

 <div class="container" >
     <h2>Dashboard</h2>
 </div>
 
 <br>
 <br>
 <div class="container">
     
     <div class="grey-bg container-fluid">
  <section id="minimal-statistics">
    <div class="row">
     
    <div class="row">
      <div class="col-xl-4 col-sm-6 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="icon-pencil primary font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                  <h3><?php echo "$rowspp"; ?></h3>
                  <span>Orders Received</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="icon-speech warning font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                  <h3><?php echo "$rows"; ?></h3>
                  <span>Due Orders</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="icon-speech warning font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                  <h3><?php echo "$rowsbss"; ?></h3>
                  <span>Customers</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      

     
 </div>
 <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
      <div class="card-header bg">
      </div>
          <div class="card-body">
          <canvas id="chartjs_bar"></canvas>
          </div>
      </div>
    </div>
  </div>
	
	<div class="container">
  <div class="row">
    <div class="col">
      <img src="assets/img/image12.jpeg" style="
    width: 622px;
">
    </div>
    <div class="col">
   
    </div>
  </div>
  
  <script src="assets/js/jquery.min.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>    <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
      var myChart = new Chart(ctx,{
          type: 'bar',
          data: {
            labels:<?php echo json_encode($productname); ?>,
            datasets: [{
                backgroundcolor: [
                    "#ffd322",
                    "#5945fd",
                    "#25d5f2",
                    "#2ec551",
                    "#ff344e",
                ],
                data: <?php echo json_encode($sales);?>
            }]
          },
          options:{
              legend: {
                  display:true,
                  position:'bottom',
                  labels: {
                      fontColor: '#71748d',
                      fontFamily: 'Circular Std Book',
                      fontSize: 14,
                  }
              },
          }
      });
    </script>
  
 
<?php include 'includes/footer.php';?>
