<div class="col-xs-9">
  

<h1>
 Project Name: <?php echo $project_data->project_name;?>
</h1>
  
<p>
 Creation Date: <?php echo $project_data->date_created;?>
</p>
<h3>
  Description: 
  </h3>
  
  <p>
    <?php echo $project_data->project_body;?>
  </p>
  </div>

<div class="col-xs-3 pull-right">
  

<ul class="list-group">
  <h4>
    Project Actions
  </h4>
  <li class="list-group-item"><a href="<?php echo base_url();?>tasks/create">Create Task</a></li>
  <li class="list-group-item"><a href="<?php echo base_url();?>index.php/projects/edit/<?php echo $project_data->id;?>">Edit Project</a></li>
  <li class="list-group-item"><a href="">Delete Project</a></li>
</ul>
  </div>