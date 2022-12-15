<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <div class="card" style="width: 60%; margin-bottom: 100px"> 
        <div class="card-body">

        <?php foreach($karyawan as $k) : ?>
            <form method="POST" action="<?php echo base_url('admin/data_karyawan/update_data_aksi')?>" 
            enctype="multipart/form-data">

            <div class="form-group">
                <label>NIK</label>
                <input type="hidden" name="id_karyawan" class="form-control"
                value="<?php echo$k->id_karyawan ?>">
                <input type="number" name="nik" class="form-control" value="<?php echo$k->nik ?>">
                <?php echo form_error('nik','<div class="text-small text danger"></div>')?>
            </div>

            <div class="form-group">
                <label>Nama Karyawan</label>
                <input type="text" name="nama_karyawan" class="form-control" value="<?php echo$k->nama_karyawan ?>">
                <?php echo form_error('nama_karyawan','<div class="text-small text danger"></div>')?>
            </div>

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo$k->username ?>">
                <?php echo form_error('username','<div class="text-small text danger"></div>')?>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo$k->password ?>">
                <?php echo form_error('nama_karyawan','<div class="text-small text danger"></div>')?>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" value="<?php echo$k->alamat ?>">
                <?php echo form_error('alamat','<div class="text-small text danger"></div>')?>
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                    <option value="<?php echo$k->jenis_kelamin ?>"><?php echo$k->jenis_kelamin ?></option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <?php echo form_error('jenis_kelamin','<div class="text-small text danger"></div>')?>
            </div>

            <div class="form-group">
                <label>Jabatan</label>
                <select name="jabatan" class="form-control">
                    <option value="<?php echo$k->jabatan ?>"><?php echo$k->jabatan ?></option>
                    <?php foreach($jabatan as $j) : ?>
                    <option value="<?php echo $j->nama_jabatan ?>">
                    <?php echo $j->nama_jabatan ?></option>
                    <?php endforeach; ?>
                </select>
                <?php echo form_error('jabatan','<div class="text-small text danger"></div>')?>
            </div>

            <div class="form-group">
                <label>Tanggal Masuk</label>
                <input type="date" name="tgl_masuk" class="form-control" value="<?php echo$k->tgl_masuk ?>">
                <?php echo form_error('tgl_masuk','<div class="text-small text danger"></div>')?>
            </div>

            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="<?php echo$k->status ?>"><?php echo$k->status ?></option>
                    <option value="Karyawan Tetap">Karyawan Tetap</option>
                    <option value="Karyawan Tidak Tetap">Karyawan Tidak Tetap</option>
                </select>
                <?php echo form_error('status','<div class="text-small text danger"></div>')?>
            </div>

            <div class="form-group">
                <label>Kontak</label>
                <input type="number" name="kontak" class="form-control" value="<?php echo$k->kontak ?>">
                <?php echo form_error('kontak','<div class="text-small text danger"></div>')?>
            </div>

            <div class="form-group">
                <label>foto</label>
                <input type="file" name="foto" class="form-control" value="<?php echo$k->foto ?>">
                <?php echo form_error('foto','<div class="text-small text danger"></div>')?>
            </div>

            <div class="form-group">
                <label>Hak Akses</label>
                <select name="hak_akses" id="" class="form-control">
                    <option value="<?php echo $k->hak_akses ?>">
                    <?php if($k->hak_akses=='1') {
                        echo "Admin";
                    }else{
                        echo "Karyawan";
                    } ?>    
                    </option>
                    <option value="1">Admin</option>
                    <option value="2">Karyawan</option>
                </select>
                
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        
        </form>
        <?php endforeach; ?>
        </div>

    </div>

</div>