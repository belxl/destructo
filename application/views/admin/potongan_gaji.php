<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <a class="btn btn-sm btn-success mb-2 mt-2" href="<?php echo base_url('admin/potongan_gaji/tambah_data') ?>">
    <i class="fas fa-plus"> Tambah Data</i></a>

    <table class="table table-bordered table-striped">
        <tr>
            <th class="">No</th>
            <th class="">Jenis Potongan</th>
            <th class="">Jumlah Potongan</th>
            <th class="">Action</th>
        </tr>

        <?php $no=1; foreach($pot_gaji as $p) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $p->potongan ?></td>
                <td>Rp.<?php echo number_format($p->jumlah_potongan,0,',','.') ?></td>
                <td>
                    <center>
                    <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/potongan_gaji/update_data/'.$p->id) ?>">
                    <i class="fas fa-edit"></i></a>
                    <a onclick="return confirm('Yakin hapus ?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/potongan_gaji/delete_data/'.$p->id) ?>">
                    <i class="fas fa-trash"></i></a>
                    </center>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>


</div>

