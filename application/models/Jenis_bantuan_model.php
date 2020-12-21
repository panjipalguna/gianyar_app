<?php
/* 
 * Diskominfo Gianyar 
 * www.crudigniter.com
 */
 
class Jenis_bantuan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get jenis_bantuan by id
     */
    function get_jenis_bantuan($id)
    {
        return $this->db->get_where('jenis_bantuan',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all jenis_bantuan
     */
    function get_all_jenis_bantuan()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('jenis_bantuan')->result_array();
    }
        
    /*
     * function to add new jenis_bantuan
     */
    function add_jenis_bantuan($params)
    {
        $this->db->insert('jenis_bantuan',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update jenis_bantuan
     */
    function update_jenis_bantuan($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('jenis_bantuan',$params);
    }
    
    /*
     * function to delete jenis_bantuan
     */
    function delete_jenis_bantuan($id)
    {
        return $this->db->delete('jenis_bantuan',array('id'=>$id));
    }
}
