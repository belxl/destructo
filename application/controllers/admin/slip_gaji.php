<?php 

class slip_gaji extends CI_Controller{
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
        $data['title'] = "Filter Slip Gaji Karyawan";
        $data['karyawan'] = $this->payroll_model->get_data('data_karyawan')->result();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/filter_slip_gaji',$data);
        $this->load->view('templates_admin/footer');
    }

    public function cetak_slip_gaji()
    {
        $data['title'] = "Cetak Slip Gaji";
        $data['potongan'] = $this->payroll_model->get_data('potongan_gaji')->result();
        $nama = $this->input->post('nama_karyawan');
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        $bulantahun=$bulan.$tahun;
        
        $data['print_slip'] = $this->db->query("SELECT data_karyawan.nik, data_karyawan.nama_karyawan, 
        data_jabatan.nama_jabatan, data_jabatan.gaji_pokok, data_jabatan.transport, data_jabatan.uang_makan, data_absensi.alfa,
        data_absensi.bulan
        FROM data_karyawan
        INNER JOIN data_absensi ON data_absensi.nik=data_karyawan.nik
        INNER JOIN data_jabatan ON data_jabatan.nama_jabatan=data_karyawan.jabatan
        WHERE data_absensi.bulan='$bulantahun' AND data_absensi.nama_karyawan='$nama'")->result();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('admin/cetak_slip_gaji',$data);

    }

}

?>