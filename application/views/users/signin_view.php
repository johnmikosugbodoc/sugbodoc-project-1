<?php if($this -> session -> userdata('logged_in')): ?>

    <h1>Logout</h1>


    <?php echo form_open('Login_controller/logout');?><!--LOGOUT FORM-->
    <p>
    <?php if($this -> session -> userdata('username')):?>
        <?php  
            echo "You are logged in as " . $this -> session -> userdata('username');
         ?>
    <?php endif;?>
    </p>

        <?php  
            $data = array(
                
                'class' => 'btn btn-danger',
                'name' => 'submit',
                'value' => 'Logout'
            
            );
        ?>
    <?php echo form_submit($data);?>
    <?php echo form_close();?>
<?php else: ?>
<h1>Signin Form</h1>
<?php  
    $attributes = array('id' => 'signin_form', 'class' => 'form_horizontal');
 ?>

<!--FLASH DATA METHOD TO reset and we echo/show ERRORS and use IF/ENDIF-->
<?php if($this -> session -> flashdata('errors')): ?>

    <?php echo $this -> session -> flashdata('errors'); ?><!-- ECHO/FLASH ERRORS -->
    
<?php endif; ?>


<?php 
    echo form_open('Login_controller/signin', $attributes);
 ?>
<form>
<div class="form-group"> <!--THIS IS USERNAME INPUT VALUE-->

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
<div class="form-group mt-4"> <!--THIS IS CONFIRM PASSWORD-->

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
            'value' => 'Sign In'
            
        );
     ?>
     <?php  
       echo form_submit($data);
      ?>
</div>
</form>

 <?php echo form_close(); ?>
 
 <?php endif; ?>