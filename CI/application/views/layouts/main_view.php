<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <Title>Document</Title>
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/stylesheet.css">
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
     <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    
  </head>
  
  
  <body>
    <!-- NAVBAR -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="<?php echo base_url();?>index.php/Home">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo base_url();?>index.php/Users/register">Register</a></li>
        <li><a href="<?php echo base_url();?>index.php/Product">Products</a></li>
         <li><a href="<?php echo base_url();?>index.php/Projects">Projects</a></li>
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Users</a><br>
          <a class="dropdown-item" href="#">Products</a>
        </div>
      </li>
       
      </ul>
      <form class="navbar-form navbar-left" role="search" action="<?php echo base_url()?>index.php/Search/search_user" method="post">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" name = "search">
        </div>
        <button type="submit" class="btn btn-default" name="submit">Submit</button>
      </form>
      
      
      <ul class="navbar-form navbar-nav navbar-right">
      <li class="nav navbar-nav"> 

<?php if($this->session->userdata('logged_in')): ?>

<?php echo form_open('/index.php/users/logout'); ?>

<?php $data = array('class'=> 'btn btn-default', 'name'=>'submit', 'value'=>'Logout'); ?>
</li>
      
   
     <li class="nav navbar-nav">
<?php echo "Hello, " . $this->session->userdata('user_name'); ?>

<?php echo form_submit($data)?>

<?php echo form_close();?>

<?php endif; ?>
</li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <!-- END NAVBAR -->
    
    <div class="container">
      
      <div class="col-xs-3">
  <?php if($this->session->flashdata('no_access')): ?>
  
  <p class="bg bg-danger">
   <?php echo $this->session->flashdata('no_access');?>
  </p>
  
  <?php endif; ?>
        
        <?php $this->load->view('users/login_view'); ?>
    
      </div>
      
      <div class="col-xs-9">
<?php
        
     $this->load->view($main_view);
 
        
        ?>
        
      </div>
      
    </div>
    
    
    
    
  </body>
  
  
  
  
</html>