<?php
include 'transaction1.php';
 include 'db.connect.php'; 
 include 'tooltip.php'?>

<style>
	.tdd{
		border:5px solid transparent;
		
	}.thh{
		background-color:#006699;
		color:white;
		height: 2.5pc;
	
	
	}td,th{
	font-size: 14px;
	}
</style>


<form method="POST" action="">
	<div border="2">

	<table width="95%" class="mt-4 ml-4">
		<tr>
			<td class="tdd">
	<label class="mx-2">Room no</label>
	<select class="form-control"><option>
		
	</option></select>
			</td>
	<td  class="tdd">
	<label class="mx-2">Package:</label>
	<select class="form-control"><option>
		
	</option></select>
			</td>	
				<td class="tdd">
	<label class="mx-2">Feature amount:</label>
	<input  type="text" name="feat_amount" class="form-control ml-2">
			</td>	
	<td>
	<input  style="margin-top: 2pc;width:6pc;margin-left:2pc; " type="submit" name="submit" class="btn btn-success" value="Add">
			</td>
	</table>
	<hr>

	<table class="ml-4">
			</tr>
			<tr>
			<td class="tdd">
	<label class="mx-2">Search:</label>
	<input type="text" name="feat_search" class="form-control ml-2 text-success"  data-toggle="tooltip" data-placement="left" title="Room no. here! ">
			</td>		
				<td class="tdd">

		<input value="Search"  style="margin-top: 1.8pc;width:6pc;margin-left:2pc; " type="submit" name="search_feat" class="btn btn-primary"  data-toggle="tooltip" data-placement="top" title="Enter Room no. before Clicking the Search button!">
			</td>	
				<td class="tdd">
		<input value="View records"  style="margin-top: 1.8pc;width:7pc;margin-left:1pc; " type="submit" name="view_records" class="btn btn-info">
			</td>	
		</tr>