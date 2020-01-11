 

 <!--sidebar navigation-->


 <nav class="sidebar">
	  <a href="#about" data-toggle="tooltip" data-placement="top" title="Menu"><span class="buttonOpenCLosetext-white" style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776;</span></a>
	  <a href="index.php" class=" active" data-toggle="tooltip" data-placement="top" title="Dashboard"><i class="fas fa-chart-line"></i></a>
	  <a href="#clients" data-toggle="tooltip" data-placement="top" title="Collection"><i class="fas fa-coins"></i></a>
	  <a href="#contact" data-toggle="tooltip" data-placement="top" title="Accounts Payable and Receivable"><i class="fas fa-file-invoice"></i></a>
	  <a href="transaction1.php" data-toggle="tooltip" data-placement="top" title="Budget Management"><i class="fas fa-chart-pie"></i></a>
	  <a href="#contact" data-toggle="tooltip" data-placement="top" title="General Ledger"><i class="fas fa-balance-scale"></i></a>
	  <a href="#contact" data-toggle="tooltip" data-placement="top" title="Financial Report"><i class="fas fa-receipt"></i></a>
	  <a href="#contact" data-toggle="tooltip" data-placement="top" title="Audit Trail"><i class="fas fa-clipboard-check"></i></a>
	  <a href="map.php" data-toggle="tooltip" data-placement="top" title="Map"><i class="fas fa-map-marked-alt"></i></a>
</nav>

<script>
		var toggleStatus = 1;
		function openNav(){
			if (toggleStatus == 1) {
				document.getElementById("mySidenav").style.width = "0";
				document.getElementById("main").style.marginLeft = "50px";
				toggleStatus = 0;
			}else if(toggleStatus == 0){
				document.getElementById("mySidenav").style.width = "200px";
				document.getElementById("main").style.marginLeft = "250px";
				toggleStatus = 1;
			}
		}
 </script>