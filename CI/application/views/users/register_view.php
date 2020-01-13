<h2>
  Register
</h2>

<?php if($this->session->flashdata('message')): ?>

<p class="bg bg-success">
  <?php echo $this->session->flashdata('message');?>
</p>
<?php endif; ?>
<!--set login attributes-->
<?php $attributes = array('id'=>'register_form', 'class'=> 'form_horizontal');?>

<!--show errors-->

<p class="bg bg-warning">
<?php echo validation_errors("<p class='bg bg-danger'>");?>
</p>

<!-- Form Start-->

<?php echo form_open('index.php/Users/register', $attributes);?>
<!-- Fist name Form -->

<div class="form-group">
  <?php echo form_label('First Name');?>

  <?php $data = array(
    'class'=>'form-control',
    'name'=>'first_name',
    'placeholder'=>'First Name'      
  );?>

  <?php echo form_input($data);?>
</div>
<!-- Last Name Form-->

<div class="form-group">
  <?php echo form_label('Last Name');?>

  <?php $data = array(
    'class'=>'form-control',
    'name'=>'last_name',
    'placeholder'=>'Last Name'      
  );?>

  <?php echo form_input($data);?>
</div>

<!-- Email Form-->
<div class="form-group">
  <?php echo form_label('Email');?>

  <?php $data = array(
    'class'=>'form-control',
    'name'=>'email',
    'placeholder'=>'Email Address'      
  );?>

  <?php echo form_input($data);?>
</div>



<!-- Username Form -->

<div class="form-group">
  <?php echo form_label('Username');?>

  <?php $data = array(
    'class'=>'form-control',
    'name'=>'username',
    'placeholder'=>'Enter Username'      
  );?>

  <?php echo form_input($data);?>
</div>

<!-- Password Form -->


<div class="form-group">

  <?php echo form_label('Password');?>

  <?php $pass_data = array(
  
  
  'class'=>'form-control',
  'name'=>'password',
  'placeholder'=>'Enter Password'
      
  );?>

  <?php echo form_password($pass_data);?>

</div>

<!-- Confirm Password Form -->

<div class="form-group">

  <?php echo form_label('Confirm Password');?>

  <?php $confirm_pass_data = array(
  
  
  'class'=>'form-control',
  'name'=>'confirm_password',
  'placeholder'=>'Confrim Password'
      
  );?>

  <?php echo form_password($confirm_pass_data);?>

</div>

<!-- Submit -->


<div class="form-group">


  <?php $data = array(
  
  
  'class'=>'btn btn-primary',
  'name'=>'submit',
  'value'=>'Login'
      
  );?>

  <?php echo form_submit($data);?>

</div>

<!-- Form End-->
<?php echo form_close();?>
