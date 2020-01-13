<?php if($this->session->flashdata('log_error')): ?>

<?php echo $this->session->flashdata('log_error');?>
<?php endif; ?>

<p class="bg-danger">
  <?php if($this->session->flashdata('logged_out')): ?>
  
  <?php echo $this->session->flashdata('logged_out');?>

  <?php endif; ?>
</p>


<?php if(!$this->session->userdata('logged_in')): ?>


<h3>
  Login Form
</h3>
<!--set login attributes-->
<?php $attributes = array('id'=>'login_form', 'class'=> 'form_horizontal');?>

<!--show errors-->



<!-- Form Start-->

<?php echo form_open('index.php/Users/login', $attributes);?>

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
<?php endif; ?>