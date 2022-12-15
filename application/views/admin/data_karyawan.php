<div class="container-fluid" style="margin-bottom:100px">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <a class="mb-2 mt-2 btn btn-sm btn-success" href="<?php echo base_url('admin/data_karyawan/tambah_data') ?>">
    <i class="fas fa-plus"></i> Tambah Karyawan</a>

    <table class="table table-bordered table-striped">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">NIK</th>
            <th class="text-center">Nama Karyawan</th>
            <th class="text-center">alamat</th>
            <th class="text-center">Jenis Kelamin</th>
            <th class="text-center">Jabatan</th>
            <th class="text-center">Tanggal masuk</th>
            <th class="text-center">Status</th>
            <th class="text-center">Kontak</th>
            <th class="text-center">Foto</th>
            <th class="text-center">Hak Akses</th>
            <th class="text-center">Action</th>
        </tr>

        <?php $no=1; foreach($karyawan as $k) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $k->nik?></td>
                <td><?php echo $k->nama_karyawan?></td>
                <td><?php echo $k->alamat?></td>
                <td><?php echo $k->jenis_kelamin?></td>
                <td><?php echo $k->jabatan?></td>
                <td><?php echo $k->tgl_masuk?></td>
                <td><?php echo $k->status?></td>
                <td><?php echo $k->kontak?></td>
                <td><img src="<?php echo base_url().'assets/foto/'.$k->foto ?>" width="65px"></td>
                
                    <?php if ($k->hak_akses=='1') { ?>
                        <td>Admin</td>
                    <?php }else{ ?>
                        <td>Karyawan</td>
                    <?php } ?>
                    
                <td>
                    <center>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/data_karyawan/update_data/'.$k->id_karyawan) ?>">
                        <i class="fas fa-edit"></i></a>
                        <a onclick="return confirm('Apakah anda yakin ingin menghapus data ?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/data_karyawan/delete_data/'.$k->id_karyawan) ?>">
                        <i class="fas fa-trash"></i></a>
                    </center>
                </td>


            </tr>
        <?php endforeach; ?>    
    </table>

</div>