<?php
/* 
 * Diskominfo Gianyar 
 * www.crudigniter.com
 */
 
class Kecamatan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get kecamatan by id
     */
    function get_kecamatan($id)
    {
        return $this->db->get_where('kecamatan',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all kecamatan
     */
    function get_all_kecamatan()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('kecamatan')->result_array();
    }
        
    /*
     * function to add new kecamatan
     */
    function add_kecamatan($params)
    {
        $this->db->insert('kecamatan',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update kecamatan
     */
    function update_kecamatan($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('kecamatan',$params);
    }
    
    /*
     * function to delete kecamatan
     */
    function delete_kecamatan($id)
    {
        return $this->db->delete('kecamatan',array('id'=>$id));
    }
}
