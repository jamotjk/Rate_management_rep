
<!---follow the includes position--->

<?php
	include'header.php';
	include'sidebar.php';
?>

	<!--sidenavigation-->

	<nav id="mySidenav" class="sidenav">
		<!-- you can change this depends on you--->
			  <button type="button" class="attriv btn btn-primary mt-2 ml-2" data-toggle="modal" data-target="#exampleModal" data-toggle="tooltip" data-placement="top" title="Account Settings"><i class="fas fa-user-cog"></i></button>
			  <button type="button" class="attriv btn btn-primary mt-2" data-toggle="modal" data-target="#exampleModal1" data-toggle="tooltip" data-placement="top" title="Add Event"><i class="fas fa-plus"></i></button>
			  <button type="button" class="attriv btn btn-primary mt-2" data-toggle="modal" data-target="#exampleModal2" data-toggle="tooltip" data-placement="top" title="Help"><i class="fas fa-question-circle"></i></button>
			  <button type="button" class="attriv btn btn-primary mt-2" data-toggle="modal" data-target="#exampleModal3" data-toggle="tooltip" data-placement="top" title="Settings"><i class="fas fa-sliders-h"></i></button>
	      <hr>
 <style>
	      	
	      	.sidelink{
	      		width:12pc ;
	      		font-size: 15pc;
	      	}
      .sidelink:active{
      background-color: #003366;
          }
	    
.dropbtn {
    background-color:#f1f1f1;;
   height: 	33px;
   width:12pc;
    font-size: 15px;
    border: none;
    cursor: pointer;

}
.dropbtn:hover{
	background-color: #003366;

}


.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 190px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,1.5);
      margin-left:2pc;
}

.dropdown-content a {
    color: black;
    padding: 10px 16px 30px 10px;
    text-decoration: none;
    display: block;
    font-size: 	15px;
    height: 	35px;
}

.dropdown-content a:hover {background-color:;
color: #f1f1f1;}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    
color: #f1f1f1;
}
</style>
<a  class = "sidelink" href=""><i class="fa fa-home"></i> Home</a><br>
<a  class = "sidelink" href="dashboardrate.php"><i class="fas fa-chart-line"></i> Dashboard</a>
<div class="dropdown">
<a class="dropbtn" style="color:#003366;"><i class="fa fa-plus"></i> Add Categories</a>
<div class="dropdown-content">
<a class = "sidelink"  href="add_roomtype.php">> Room type</a>
<a class = "sidelink"  href="add_room_features.php">> Room features</a>
<a class = "sidelink"  href="add_roomtax.php">> Room tax</a>
<a class = "sidelink"  href="add_extracharge_tax.php">> Extra charge tax</a>
<a class = "sidelink"  href="add_seasonal_rate.php">> Seasonal rate</a>



  </div>
</div>
	  <a class = "sidelink"  href="standard_rate.php"><i class="fa fa-list-alt"></i> Standard room rate</a>		
      <br><br><hr>


	      <!-- Change this depends on your module--->
</nav>

	<div id="main">

		<!--head navigation--->

	  <?php
			include'topnavigation.php';
		?>


	  <!-- insert your transaction here--->
	  
    <div class="container-fluid">
    	<div class="tab-content" id="v-pills-tabContent">
    		<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
	      	<!---First transaction here-->
	      </div>
	      <div class="tab-pane fade show" id="v-pills-dash" role="tabpanel" aria-labelledby="v-pills-dash-tab">
	      	<!---First transaction here-->
	      	<div class="container-fluid mt-3">
			   <div class="row">
			   	<div class="col-12 bg-white rounded shadow-sm ml-2">
			   		<h4 class="text-secondary">Dashboard <i class="fas fa-chart-line"></i></h4>
			   	</div>
			   </div>
			 </div>
	      </div>
	      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
	      	<div class="container-fluid mt-3">
			   <div class="row">
			   	<div class="col-12 bg-white rounded shadow-sm ml-2">
			   		<h4 class="text-secondary">Budget Allocation</h4>
			   	</div>
			   </div>
			 </div>
	      	<!---Second transaction here-->
	      </div>
	      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
	      	<div class="container-fluid mt-3">
			   <div class="row">
			   	<div class="col-12 bg-white rounded shadow-sm ml-2">
			   		<h4 class="text-secondary">Budget Request </h4>
			   	</div>
			   </div>
			 </div>
	      	<!---third transaction here-->
	      </div>
	      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
	      	<div class="container-fluid mt-3">
			   <div class="row">
			   	<div class="col-12 bg-white rounded shadow-sm ml-2">
			   		<h4 class="text-secondary">Budget Report </h4>
			   	</div>
			   </div>
			 </div>
	      	<!---fourth transaction here-->
	      </div>
	    </div>
    </div>



<?php
	include'modal.php';
?>