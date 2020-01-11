<!--Head Title-------->

<div class="container-fluid mt-3">
   <div class="row">
   	<div class="col-12 bg-white rounded shadow-sm ml-2">
   		<h4 class="text-secondary">Dashboard <i class="fas fa-chart-line"></i></h4>
   	</div>
   </div>
 </div>

 <!--Dashboard Main body-->
  <input class="btn btn-danger btn-sm float-right mt-2 mr-2" type="date">
<br><br>
<div class="container-fluid">
  <div class="card-deck mt-3 text-white">
      <div class="card text-center shadow-sm">
        <div class="card-body bg-primary">
          <h5 class="card-title float-left display-4"><i class="fas fa-coins"></i></h5>   
          <p class="card-text">Total Income</p>
          <h3 class="card-text">10000</h3>
        </div>
        <div class="card-footer-sm bg-light">
          <a href="" class="">More info <i class="far fa-arrow-alt-circle-right"></i></a>
        </div>
      </div>
      <div class="card text-center shadow-sm">
        <div class="card-body bg-success">
          <h5 class="card-title float-left display-4"><i class="fas fa-money-check"></i></h5>   
          <p class="card-text">Net Income</p>
          <h3 class="card-text">20000</h3>
        </div>
        <div class="card-footer-sm bg-light">
          <a href="" class="">More info <i class="far fa-arrow-alt-circle-right"></i></a>
        </div>
      </div><div class="card text-center shadow-sm">
        <div class="card-body bg-danger">
          <h5 class="card-title float-left display-4"><i class="fas fa-user-circle"></i></h5>   
          <p class="card-text">Total Employee</p>
          <h3 class="card-text">105</h3>
        </div>
        <div class="card-footer-sm bg-light">
          <a href="" class="">More info <i class="far fa-arrow-alt-circle-right"></i></a>
        </div>
      </div>
      <div class="card text-center shadow-sm">
        <div class="card-body bg-warning">
          <h5 class="card-title float-left display-4"><i class="fas fa-coins"></i></h5>   
          <p class="card-text">Yearly Income</p>
          <h3 class="card-text">30000</h3>
        </div>
        <div class="card-footer-sm bg-light">
          <a href="" class="">More info <i class="far fa-arrow-alt-circle-right"></i></a>
        </div>
      </div>    
   </div>
</div>

<div class="container-fluid bg-white p-2 mt-4 shadow-sm mb-5">
  <div class="row">
    <div class="col-sm-4">
      <canvas id="myChart" width="400" height="400"></canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday','Sunday'],
        datasets: [{
            label: 'Work days',
            data: [12, 19, 3, 5, 2, 3,5],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)'
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

    </div>
    <div class="col-sm-8">
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
    </div>
  </div>
</div>
