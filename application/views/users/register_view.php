<h1>Register</h1>

<?php  
    $attributes = array('id' => 'register_form', 'class' => 'form_horizontal');
 ?>

<?php echo validation_errors("<p class='text-danger'>");?> <!-- ECHO ERRORS -->

<?php 
    echo form_open('Login_controller/register', $attributes);
 ?>
<form>
<div class="form-group mt-4"> <!--THIS IS FIRST_NAME INPUT VALUE-->

<?php  
    echo form_label('Firstname'); 
 ?>
<?php  //to insert input type
    $data = array(

        'class' => 'form-control',
        'name' => 'first_name',
        'placeholder' => 'Enter Firstname'
        
    );
 ?>
 <?php  
   echo form_input($data);
  ?>

</div>
<div class="form-group mt-4"> <!--THIS IS LAST_NAME INPUT VALUE-->

<?php  
    echo form_label('Lastname'); 
 ?>
<?php  //to insert input type
    $data = array(

        'class' => 'form-control',
        'name' => 'last_name',
        'placeholder' => 'Enter Lastname'
        
    );
 ?>
 <?php  
   echo form_input($data);
  ?>

</div>
<div class="form-group mt-4"> <!--THIS IS EMAIL INPUT VALUE-->

<?php  
    echo form_label('Email'); 
 ?>
<?php  //to insert input type
    $data = array(

        'class' => 'form-control',
        'name' => 'email',
        'placeholder' => 'Enter your email'
        
    );
 ?>
 <?php  
   echo form_input($data);
  ?>

</div>

<div class="form-group mt-4"> <!--THIS IS USERNAME INPUT VALUE-->

    <?php  
        echo form_label('Username'); 
     ?>
    <?php  //to insert input type
        $data = array(

            'class' => 'form-control',
            'name' => 'username',
            'placeholder' => 'Enter Username'
            
        );
     ?>
     <?php  
       echo form_input($data);
      ?>

</div>
<div class="form-group mt-4"> <!--THIS IS PASSWORD INPUT VALUE-->

    <?php  
        echo form_label('Password');
     ?>
    <?php  //to insert input type
        $data = array(

            'class' => 'form-control',
            'name' => 'password',
            'placeholder' => 'Enter Password'
            
        );
     ?>
     <?php  
       echo form_password($data);
      ?>

</div>
<div class="form-group"> <!--THIS IS CONFIRM PASSWORD-->

    <?php  
        echo form_label('Confirm Password');
     ?>
    <?php  //to insert input type
        $data = array(

            'class' => 'form-control',
            'name' => 'confirm_password',
            'placeholder' => 'Confirm Password'
            
        );
     ?>
     <?php  
       echo form_password($data);
      ?>

</div>
<div class="form-group mt-4 text-center"> <!--THIS IS SUBMIT BUTTON-->

    <?php  //to insert input type
        $data = array(

            'class' => 'btn btn-primary',
            'name' => 'submit',
            'value' => 'Register'
            
        );
     ?>
     <?php  
       echo form_submit($data);
      ?>
</div>
</form>

 <?php echo form_close(); ?>