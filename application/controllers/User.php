<?php
/* 
 * Diskominfo Gianyar 
 * www.crudigniter.com
 */
 
class User extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    } 

    /*
     * Listing of user
     */
    function index()
    {
        $data['user'] = $this->User_model->get_all_user();
        
        $data['_view'] = 'user/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new user
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'password' => $this->input->post('password'),
            );
            
            $user_id = $this->User_model->add_user($params);
            redirect('user/index');
        }
        else
        {            
            $data['_view'] = 'user/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a user
     */
    function edit($username)
    {   
        // check if the user exists before trying to edit it
        $data['user'] = $this->User_model->get_user($username);
        
        if(isset($data['user']['username']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'password' => $this->input->post('password'),
                );

                $this->User_model->update_user($username,$params);            
                redirect('user/index');
            }
            else
            {
                $data['_view'] = 'user/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The user you are trying to edit does not exist.');
    } 

    /*
     * Deleting user
     */
    function remove($username)
    {
        $user = $this->User_model->get_user($username);

        // check if the user exists before trying to delete it
        if(isset($user['username']))
        {
            $this->User_model->delete_user($username);
            redirect('user/index');
        }
        else
            show_error('The user you are trying to delete does not exist.');
    }
    
}
