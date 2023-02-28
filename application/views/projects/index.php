<h1>THIS IS PROJECTS</h1>
<p class="text-success">
    <!--IF PROJECT CREATED SUCCESS-->
    <?php if($this -> session -> flashdata('project_created')):?>
     <?php  
        echo $this -> session -> flashdata('project_created');
      ?>
     <?php endif;?>
     <!--IF PROJECT UPDATED SUCCESS-->
     <?php if($this -> session -> flashdata('project_updated')):?>
     <?php  
        echo $this -> session -> flashdata('project_updated');
      ?>
     <?php endif;?>
     <!--IF PROJECT DELETED SUCCESS-->
     <?php if($this -> session -> flashdata('project_deleted')):?>
     <?php  
        echo $this -> session -> flashdata('project_deleted');
      ?>
     <?php endif;?>
</p>
<a href="<?php echo base_url();?>projects_controller/create_project" class="btn btn-primary float-end">Create Project</a>
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
            <?php echo "<td><a style='text-decoration-line:none;' href='". base_url() ."projects_controller/display/". $project -> id ."'>" . $project -> project_name . "</a></td>"; ?> <!--PRINT THE PROJECT NAMES FROM DATABASE-->
            <?php echo "<td>" . $project -> project_body . "</td>"; ?> <!--PRINT THE PROJECT BODY FROM DATABASE-->
            <td><a href="<?php echo base_url();?>projects_controller/delete_task/<?php echo $project -> id;?>"><i class="bi bi-x-octagon-fill text-danger"></i></a></td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>
