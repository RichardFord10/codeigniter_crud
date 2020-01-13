<div class="container text-align center">
  <div class="col-md-6">
    
  
  
<h2>
  Edit Project
</h2>

<?php if($this->session->flashdata('message')): ?>

<p class="bg bg-success">
  <?php echo $this->session->flashdata('message');?>
</p>
<?php endif; ?>
  
<!--set form attributes-->
<?php $attributes = array('id'=>'edit_form', 'class'=> 'form_horizontal');?>

<!--show errors-->

<p class="bg bg-warning">
<?php echo validation_errors("<p class='bg bg-danger'>");?>
</p>

<!-- Form Start-->

<?php echo form_open('index.php/projects/edit/'. $project_data->id . '', $attributes);?>
<!-- Fist name Form -->

<div class="form-group">
  <?php echo form_label('Project Name');?>

  <?php $data = array(
    'class'=>'form-control',
    'name'=>'project_name',
    'value'=> $project_data->project_name      
  );?>

  <?php echo form_input($data);?>
</div>
<!-- Last Name Form-->

<div class="form-group">

  <?php echo form_label('Body');?>

  <?php $data = array(
 
    'class'=>'form-control',
    'name'=>'project_body',
    'value'=> $project_data->project_body       
  );?>
  <?php echo form_textarea($data);?>


    </div>



<div class="form-group">


  <?php $data = array(
  
  
  'class'=>'btn btn-primary pull-right',
  'name'=>'submit',
  'value'=>'Update'
      
  );?>

  <?php echo form_submit($data);?>

</div>

<!-- Form End-->
<?php echo form_close();?>
  </div>
</div>
