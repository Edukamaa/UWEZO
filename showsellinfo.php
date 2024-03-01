<?php
  include_once "inc/header.php";
  include_once "inc/sidebar.php";
?>

<div class="card">
  <div class="card-header">
    Project Management
  </div>
  <div class="card-body">
    	<h5 class="card-title">Project sells and due loan manage</h5>
		<table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
	        <thead>
	            <tr>
	                <th>Name</th>
	                <th>Nid</th>
	                <th>Project name</th>
	                <th>Project Details</th>
	                <th>Total sales</th>
	                <th>Paid  loan dues</th>
	                <th>Profits</th>
	            </tr>
	        </thead>

	        <tbody>
	        	<?php 
	        		$all = $ml->viewLiabilityDetails();
	        		if ($all) {
	        			$i = 1;
	        			while ($row = $all->fetch_assoc()) {
	        				$i++;

	        	 ?>
	            <tr>
	                <td><?php echo $row['name']; ?></td>
	                <td><?php echo $row['nid']; ?></td>
	                <td><?php echo $row['property_name']; ?></td>
	                <td><?php echo $row['property_details']; ?></td>
	                <td><?php echo $row['price']; ?> Ksh</td>
	                <td><?php echo $row['pay_remaining_loan']; ?> Ksh</td>
	                <td><?php echo $row['return_money']; ?> Ksh</td>
	             
	            </tr>
				<?php 
	        			}
	        		}
				 ?>
	        </tbody>
	    </table>
	  </div>
	</div>

<?php
include_once "inc/footer.php";
?>