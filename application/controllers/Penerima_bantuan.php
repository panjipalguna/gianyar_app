<?php
/* 
 * Diskominfo Gianyar 
 * www.crudigniter.com
 */
 
class Penerima_bantuan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Penerima_bantuan_model');
    } 

    /*
     * Listing of penerima_bantuan
     */
    function index()
    {
        $data['penerima_bantuan'] = $this->Penerima_bantuan_model->get_all_penerima_bantuan();
        
        $data['_view'] = 'penerima_bantuan/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new penerima_bantuan
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'kecamatan_id' => $this->input->post('kecamatan_id'),
				'jenis_bantuan_id' => $this->input->post('jenis_bantuan_id'),
				'alamat' => $this->input->post('alamat'),
				'desa_id' => $this->input->post('desa_id'),
				'nama_penerima' => $this->input->post('nama_penerima'),
				'nomor_ktp' => $this->input->post('nomor_ktp'),
				'nomor_kk' => $this->input->post('nomor_kk'),
				'lintang' => $this->input->post('lintang'),
				'bujur' => $this->input->post('bujur'),
				'keterangan' => $this->input->post('keterangan'),
            );
            
            $penerima_bantuan_id = $this->Penerima_bantuan_model->add_penerima_bantuan($params);
            redirect('penerima_bantuan/index');
        }
        else
        {
			$this->load->model('Kecamatan_model');
			$data['all_kecamatan'] = $this->Kecamatan_model->get_all_kecamatan();

			$this->load->model('Jenis_bantuan_model');
			$data['all_jenis_bantuan'] = $this->Jenis_bantuan_model->get_all_jenis_bantuan();
            
            $data['_view'] = 'penerima_bantuan/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a penerima_bantuan
     */
    function edit($id)
    {   
        // check if the penerima_bantuan exists before trying to edit it
        $data['penerima_bantuan'] = $this->Penerima_bantuan_model->get_penerima_bantuan($id);
        
        if(isset($data['penerima_bantuan']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'kecamatan_id' => $this->input->post('kecamatan_id'),
					'jenis_bantuan_id' => $this->input->post('jenis_bantuan_id'),
					'alamat' => $this->input->post('alamat'),
					'desa_id' => $this->input->post('desa_id'),
					'nama_penerima' => $this->input->post('nama_penerima'),
					'nomor_ktp' => $this->input->post('nomor_ktp'),
					'nomor_kk' => $this->input->post('nomor_kk'),
					'lintang' => $this->input->post('lintang'),
					'bujur' => $this->input->post('bujur'),
					'keterangan' => $this->input->post('keterangan'),
                );

                $this->Penerima_bantuan_model->update_penerima_bantuan($id,$params);            
                redirect('penerima_bantuan/index');
            }
            else
            {
				$this->load->model('Kecamatan_model');
				$data['all_kecamatan'] = $this->Kecamatan_model->get_all_kecamatan();

				$this->load->model('Jenis_bantuan_model');
				$data['all_jenis_bantuan'] = $this->Jenis_bantuan_model->get_all_jenis_bantuan();

                $data['_view'] = 'penerima_bantuan/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The penerima_bantuan you are trying to edit does not exist.');
    } 

    /*
     * Deleting penerima_bantuan
     */
    function remove($id)
    {
        $penerima_bantuan = $this->Penerima_bantuan_model->get_penerima_bantuan($id);

        // check if the penerima_bantuan exists before trying to delete it
        if(isset($penerima_bantuan['id']))
        {
            $this->Penerima_bantuan_model->delete_penerima_bantuan($id);
            redirect('penerima_bantuan/index');
        }
        else
            show_error('The penerima_bantuan you are trying to delete does not exist.');
    }
    
}
