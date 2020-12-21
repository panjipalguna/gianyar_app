<?php
/* 
 * Diskominfo Gianyar 
 * www.crudigniter.com
 */
 
class Jenis_bantuan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Jenis_bantuan_model');
    } 

    /*
     * Listing of jenis_bantuan
     */
    function index()
    {
        $data['jenis_bantuan'] = $this->Jenis_bantuan_model->get_all_jenis_bantuan();
        
        $data['_view'] = 'jenis_bantuan/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new jenis_bantuan
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'nama' => $this->input->post('nama'),
				'tabel_kode' => $this->input->post('tabel_kode'),
            );
            
            $jenis_bantuan_id = $this->Jenis_bantuan_model->add_jenis_bantuan($params);
            redirect('jenis_bantuan/index');
        }
        else
        {            
            $data['_view'] = 'jenis_bantuan/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a jenis_bantuan
     */
    function edit($id)
    {   
        // check if the jenis_bantuan exists before trying to edit it
        $data['jenis_bantuan'] = $this->Jenis_bantuan_model->get_jenis_bantuan($id);
        
        if(isset($data['jenis_bantuan']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'nama' => $this->input->post('nama'),
					'tabel_kode' => $this->input->post('tabel_kode'),
                );

                $this->Jenis_bantuan_model->update_jenis_bantuan($id,$params);            
                redirect('jenis_bantuan/index');
            }
            else
            {
                $data['_view'] = 'jenis_bantuan/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The jenis_bantuan you are trying to edit does not exist.');
    } 

    /*
     * Deleting jenis_bantuan
     */
    function remove($id)
    {
        $jenis_bantuan = $this->Jenis_bantuan_model->get_jenis_bantuan($id);

        // check if the jenis_bantuan exists before trying to delete it
        if(isset($jenis_bantuan['id']))
        {
            $this->Jenis_bantuan_model->delete_jenis_bantuan($id);
            redirect('jenis_bantuan/index');
        }
        else
            show_error('The jenis_bantuan you are trying to delete does not exist.');
    }
    
}
