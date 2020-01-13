<div class="container text-center">
  <div class="col-md-6">
    
  
  

<h2>
  Add Product
</h2>

<?php if($this->session->flashdata('message')): ?>

<p class="bg bg-success">
  <?php echo $this->session->flashdata('message');?>
</p>
<?php endif; ?>
<!--set login attributes-->
<?php $attributes = array('id'=>'addproduct_form', 'class'=> 'form_horizontal', 'method' => 'POST');?>

<!--show errors-->

<p class="bg bg-warning">
<?php echo validation_errors("<p class='bg bg-danger'>");?>
</p>

<!-- Form Start-->

<?php echo form_open('index.php/product/add_product', $attributes);?>
<!-- Fist name Form -->

<div class="form-group">
  <?php echo form_label('Product Name');?>

  <?php $data = array(
    'class'=>'form-control',
    'name'=>'name',
    'placeholder'=>'Product Name'      
  );?>

  <?php echo form_input($data);?>
</div>
<!-- Last Name Form-->

<div class="form-group">
  <?php echo form_label('Cost');?>

  <?php $data = array(
    'type' => 'integer',
    'class'=>'form-control',
    'name'=>'cost',
    'placeholder'=>'Cost'      
  );?>

  <?php echo form_input($data);?>
</div>

<!-- Email Form-->
<div class="form-group">
  <?php echo form_label('Sale Price');?>

  <?php $data = array(
    'class'=>'form-control',
    'name'=>'sale_price',
    'placeholder'=>'Sale Price'      
  );?>

  <?php echo form_input($data);?>
</div>



<!-- Username Form -->

<div class="form-group">
  <?php echo form_label('Quantity');?>

  <?php $data = array(
    'type' => 'integer',
    'class'=>'form-control',
    'name'=>'sales_count',
    'placeholder'=>'Quantity'      
  );?>

  <?php echo form_input($data);?>
</div>


<!-- Submit -->


<div class="form-group">


  <?php $data = array(
  
  
  'class'=>'btn btn-primary',
  'name'=>'submit',
  'value'=>'Submit'
      
  );?>

  <?php echo form_submit($data);?>

</div>

<!-- Form End-->
<?php echo form_close();?>
  </div>
  </div>
