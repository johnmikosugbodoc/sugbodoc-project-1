<div class="container">
    <div class="row">
        <div class="col">
            <h3>Project Name: <?php echo $project_data -> project_name; ?></h1>
            <p>Date Created: <?php echo $project_data -> date_created; ?><br></p>
            <h5>Description</h5>
            <p><?php echo $project_data -> project_body; ?></p>
        </div>
        <div class="col">
            <ul class="list-group float-end">
                <h3>Project Actions</h3>
                <li class="list-group-item"><a style="text-decoration-line:none;" href="<?php echo base_url();?>tasks_controller/create_task/<?php echo $project_data -> id?>">Create Task</a></li>
                <li class="list-group-item"><a style="text-decoration-line:none;" href="<?php echo base_url();?>projects_controller/edit_task/<?php echo $project_data -> id?>">Edit Project</a></li>
                <li class="list-group-item"><a style="text-decoration-line:none;" href="<?php echo base_url();?>projects_controller/delete_task/<?php echo $project_data -> id?>">Delete Project</a></li>
            </ul>
        </div>
    </div>
</div>