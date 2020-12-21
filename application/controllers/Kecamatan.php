<?php
/* 
 * Diskominfo Gianyar 
 * www.crudigniter.com
 */
 
class Kecamatan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kecamatan_model');
    } 

    /*
     * Listing of kecamatan
     */
    function index()
    {
        $data['kecamatan'] = $this->Kecamatan_model->get_all_kecamatan();
        
        $data['_view'] = 'kecamatan/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new kecamatan
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'nama' => $this->input->post('nama'),
				'kode' => $this->input->post('kode'),
            );
            
            $kecamatan_id = $this->Kecamatan_model->add_kecamatan($params);
            redirect('kecamatan/index');
        }
        else
        {            
            $data['_view'] = 'kecamatan/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a kecamatan
     */
    function edit($id)
    {   
        // check if the kecamatan exists before trying to edit it
        $data['kecamatan'] = $this->Kecamatan_model->get_kecamatan($id);
        
        if(isset($data['kecamatan']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'nama' => $this->input->post('nama'),
					'kode' => $this->input->post('kode'),
                );

                $this->Kecamatan_model->update_kecamatan($id,$params);            
                redirect('kecamatan/index');
            }
            else
            {
                $data['_view'] = 'kecamatan/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The kecamatan you are trying to edit does not exist.');
    } 

    /*
     * Deleting kecamatan
     */
    function remove($id)
    {
        $kecamatan = $this->Kecamatan_model->get_kecamatan($id);

        // check if the kecamatan exists before trying to delete it
        if(isset($kecamatan['id']))
        {
            $this->Kecamatan_model->delete_kecamatan($id);
            redirect('kecamatan/index');
        }
        else
            show_error('The kecamatan you are trying to delete does not exist.');
    }
    
}
