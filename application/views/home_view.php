<p class="bg-success">
    <!--IF REGISTER SUCCESS-->
    <?php if($this -> session -> flashdata('user_registered')):?>
     <?php  
        echo $this -> session -> flashdata('user_registered');
      ?>
     <?php endif;?>
     <!--IF LOGIN SUCCESS-->
     <?php if($this -> session -> flashdata('login_sucess')):?>
     <?php  
        echo $this -> session -> flashdata('login_sucess');
      ?>
     <?php endif;?>
</p>

<p class="bg-danger"> 
    <!--IF LOGIN FAILED-->
    <?php if($this -> session -> flashdata('login_failed')):?>
     <?php  
        echo $this -> session -> flashdata('login_failed');
      ?>
     <?php endif;?>
     <!--NO ACCESS IF NOT LOGGED IN-->
     <?php if($this -> session -> flashdata('no_access')):?>
     <?php  
        echo $this -> session -> flashdata('no_access');
      ?>
     <?php endif;?>
</p>

<h1 class="display-1 text-center text-opacity-50 text-success"><strong>WELCOME TO SUGBODOC</strong></h1>
<?php if(isset($projects)):?>

<h3>PROJECTS</h3>

<table class="table table-hover">
    <thead>
        <tr>
            <th>
                Project Name
            </th>
            <th>
                Project Description
            </th>
        </tr>
    </thead>
    <tbody>

        <?php foreach($projects as $project): ?>
            <tr>
            <?php echo "<td>" . $project -> project_name . "</a></td>"; ?> <!--PRINT THE PROJECT NAMES FROM DATABASE-->
            <?php echo "<td>" . $project -> project_body . "</td>"; ?> <!--PRINT THE PROJECT BODY FROM DATABASE-->
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>
<?php endif;?>