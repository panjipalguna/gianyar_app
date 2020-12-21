<?php
/* 
 * Diskominfo Gianyar 
 * www.crudigniter.com
 */
 
class Desa extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Desa_model');
    } 

    /*
     * Listing of desa
     */
    function index()
    {
        $data['desa'] = $this->Desa_model->get_all_desa();
        
        $data['_view'] = 'desa/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new desa
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'desa_kecamatan_id' => $this->input->post('desa_kecamatan_id'),
				'desa_nama' => $this->input->post('desa_nama'),
				'desa_kode' => $this->input->post('desa_kode'),
				'desa_datasosial' => $this->input->post('desa_datasosial'),
				'desa_bltdd' => $this->input->post('desa_bltdd'),
				'desa_kemenpar' => $this->input->post('desa_kemenpar'),
				'desa_semb_bup' => $this->input->post('desa_semb_bup'),
				'desa_semb_prov' => $this->input->post('desa_semb_prov'),
            );
            
            $desa_id = $this->Desa_model->add_desa($params);
            redirect('desa/index');
        }
        else
        {            
            $data['_view'] = 'desa/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a desa
     */
    function edit($desa_id)
    {   
        // check if the desa exists before trying to edit it
        $data['desa'] = $this->Desa_model->get_desa($desa_id);
        
        if(isset($data['desa']['desa_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'desa_kecamatan_id' => $this->input->post('desa_kecamatan_id'),
					'desa_nama' => $this->input->post('desa_nama'),
					'desa_kode' => $this->input->post('desa_kode'),
					'desa_datasosial' => $this->input->post('desa_datasosial'),
					'desa_bltdd' => $this->input->post('desa_bltdd'),
					'desa_kemenpar' => $this->input->post('desa_kemenpar'),
					'desa_semb_bup' => $this->input->post('desa_semb_bup'),
					'desa_semb_prov' => $this->input->post('desa_semb_prov'),
                );

                $this->Desa_model->update_desa($desa_id,$params);            
                redirect('desa/index');
            }
            else
            {
                $data['_view'] = 'desa/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The desa you are trying to edit does not exist.');
    } 

    /*
     * Deleting desa
     */
    function remove($desa_id)
    {
        $desa = $this->Desa_model->get_desa($desa_id);

        // check if the desa exists before trying to delete it
        if(isset($desa['desa_id']))
        {
            $this->Desa_model->delete_desa($desa_id);
            redirect('desa/index');
        }
        else
            show_error('The desa you are trying to delete does not exist.');
    }
    
}
