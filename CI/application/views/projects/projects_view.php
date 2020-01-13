	<h3 class="text-center">Projects</h3>
<div id="scrolltable" class="container text-center">

	

			<div class="container">

	
		 <table class="table table-hover table-condensed">
            <thead>
              <tr>
            
                <th class="text-center">Name</th>
                <th class="text-center">Body</th>
								<th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              
            <?php  foreach($projects as $project): ?>
              
              <tr>
								<td><?php echo $project->project_name;?></td></a>
                 <td><?php echo $project->project_body;?>
								 <td>
                 	<div class="actions_link">
  													<a href="<?php echo base_url();?>index.php/projects/delete/<?php echo $project->id;?>">Delete</a>
  													<a href="<?php echo base_url();?>index.php/projects/edit/<?php echo $project->id;?>">Edit</a>
                            <a href="<?php echo base_url();?>index.php/projects/display/<?php echo $project->id;?>">View</a>
									 </div>
                   </td>
              </tr>
            <?php endforeach; ?>
			 						
			 </tbody>
</div>