<?php 

class ganti_password extends CI_Controller{


    public function index()
    {
        $data['title'] = "Ganti Password";
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('form_ganti_password',$data);
        $this->load->view('templates_admin/footer');
    }

    public function ganti_password_aksi()
    {
        $pass_baru  = $this->input->post('pass_baru');
        $ulang_pass = $this->input->post('ulang_pass');

        $this->form_validation->set_rules('pass_baru','password baru', 'required|matches[ulang_pass]');
        $this->form_validation->set_rules('ulang_pass','ulangi password', 'required');

        if($this->form_validation->run() != FALSE) {
            $data = array('password' => md5($pass_baru));
            $id = array('id_karyawan'=> $this->session->userdata('id_karyawan'));
            $this->payroll_model->update_data('data_karyawan',$data,$id);
                $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Password berhasil diganti.</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('welcome');
        }else{
            $data['title'] = "Ganti Password";
            $this->load->view('templates_admin/header',$data);
            $this->load->view('templates_admin/sidebar');
            $this->load->view('form_ganti_password',$data);
            $this->load->view('templates_admin/footer'); 
        }
    }

}
?>