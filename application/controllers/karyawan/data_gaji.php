<?php
    class data_gaji extends CI_Controller{
        public function __construct()
        {
            parent::__construct();

            if($this->session->userdata('hak_akses') !='2'){
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
            $data['title'] = "Data Gaji";
            $nik=$this->session->userdata('nik');
            $data['potongan'] = $this->payroll_model->get_data('potongan_gaji')->result();
            $data['gaji'] = $this->db->query("SELECT data_karyawan.nama_karyawan, data_karyawan.nik, 
            data_jabatan.gaji_pokok, data_jabatan.transport, data_jabatan.uang_makan, data_absensi.alfa,
            data_absensi.bulan, data_absensi.id_absensi
            FROM data_karyawan
            INNER JOIN data_absensi ON data_absensi.nik=data_karyawan.nik
            INNER JOIN data_jabatan ON data_jabatan.nama_jabatan=data_karyawan.jabatan
            WHERE data_absensi.nik='$nik'
            ORDER BY data_absensi.bulan DESC")->result();
            $this->load->view('templates_karyawan/header',$data);
            $this->load->view('templates_karyawan/sidebar');
            $this->load->view('karyawan/data_gaji',$data);
            $this->load->view('templates_karyawan/footer'); 
        }

        public function cetak_slip($id)
        {
            $data['title'] = "Cetak Slip Gaji";
            $data['potongan'] = $this->payroll_model->get_data('potongan_gaji')->result();
        
        $data['print_slip'] = $this->db->query("SELECT data_karyawan.nik, data_karyawan.nama_karyawan, 
        data_jabatan.nama_jabatan, data_jabatan.gaji_pokok, data_jabatan.transport, data_jabatan.uang_makan, data_absensi.alfa,
        data_absensi.bulan
        FROM data_karyawan
        INNER JOIN data_absensi ON data_absensi.nik=data_karyawan.nik
        INNER JOIN data_jabatan ON data_jabatan.nama_jabatan=data_karyawan.jabatan
        WHERE data_absensi.id_absensi='$id'")->result();
            $this->load->view('templates_karyawan/header',$data);
            $this->load->view('karyawan/cetak_slip_gaji',$data); 
        }
    }    
?>