<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <div class="card" style="width:50%;">

    <div class="card body">
        <form action="<?php echo base_url('karyawan/ganti_password/ganti_password_aksi')?>" method="POST">
            <div class="form-group">
                <label for="">Password baru</label>
                <input type="password" name="pass_baru" class="form-control">
                <?php echo form_error('pass_baru','<div class="text-small text danger"></div>')?>
            </div>

            <div class="form-group">
                <label for="">Ulangi Password Baru</label>
                <input type="password" name="ulang_pass" class="form-control">
                <?php echo form_error('ulang_pass','<div class="text-small text danger"></div>')?>
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
    </div>

</div>