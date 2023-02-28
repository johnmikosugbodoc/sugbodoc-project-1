<?php  
    class Login_model extends CI_Model{

        public function get_users($user_id){

            // $this -> db -> where('id', $user_id); //to get specific data from the table/database such as ID
            $query = $this -> db -> get('users');
            return $query -> result();

            // $query = $this -> db -> query("SELECT * FROM users"); //use to find table in database

            // return $query -> num_rows(); //use to count the number of rows/field in the table(database)

            // $query = $this -> db -> get('users'); //use to get the table from the database by use of get('THE TABLE NAME')

            // return $query -> result(); //to return the result of the query

        }
        #INSERT
        public function create_users($data){ //code to insert data

            $this -> db -> insert('users', $data);
        }
        #UPDATE
        public function update_users($data,$id){ //code to update data

            $this -> db -> where(['id'=> $id]); // ID is needed to specify data to be update
            $this -> db -> update('users', $data);
        }
        #DELETE
        public function delete_users($id){ //code to delete data

            $this -> db -> where(['id'=> $id]); // ID is needed to specify data to be update
            $this -> db -> delete('users');

        }

        #IF USERNAME AND PASSWORD ARE TRUE THEN DISPLAY RESULT/ID
        public function login_user($username, $password){

            $this -> db -> where('username', $username);

            $result = $this -> db -> get('users');

            $db_password = $result -> row(2) -> password;

            #verify 
            if(password_verify($password, $db_password)){ //PHP verify encrypted PASSWORD

                return $result -> row(0)->id;

            }else{
                return false;
            }
        }

        #INSERT AND REGISTER USER
        public function register_user($data){ 

            if($this -> db -> insert('users', $data)){//if success

                $this-> session -> set_flashdata('user_registered', "Successfully Registered");
                redirect('home/index');
            }else{//if failed
                
            }
        }
    }
 ?>