<div class="container text-center">
  <div class="col-md-6">
    
  
  
<h2>

  Add Project
</h2>

<?php if($this->session->flashdata('message')): ?>

<p class="bg bg-success">
  <?php echo $this->session->flashdata('message');?>
</p>
<?php endif; ?>
  
<!--set form attributes-->
<?php $attributes = array('id'=>'addproject_form', 'class'=> 'form_horizontal', 'method' => 'POST');?>

<!--show errors-->

<p class="bg bg-warning">
<?php echo validation_errors("<p class='bg bg-danger'>");?>
</p>

<!-- Form Start-->

<?php echo form_open('index.php/projects/add_project', $attributes);?>
<!-- Fist name Form -->

<div class="form-group">
  <?php echo form_label('Project Name');?>

  <?php $data = array(
    'class'=>'form-control',
    'name'=>'project_name',
    'placeholder'=>'Project Name'      
  );?>

  <?php echo form_input($data);?>
</div>
<!-- Last Name Form-->

<div class="form-group">

  <?php echo form_label('Body');?>

  <?php $data = array(
 
    'rows' => '10',
    'class'=>'form-control',
    'name'=>'project_body',
    'placeholder'=>'Body'      
  );?>
  <?php echo form_textarea($data);?>


    </div>



<div class="form-group">


  <?php $data = array(
  
  
  'class'=>'btn btn-primary pull-right',
  'name'=>'submit',
  'value'=>'Submit'
      
  );?>

  <?php echo form_submit($data);?>

</div>

<!-- Form End-->
<?php echo form_close();?>
  </div>
</div>
