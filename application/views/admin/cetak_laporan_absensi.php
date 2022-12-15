<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <style type="text/css">
        body{
            font-family: Arial;
            color: black;
        }
    </style>
</head>
<body>

        <center>
            <h1>PT PUTRA PERDANA SELARAS</h1>
            <h2>Laporan Absensi Karyawan</h2>
        </center>

        <?php 
        $bulan=$this->input->post('bulan');
        $tahun=$this->input->post('tahun');
        ?>
        <table>
            <tr>
                <td>Bulan</td>
                <td>:</td>
                <td><?php echo $bulan ?></td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>:</td>
                <td><?php echo $tahun ?></td>
            </tr>
        </table>

        <table class="table table-bordered table-striped">
            <tr>
                <th>No</th>
                <th>Nama Karyawan</th>
                <th>NIK</th>
                <th>Jabatan</th>
                <th>Hadir</th>
                <th>Sakit</th>
                <th>Alpha</th>
            </tr>

            <?php $no=1; foreach ($lap_kehadiran as $l) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $l->nama_karyawan ?></td>
                <td><?php echo $l->nik ?></td>
                <td><?php echo $l->nama_jabatan ?></td>
                <td><?php echo $l->jumlah_hadir ?></td>
                <td><?php echo $l->sakit ?></td>
                <td><?php echo $l->alfa ?></td>
            </tr>
            <?php endforeach;?>
        </table>

        <table width="100%">
                <tr>
                    <td></td>
                    <td width="200px">
                        <p>Bandung, <?php echo date("d M Y") ?> <br> Staff Payroll</p>
                        <br>
                        <br>
                        <p>___________________</p>
                    </td>
                </tr>
            </table>
    
</body>
</html>

<script type="text/javascript">
    window.print();
</script>