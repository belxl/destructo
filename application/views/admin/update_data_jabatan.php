<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update Data Jabatan</h1>
    </div>

    <div class="card" style="width: 60%"> 
        <div class="card-body">

        <?php foreach ($jabatan as $j): ?>

            <form method="POST" action="<?php echo base_url('admin/data_jabatan/update_data_aksi')?>">
                <div class="form-group">
                    <label>Nama Jabatan</label>
                    <input type="hidden" name="id_jabatan" class="form-control" 
                    value="<?php echo $j->id_jabatan ?>">
                    <input type="text" name="nama_jabatan" class="form-control"
                    value="<?php echo $j->nama_jabatan ?>">
                    <?php echo form_error('nama_jabatan','<div class="text-small text danger"></div>')?>
                </div>

                <div class="form-group">
                    <label>Gaji Pokok</label>
                    <input type="number" name="gaji_pokok" class="form-control"
                    value="<?php echo $j->gaji_pokok ?>">
                    <?php echo form_error('gaji_pokok','<div class="text-small text danger"></div>')?>
                </div>

                <div class="form-group">
                    <label>Tunjangan Transport</label>
                    <input type="number" name="transport" class="form-control"
                    value="<?php echo $j->transport ?>">
                    <?php echo form_error('transport','<div class="text-small text danger"></div>')?>
                </div>

                <div class="form-group">
                    <label>Uang Makan</label>
                    <input type="number" name="uang_makan" class="form-control"
                    value="<?php echo $j->uang_makan ?>">
                    <?php echo form_error('uang_makan','<div class="text-small text danger"></div>')?>
                </div>

                <button type="submit" class="btn btn-success">Update</button>

            </form>
            <?php endforeach; ?>
        </div>
    </div>

</div>

