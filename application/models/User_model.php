<?php
/* 
 * Diskominfo Gianyar 
 * www.crudigniter.com
 */
 
class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get user by username
     */
    function get_user($username)
    {
        return $this->db->get_where('user',array('username'=>$username))->row_array();
    }
        
    /*
     * Get all user
     */
    function get_all_user()
    {
        $this->db->order_by('username', 'desc');
        return $this->db->get('user')->result_array();
    }
        
    /*
     * function to add new user
     */
    function add_user($params)
    {
        $this->db->insert('user',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update user
     */
    function update_user($username,$params)
    {
        $this->db->where('username',$username);
        return $this->db->update('user',$params);
    }
    
    /*
     * function to delete user
     */
    function delete_user($username)
    {
        return $this->db->delete('user',array('username'=>$username));
    }
}
