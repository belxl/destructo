<?php

class data_karyawan extends CI_Controller{
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
        $data['title'] = "Data Karyawan";
        $data['karyawan'] = $this->payroll_model->get_data('data_karyawan')
            ->result();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_karyawan',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_data(){
        $data['title'] = "Tambah Data Karyawan";
        $data['jabatan'] = $this->payroll_model->get_data('data_jabatan')
            ->result();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_karyawan',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_data_aksi()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->tambah_data();
        }else{
            $nik            =$this->input->post('nik');
            $nama_karyawan  =$this->input->post('nama_karyawan');
            $alamat         =$this->input->post('alamat');
            $jenis_kelamin  =$this->input->post('jenis_kelamin');
            $jabatan        =$this->input->post('jabatan');
            $tgl_masuk      =$this->input->post('tgl_masuk');
            $status         =$this->input->post('status');
            $hak_akses      =$this->input->post('hak_akses');
            $username       =$this->input->post('username');
            $password       =md5($this->input->post('password'));
            $kontak         =$this->input->post('kontak');
            $foto           =$_FILES['foto']['name'];
            if($foto=''){}else{
                $config ['upload_path']     = './assets/foto';
                $config ['allowed_types']   = 'jpg|jpeg|png|tiff';
                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('foto')){
                    echo "Foto Gagal Diupload.";
                }else{
                    $foto=$this->upload->data('file_name');
                }
            }

            $data = array(
                'nik'             => $nik,
                'nama_karyawan'   => $nama_karyawan,
                'alamat'          => $alamat,
                'jenis_kelamin'   => $jenis_kelamin,
                'jabatan'         => $jabatan,
                'tgl_masuk'       => $tgl_masuk,
                'status'          => $status,
                'hak_akses'       => $hak_akses,
                'username'        => $username,
                'password'        => $password,
                'kontak'          => $kontak,
                'foto'            => $foto,
            );

            $this->payroll_model->insert_data($data,'data_karyawan');
                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data Berhasil Ditambahkan.</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('admin/data_karyawan');
        }
    }

    public function update_data($id)
    {
        $where = array('id_karyawan' => $id);
        $data['title'] = 'Update Data Karyawan';
        $data['jabatan'] = $this->payroll_model->get_data('data_jabatan')
            ->result();
        $data['karyawan'] = $this->db->query("SELECT * FROM 
            data_karyawan WHERE id_karyawan='$id'")->result();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_karyawan',$data);
        $this->load->view('templates_admin/footer');
    }

    public function update_data_aksi()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->update_data();
            
        }else{
            $id             =$this->input->post('id_karyawan');
            $nik            =$this->input->post('nik');
            $nama_karyawan  =$this->input->post('nama_karyawan');
            $alamat         =$this->input->post('alamat');
            $jenis_kelamin  =$this->input->post('jenis_kelamin');
            $jabatan        =$this->input->post('jabatan');
            $tgl_masuk      =$this->input->post('tgl_masuk');
            $status         =$this->input->post('status');
            $hak_akses      =$this->input->post('hak_akses');
            $username       =$this->input->post('username');
            $password       =md5($this->input->post('password'));
            $kontak         =$this->input->post('kontak');
            $foto           =$_FILES['foto']['name'];
            if($foto){
                $config ['upload_path']     = './assets/foto';
                $config ['allowed_types']   = 'jpg|jpeg|png|tiff';
                $this->load->library('upload',$config);
                if($this->upload->do_upload('foto')){
                    $foto=$this->upload->data('file_name');
                    $this->db->set('foto',$foto);
                }else{
                    echo $this->upload->display_errors();
                }
            }

            $data = array(
                'nik'             => $nik,
                'nama_karyawan'   => $nama_karyawan,
                'alamat'          => $alamat,
                'jenis_kelamin'   => $jenis_kelamin,
                'jabatan'         => $jabatan,
                'tgl_masuk'       => $tgl_masuk,
                'status'          => $status,
                'hak_akses'       => $hak_akses,
                'username'        => $username,
                'password'        => $password,
                'kontak'          => $kontak,
            );

            $where = array(
                'id_karyawan' => $id
            );

            $this->payroll_model->update_data('data_karyawan',$data,$where);
                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data Berhasil Diupdate.</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('admin/data_karyawan');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nik','NIK','required');
        $this->form_validation->set_rules('nama_karyawan','nama karyawan','required');
        $this->form_validation->set_rules('alamat','alamat','required');
        $this->form_validation->set_rules('jenis_kelamin','jenis kelamin','required');
        $this->form_validation->set_rules('jabatan','jabatan','required');
        $this->form_validation->set_rules('tgl_masuk','tanggal masuk','required');
        $this->form_validation->set_rules('status','status','required');
        $this->form_validation->set_rules('kontak','kontak','required');
    }

    public function delete_data($id){
        $where = array('id_karyawan' => $id);
        $this->payroll_model->delete_data($where,'data_karyawan');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Dihapus.</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/data_karyawan');
    }
}

?>