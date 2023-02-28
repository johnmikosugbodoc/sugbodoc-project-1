<?php
    
    class Login_controller extends CI_Controller{

        public function show(){

        //   $this -> load -> model('login_model');

          $data['results'] = $this -> login_model -> get_users(2);// use to get data from the mode/database to pass into a variable
          $this -> load -> view('login_view', $data); //use to pass data from the model/database to View/what we see
        }
        #INSERT
        public function insert(){

          $username = "Acuesta"; // to be inserted in username
          $password = "12345"; // to be inserted in password
           
          $this -> login_model -> insert_users([

            'username' => $username,
            'password' => $password

          ]);
        }
        #UPDATE
        public function update(){

          $id = 3;
          $username = "Acuesta";
          $password = "12345";
           
          $this -> login_model -> update_users([

            'username' => $username,
            'password' => $password

          ],$id);
        }
        #DELETE
        public function delete(){

          $id = 4;
          $this -> login_model -> delete_users($id);

        }
        #REGISTER
        public function register(){
          

          $this -> form_validation -> set_rules('first_name', 'Firstname', 'trim|required|min_length[3]');
          $this -> form_validation -> set_rules('last_name', 'Lastname', 'trim|required|min_length[3]');
          $this -> form_validation -> set_rules('email', 'Email', 'trim|required|min_length[3]');
          $this -> form_validation -> set_rules('username', 'Username', 'trim|required|min_length[3]');
          $this -> form_validation -> set_rules('password', 'Password', 'trim|required|min_length[8]');
          $this -> form_validation -> set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[8]|matches[password]');

          
          if($this -> form_validation -> run() == FALSE){
            
              $data['main_view'] = "users/register_view";
              $this -> load -> view('layouts/main', $data);

          }else{
            #PASSWORD ENCRYPTION line 65-66 SEE MODEL to continue at line 45-48
            $options = ['cost' => 12]; //THE HIGHER THE NUMBER THE BETTER ENCRYPTION BUT SLOW
            $encrypted_pass = password_hash($this -> input -> post('password'), PASSWORD_BCRYPT, $options);

            $firstname = $this -> input -> post('first_name');
            $lastname = $this -> input -> post('last_name');
            $email = $this -> input -> post('email');
            $username = $this -> input -> post('username');
            $password = $encrypted_pass; //pass the variable name

              $this -> login_model -> register_user([

                'first_name' => $firstname,
                'last_name' => $lastname,
                'email' => $email,
                'username' => $username,
                'password' => $password
                
              ]);
          }
        }
        #SIGN IN
        public function signin(){

          //echo $this -> input -> post('username');
          //echo $this -> input -> post('password');

          #FORM VALIDATION
          $this -> form_validation -> set_rules('username', 'Username', 'trim|required|min_length[3]');
          $this -> form_validation -> set_rules('password', 'Password', 'trim|required|min_length[8]');
          $this -> form_validation -> set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[8]|matches[password]');#USE MATCHES FUNCTION TO CONFIRM PASSWORD

          #if statement to validate if the statement is true/false
          if($this -> form_validation -> run() == FALSE){
            $data = array(

              'errors' => validation_errors("<p class='text-danger'>")

            );

            $this -> session -> set_flashdata($data);

            #Function to redirect
            redirect('home');
          }else{

            #TO VERIFY IF USERNAME AND PASSWORD EXIST IN DATABASE
            $username = $this -> input -> post('username');
            $password = $this -> input -> post('password');

            
            $user_id = $this -> login_model -> login_user($username, $password);
            
            if($user_id){
              $user_data = array(

                'user_id' => $user_id,
                'username' => $username,
                'logged_in' => true

              );
              #PASS THE DATA OF THE USER TO A VARIABLE CALLED $user_data
              $this -> session -> set_userdata($user_data);
              
              #SETTING UP NOTIFICATION also from the home_view.php
              $this -> session -> set_flashdata('login_sucess', 'Login Successfully!');

              // redirect('home/index'); OPTIONAL

              //THIS IS TO LOAD ANOTHER VIEW IF 
              // $data['main_view'] = "admin_view";
              // $this -> load -> view ('layouts/main', $data);

              redirect('home/index');

            }else{
              $this -> session -> set_flashdata('login_failed', 'Sorry, Login Failed!');
              redirect('home/index');
            }


          }
        }
        #LOGOUT
        public function logout(){ 
          
          $this -> session -> sess_destroy(); //use SESS_DESCTROY to logout from the current session
          redirect('home/index');
        
        }
    }

 ?>