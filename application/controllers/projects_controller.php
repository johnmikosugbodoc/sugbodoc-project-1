<?php  
    class Projects_controller extends CI_Controller{

        public function __construct(){

            parent::__construct();

            if(!$this -> session -> userdata('logged_in')){
                $this -> session -> set_flashdata('no_access', 'Sorry you are not logged in!');
                redirect('home/index');
            }
        }

        public function index(){

            $data['projects'] = $this -> project_model -> get_projects();

            $data['main_view'] = "projects/index";
            $this -> load -> view ('layouts/main', $data);
        }
        public function display($project_id){

            $data['project_data'] = $this -> project_model -> get_project($project_id);

            $data['main_view'] = "projects/display";
            $this -> load -> view ('layouts/main', $data);
        }
        public function create_project(){
            $this -> form_validation -> set_rules('project_name', 'Project Name', 'trim|required');
            $this -> form_validation -> set_rules('project_body', 'Project Description', 'trim|required');

            if($this -> form_validation -> run() == FALSE){
                $data['main_view'] = "projects/create";
                $this -> load -> view ('layouts/main', $data);
            }else{
                $data = array(
                    'project_user_id' => $this -> session -> userdata('user_id'),
                    'project_name' => $this -> input -> post('project_name'),
                    'project_body' => $this -> input -> post('project_body')
                );

                if($this -> project_model -> create_project($data)){
                    $this -> session -> set_flashdata('project_created', "Project successfully created!");
                    redirect("projects_controller/index");
                    
                }
            }
        }
        public function edit_task($project_id){

            $this -> form_validation -> set_rules('project_name', 'Project Name', 'trim|required');
            $this -> form_validation -> set_rules('project_body', 'Project Description', 'trim|required');

            if($this -> form_validation -> run() == FALSE){

                $data['project_data'] = $this -> project_model -> get_projects_info($project_id);

                $data['main_view'] = "tasks/edit_view";
                $this -> load -> view ('layouts/main', $data);
            }else{
                $data = array(
                    'project_user_id' => $this -> session -> userdata('user_id'),
                    'project_name' => $this -> input -> post('project_name'),
                    'project_body' => $this -> input -> post('project_body')
                );

                if($this -> project_model -> edit_project($project_id, $data)){
                    $this -> session -> set_flashdata('project_updated', "Project successfully updated!");
                    redirect("projects_controller/index");
                    
                }

            }
        }
        public function delete_task($project_id){
            $this -> project_model -> delete_project($project_id);

            $this -> session -> set_flashdata('project_deleted', 'Project successfully deleted!');         
            redirect("projects_controller/index");
        }
    }
 ?>