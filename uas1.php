<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="uas.css">
</head>
<body>
    <center>
        <img src="logoyayasan.png" alt="" srcset="" width="300">
            <h2>PENGGAJIHAN</h2>
            <h2>GURU/KARYAWAN YAYASAN ASSALAAM</h2><br><br>
            <div class="card border-dark bg-success mb-3" style="max-width: 50rem;">
                <div class="card-header">DATA PENGGAJIHAN</div>
                    <div class="card-body we">
                        <div class="card border-dark mb-3" style="max-width: 35rem;">
                            <div class="card-body">
                                <form action="uas2.php" method="POST" align="left">
                                    <div class="mb-3">
                                        <label for="" class="form-label">No</label>
                                        <input type="number" class="form-control" name="nomer" placeholder="No" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Nama</label>
                                        <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Unit Pendidikan</label>
                                        <select class="form-select bg-warning" name="unit_p" required>
                                            <option value="" selected>Pilih Unit Pendidikan</option>
                                            <option value="TK">TK</option>
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMK">SMK</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Tanggal Gaji</label>
                                        <input type="date" class="form-control" name="tgl" required>
                                    </div>
                                    </div>
                                    </div>

                                    <div class="card border-dark mb-3" style="max-width: 35rem;">
                                    <div class="card-body">
                                    <h3 class="d-flex justify-content-between"><i>Gaji</i><i>Potongan</i></h3>
                                    <br>
                                    <div class="row g-3" align="left">
                                        <div class="col-sm">
                                            <label for="" class="form-label">Jabatan</label>
                                            <select class="form-select bg-warning" name="jbt" required>
                                                <option value="" selected>Pilih Jabatan</option>
                                                <option value="Kepala Sekolah">Kepala Sekolah</option>
                                                <option value="Wakasek">Wakasek</option>
                                                <option value="Guru">Guru</option>
                                                <option value="OB">OB</option>
                                            </select>
                                        </div>
                                        <div class="col-sm">
                                    <label for="" class="form-label">BPJS</label>
                                    <input type="number" class="form-control" name="bpjs" placeholder="BPJS" required>
                                </div>
                            </div>
                            <br>
                            <div class="row g-3" align="left">
                                <div class="col-sm">
                                    <label for="" class="form-label">Lama kerja</label>
                                    <input type="number" class="form-control" name="lama_k" placeholder="Lama kerja" required>
                                </div>
                                <div class="col-sm">
                                    <label for="" class="form-label">Pinjaman</label>
                                    <input type="number" class="form-control" name="pinjam" placeholder="Pinjaman" required>
                                </div>
                            </div>
                            <br>
                            <div class="row g-3" align="left">
                                <div class="col-sm">
                                    <label for="" class="form-label">Status kerja</label>
                                    <select class="form-select bg-warning" name="status_k" required>
                                        <option value="" selected>Pilih Status Kerja</option>
                                        <option value="Tetap">Tetap</option>
                                        <option value="Kontrak">Kontrak</option>
                                    </select>                        
                                </div>
                                <div class="col-sm">
                                    <label for="" class="form-label">Cicilan</label>
                                    <input type="number" class="form-control" name="tabungan" placeholder="Tabungan" required>
                                </div>
                            </div>
                            <br>
                            <div class="row g-3">
                                <div class="col-sm-12 d-flex justify-content-end">
                                    <label class="form-label me-5">Infaq</label>
                                    <input type="number" class="form-control" name="lain" placeholder="Lainnya" style="width: 200px;" required>
                                </div>
                            </div>
                            </div>
                            </div>
                            <br>
                            <center><button type="submit" class="btn-outline-success" name="proses">Proses</button></center>
                        </div>
                        </form>
                    </div>
           </div>
           
    </center>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>