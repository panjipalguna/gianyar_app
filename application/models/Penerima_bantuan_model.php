<?php
/* 
 * Diskominfo Gianyar 
 * www.crudigniter.com
 */
 
class Penerima_bantuan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get penerima_bantuan by id
     */
    function get_penerima_bantuan($id)
    {
        return $this->db->get_where('penerima_bantuan',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all penerima_bantuan
     */
    function get_all_penerima_bantuan()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('penerima_bantuan')->result_array();
    }
        
    /*
     * function to add new penerima_bantuan
     */
    function add_penerima_bantuan($params)
    {
        $this->db->insert('penerima_bantuan',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update penerima_bantuan
     */
    function update_penerima_bantuan($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('penerima_bantuan',$params);
    }
    
    /*
     * function to delete penerima_bantuan
     */
    function delete_penerima_bantuan($id)
    {
        return $this->db->delete('penerima_bantuan',array('id'=>$id));
    }
}
