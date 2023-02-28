<h3>TASK DISPLAY VIEW</h3>

<table class="table table-hover">
    <thead>
        <tr>
            <th>
                Task Name
            </th>
            <th>
                Task Description
            </th>
            <th>
                Date Created
            </th><th>
                Due Date
            </th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td><?php echo $task -> task_name;?></td>
                <td><?php echo $task -> task_body;?></td>
                <td><?php echo $task -> date_created;?></td>
                <td><?php echo $task -> due_date;?></td>
            </tr>
    </tbody>
</table>