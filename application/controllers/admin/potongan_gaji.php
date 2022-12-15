<?php

class potongan_gaji extends CI_Controller{
    public function __construct()
        {
            parent::__construct();

            if($this->session->userdata('hak_akses') !='1'){
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Anda belum login.</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
				redirect('welcome');
            }
        }

    public function index()
    {
        $data['title'] = "Setting Potongan gaji";
        $data['pot_gaji'] = $this->payroll_model->
            get_data('potongan_gaji')->result();
            $this->load->view('templates_admin/header',$data);
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/potongan_gaji',$data);
            $this->load->view('templates_admin/footer');
    }

        public function tambah_data()
    {
        $data['title'] = "Tambah Potongan gaji";
        $data['pot_gaji'] = $this->payroll_model->
            get_data('potongan_gaji')->result();
            $this->load->view('templates_admin/header',$data);
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/form_potongan_gaji',$data);
            $this->load->view('templates_admin/footer');
    }

    public function tambah_data_aksi()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE) {
            $this->tambah_data();
        }else{
            $potongan              = $this->input->post('potongan');
            $jumlah_potongan       = $this->input->post('jumlah_potongan');

            $data=array(
                'potongan'          => $potongan,
                'jumlah_potongan'   => $jumlah_potongan
            );

            $this->payroll_model->insert_data($data,'potongan_gaji');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data Berhasil Ditambahkan.</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('admin/potongan_gaji');

        }
    }

    public function update_data($id)
    {
        $where = array('id' => $id);
        $data['title'] = "Update Potongan Gaji";
        $data['pot_gaji'] = $this->db->query("SELECT * FROM potongan_gaji
            WHERE id='$id'")->result();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_potongan_gaji',$data);
        $this->load->view('templates_admin/footer');
    }

    public function update_data_aksi()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE) {
            $this->update_data;
        }else{
            $id                     = $this->input->post('id');
            $potongan               = $this->input->post('potongan');
            $jumlah_potongan        = $this->input->post('jumlah_potongan');

            $data=array(
                'potongan'             => $potongan,
                'jumlah_potongan'      => $jumlah_potongan
            );

            $where = array(
                'id' => $id
            );

            $this->payroll_model->update_data('potongan_gaji',$data,$where);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data Berhasil Diperbaharui.</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('admin/potongan_gaji');

        }
    }

            public function delete_data($id)
            {
                $where = array('id' => $id);
                $this->payroll_model->delete_data($where,'potongan_gaji');
                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data Berhasil Dihapus.</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('admin/potongan_gaji');
                
            }

            public function _rules()
            {
                $this->form_validation->set_rules('potongan','jenis_potongan','required');
                $this->form_validation->set_rules('jumlah_potongan','jumlah_potongan','required');

            }

}

?>