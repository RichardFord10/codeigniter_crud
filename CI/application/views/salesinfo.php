	<h3 class="text-center">Products</h3>
<div id="scrolltable" class="container text-center">

	

			<div class="container">

	
		 <table class="table table-hover table-condensed">
            <thead>
              <tr>
                <th class="text-center">Id</th>
                <th class="text-center">Name</th>
                <th class="text-center">Quantity</th>
                <th class="text-center">Cost</th>
                <th class="text-center">Sell Price</th>
								<th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              
            <?php  foreach($salesinfo as $sf) :?>
              
              <tr>
                 <td><?php echo $sf->id;?></td>
                 <td><?php echo $sf->name;?>
								 <td><?php echo $sf->sales_count;?></td>
								 <td><?php echo "$" . $sf->cost;?>
                 <td><?php echo "$" . $sf->sale_price;?></td>
								 <td>
                 	<div class="actions_link">
                            			<a href="<?php echo base_url();?>index.php/product/delete/<?php echo $sf->id;?>">Delete</a>
  													<a href="<?php echo base_url();?>index.php/product/edit/<?php echo $sf->id;?>">Edit</a>
                            <a href="<?php echo base_url();?>index.php/product/display/<?php echo $sf->id;?>">View</a>

									 </div>
                   </td>
              </tr>
            <?php endforeach ?>
			 						
			 </tbody>
</div>
		
		
		
		
		
	