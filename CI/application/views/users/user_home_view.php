<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <Title>Document</Title>
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
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
        <li class=""><a href="<?php echo base_url();?>/index.php/Home">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo base_url();?>/index.php/Users/register">Register</a></li>
       
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
   
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <!-- END NAVBAR -->
    
    <div class="container">
      
      <div class="col-xs-3">
        
        
      
      </div>
      
      <div class="col-xs-9">

        <?php $this->load->view('users/user_home_view');?>
        
      </div>
      
    </div>
    
    
    
    
  </body>
  
  
  
  
</html>