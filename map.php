
<!---follow the includes position--->


<?php
	include'header.php';
	include'sidebar.php';
?>

	<!--sidenavigation-->

	<nav id="mySidenav" class="sidenav">

			<!-- you can change this depends on you--->

			  <button type="button" class="attriv btn  mt-2 ml-2" data-toggle="tooltip" data-placement="top" title="Account Settings" data-toggle="modal" data-target="#exampleModal" ><i class="fas fa-user-cog"></i></button>
			  <button type="button" class="attriv btn  mt-2" data-toggle="tooltip" data-placement="top" title="Add Events"><i class="fas fa-plus"></i></button>
			  <button type="button" class="attriv btn  mt-2" data-toggle="tooltip" data-placement="top" title="Help"><i class="fas fa-question-circle"></i></button>
			  <button type="button" class="attriv btn  mt-2" data-toggle="tooltip" data-placement="top" title="Settings"><i class="fas fa-sliders-h"></i></button>
	       <hr>

	       <!-- Change this depends on your module--->

	    <div class="sample nav flex-column nav-pills mt-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	      <a class="active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-map-marked-alt"></i> Map</a>
	      <a class="" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"></a>
	      <a class="" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"></a>
	      <a class="k" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"></a>
	    </div>
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

	      	<div class="container-fluid mt-3">
	      		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.7158608448053!2d121.03949961432163!3d14.72864977787565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b05657720dfb%3A0x7a7efa0f0a24a9be!2sBestlink+College+of+the+Philippines!5e0!3m2!1sen!2sph!4v1565357701312!5m2!1sen!2sph" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	      	</div>

	      </div>
	      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
	      	<h1>News Feed</h1>
	      	<!-- Second Transaction Here -->
	      </div>
	      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
	      	<h1>Event</h1>
	      	<!-- Third Transaction Here -->
	      </div>
	      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
	      	<h1>Profile</h1>
	      	<!-- 4th Transaction Here -->
	      </div>
	    </div>
      </div>
  </div>




</body>
</html>