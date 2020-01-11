
<?php
include 'transaction1.php';
 include 'db.connect.php'; ?>


<br>
 <!--Dashboard Main body-->
  <label class="btn btn-danger btn-sm float-right mt-2 mr-2" type="date"> <input type="text" name="" value=" <?php echo  date("d/m/Y");?>"> </label>
  
<br><br>
<div class="container-fluid">
  <div class="card-deck mt-3 text-white">
      <div class="card text-center shadow-sm">
        <div class="card-body bg-primary">
          <h5 class="card-title float-left display-4"><i class="fas fa-coins"></i></h5>   
          <?php 
include 'db.connect.php';
            
   $result = mysqli_query($conn,"select count(room_ID) from room_type_tbl");
  $resultCheck = mysqli_num_rows($result);
  if($resultCheck>0){
  while($row=mysqli_fetch_assoc($result)){
  

    $countroom =  $row["count(room_ID)"] ;
  }
}
 $result = mysqli_query($conn,"select count(feat_ID) from room_feat_tbl");
  $resultCheck = mysqli_num_rows($result);
  if($resultCheck>0){
  while($row=mysqli_fetch_assoc($result)){
  

    $countfeat =  $row["count(feat_ID)"] ;
  }
}
 $result = mysqli_query($conn,"select count(EC_tax_ID) from ec_tax_tbl");
  $resultCheck = mysqli_num_rows($result);
  if($resultCheck>0){
  while($row=mysqli_fetch_assoc($result)){
  

    $countroomtax =  $row["count(EC_tax_ID)"] ;
  }
}
           ?>
          <p class="card-text"><b>Total Rooms</b></p>
          <h3 class="card-text"><?php echo $countroom ; ?></h3>
        </div>
        <div class="card-footer-sm bg-light">
          <a href="" class="">More info <i class="far fa-arrow-alt-circle-right"></i></a>
        </div>
      </div>
      <div class="card text-center shadow-sm">
        <div class="card-body bg-success">
          <h5 class="card-title float-left display-4"><i class="fas fa-money-check"></i></h5>   
          <p class="card-text"><b>Room Ameneties</b></p>
          <h3 class="card-text"><?php echo $countfeat; ?></h3>
        </div>
        <div class="card-footer-sm bg-light">
          <a href="" class="">More info <i class="far fa-arrow-alt-circle-right"></i></a>
        </div>
      </div><div class="card text-center shadow-sm">
        <div class="card-body bg-danger">
          <h5 class="card-title float-left display-4"><i class="fas fa-user-circle"></i></h5>   
          <p class="card-text"><b>Extra Charge Tax</b></p>
          <h3 class="card-text"><?php  echo $countroomtax; ?></h3>
        </div>
        <div class="card-footer-sm bg-light">
          <a href="" class="">More info <i class="far fa-arrow-alt-circle-right"></i></a>
        </div>
      </div>
      <div class="card text-center shadow-sm">
        <div class="card-body bg-warning">
          <h5 class="card-title float-left display-4"><i class="fas fa-coins"></i></h5>   
          <p class="card-text"><b>Seasonal Status</b></p>
          <h3 class="card-text">15</h3>
        </div>
        <div class="card-footer-sm bg-light">
          <a href="" class="">More info <i class="far fa-arrow-alt-circle-right"></i></a>
        </div>
      </div>    
   </div>

     <br><br>
       
<div class="container-fluid bg-white p-60 mt-40 shadow-sm mb-30 " >
  <div class="row" >
    <div class="col-sm-10  mx-auto">
     <canvas id="myChart" width="" height=""></canvas>
<?php 
$data1='';

 $result = mysqli_query($conn,"select room_type from room_type_tbl");
  $resultCheck = mysqli_num_rows($result);
  if($resultCheck>0){
  while($row=mysqli_fetch_assoc($result)){
 
 }

}?>
<script>
  
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',

     width:320,
    data: {
      dataPointMaxWidth: 30,
        labels: [   <?php 

       $result = mysqli_query($conn,"select distinct a from test");
        while($data = mysqli_fetch_assoc($result)){
        echo "['".$type=$data['a']."',".''."],";

         }?>
         ],
        datasets: [{

            label: 'Room Rate Analytics',
            data: [ <?php 

       $result = mysqli_query($conn,"SELECT SUM(b) from test where a='deluxe'");
        while($data = mysqli_fetch_assoc($result)){
      echo "['".$data['SUM(b)']."',".''."],";

         }?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                    'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                    'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                    'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
<?php 
 
 
?>
</div>

<!--
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Opening Move', 'Room Type'],
        <?php 

       $result = mysqli_query($conn,"select * from test");
        while($data = mysqli_fetch_assoc($result)){
 echo "['".$data['a']."',".$data['b']."],";

         }?>
        ]);

        var options = {
          title: 'Chess opening moves',
          width: 900,
          legend: { position: 'none' },
          chart: { title: 'Chess opening moves',
                   subtitle: 'popularity by percentage' },
          bars: 'vertical', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'buttom', label: 'Analytics'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
  </head>
  <body>
    <div id="top_x_div" style="width: 900px; height: 500px;"></div>
 -->