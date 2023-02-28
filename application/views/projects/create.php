<h3>Create Project</h3>

<?php  
    $attributes = array('id' => 'create_form', 'class' => 'form_horizontal');
 ?>

<?php echo validation_errors("<p class='text-danger'>");?> <!-- ECHO ERRORS -->

<?php 
    echo form_open('projects_controller/create_project', $attributes);
 ?>
<form>
<div class="form-group mt-4"> <!--THIS IS PROJECT_NAME INPUT VALUE-->

<?php  
    echo form_label('Project Name'); 
 ?>
<?php  //to insert input type
    $data = array(

        'class' => 'form-control',
        'name' => 'project_name'
        
    );
 ?>
 <?php echo form_input($data);?>
</div>
<div class="form-group mt-4"> <!--THIS IS PROJECT_BODY INPUT VALUE-->

<?php  
    echo form_label('Project Description'); 
 ?>
<?php  //to insert input type
    $data = array(

        'class' => 'form-control',
        'name' => 'project_body'
        
    );
 ?>
 <?php echo form_textarea($data);?>
</div>

<div class="form-group mt-4 text-center"> <!--THIS IS SUBMIT BUTTON-->

    <?php  //to save
        $data = array(

            'class' => 'btn btn-primary',
            'name' => 'submit',
            'value' => 'Save'
            
    );
?>
<?php echo form_submit($data);?>
</div>
</form>

 <?php echo form_close(); ?>