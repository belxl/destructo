<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <div class="card" style="width: 60%; margin-bottom: 100px"> 
        <div class="card-body">
            <form method="POST" action="<?php echo base_url('admin/data_karyawan/tambah_data_aksi')?>" 
            enctype="multipart/form-data">

            <div class="form-group">
                <label>nik</label>
                <input type="number" name="nik" class="form-control">
                <?php echo form_error('nik','<div class="text-small text danger"></div>')?>
            </div>

            <div class="form-group">
                <label>Nama Karyawan</label>
                <input type="text" name="nama_karyawan" class="form-control">
                <?php echo form_error('nama_karyawan','<div class="text-small text danger"></div>')?>
            </div>

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control">
                <?php echo form_error('username','<div class="text-small text danger"></div>')?>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <?php echo form_error('nama_karyawan','<div class="text-small text danger"></div>')?>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control">
                <?php echo form_error('alamat','<div class="text-small text danger"></div>')?>
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                    <option>--Pilih Jenis Kelamin--</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <?php echo form_error('jenis_kelamin','<div class="text-small text danger"></div>')?>
            </div>

            <div class="form-group">
                <label>Jabatan</label>
                <select name="jabatan" class="form-control">
                    <option value="">--Pilih Jabatan--</option>
                    <?php foreach($jabatan as $j) : ?>
                    <option value="<?php echo $j->nama_jabatan ?>">
                    <?php echo $j->nama_jabatan ?></option>
                    <?php endforeach; ?>
                </select>
                <?php echo form_error('jabatan','<div class="text-small text danger"></div>')?>
            </div>

            <div class="form-group">
                <label>Tanggal Masuk</label>
                <input type="date" name="tgl_masuk" class="form-control">
                <?php echo form_error('tgl_masuk','<div class="text-small text danger"></div>')?>
            </div>

            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option>--Pilih Status--</option>
                    <option value="Karyawan Tetap">Karyawan Tetap</option>
                    <option value="Karyawan Tidak Tetap">Karyawan Tidak Tetap</option>
                </select>
                <?php echo form_error('status','<div class="text-small text danger"></div>')?>
            </div>

            <div class="form-group">
                <label>Kontak</label>
                <input type="number" name="kontak" class="form-control">
                <?php echo form_error('kontak','<div class="text-small text danger"></div>')?>
            </div>

            <div class="form-group">
                <label>foto</label>
                <input type="file" name="foto" class="form-control">
                <?php echo form_error('foto','<div class="text-small text danger"></div>')?>
            </div>

            <div class="form-group">
                <label>Hak Akses</label>
                <select name="hak_akses" id="" class="form-control">
                    <option value="">>--Pilih Hak Akses--<</option>
                    <option value="1">Admin</option>
                    <option value="2">Karyawan</option>
                </select>
                
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        
        </form>
        </div>

    </div>

</div>