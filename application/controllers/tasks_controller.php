<?php  
    class Tasks_controller extends CI_Controller{
        
        public function display($task_id){
            $data['task'] = $this -> task_model -> get_task($task_id);

            $data['main_view'] = "tasks/display";
            $this -> load -> view('layouts/main', $data);
        }
        public function create_task($project_id){
            $this -> form_validation -> set_rules('task_name', 'Task Name', 'trim|required');
            $this -> form_validation -> set_rules('task_body', 'Task Description', 'trim|required');

            if($this -> form_validation -> run() == FALSE){
                $data['main_view'] = "tasks/create_task_view";
                $this -> load -> view ('layouts/main', $data);
            }else{
                $data = array(
                    'task_user_id' => $project_id,
                    'task_name' => $this -> input -> post('task_name'),
                    'task_body' => $this -> input -> post('task_body'),
                    'due_date' => $this -> input -> post('due_date')
                );

                if($this -> task_model -> create_task($data)){
                    $this -> session -> set_flashdata('task_created', "task successfully created!");
                    redirect("tasks_controller/index");
                    
                }
            }
        }
    }
 ?>