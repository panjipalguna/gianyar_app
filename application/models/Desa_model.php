<?php
/* 
 * Diskominfo Gianyar 
 * www.crudigniter.com
 */
 
class Desa_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get desa by desa_id
     */
    function get_desa($desa_id)
    {
        return $this->db->get_where('desa',array('desa_id'=>$desa_id))->row_array();
    }
        
    /*
     * Get all desa
     */
    function get_all_desa()
    {
        $this->db->order_by('desa_id', 'desc');
        return $this->db->get('desa')->result_array();
    }
        
    /*
     * function to add new desa
     */
    function add_desa($params)
    {
        $this->db->insert('desa',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update desa
     */
    function update_desa($desa_id,$params)
    {
        $this->db->where('desa_id',$desa_id);
        return $this->db->update('desa',$params);
    }
    
    /*
     * function to delete desa
     */
    function delete_desa($desa_id)
    {
        return $this->db->delete('desa',array('desa_id'=>$desa_id));
    }
}
