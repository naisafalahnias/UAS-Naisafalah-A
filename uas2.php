<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Struk Gaji</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <center>
        <h3>Struk Gaji</h3>
        <div class="container mt-5" style="width: 450px;">
            <div class="card">
                <div class="card-header text-center bg-primary">
                    <h5>
                        <?php
                        class Penggajihan {
                            public $nomer, $nama, $unit_pendidikan, $tgl_gaji, $jabatan, $lama_kerja, $status_kerja;
                            public $bpjs, $pinjaman, $cicilan, $infaq;

                            public function dataa($data) {
                                $this->nomer = $data['nomer'];
                                $this->nama = $data['nama'];
                                $this->unit_pendidikan = $data['unit_p'];
                                $this->tgl_gaji = $data['tgl'];
                                $this->jabatan = $data['jbt'];
                                $this->lama_kerja = $data['lama_k'];
                                $this->status_kerja = $data['status_k'];
                                $this->bpjs = $data['bpjs'];
                                $this->pinjaman = $data['pinjam'];
                                $this->cicilan = $data['tabungan'];
                                $this->infaq = $data['lain'];
                            }

                            public function gajiPokok() {
                                if ($this->jabatan == "Kepala Sekolah") {
                                    return 10000000;
                                } elseif ($this->jabatan == "Wakasek") {
                                    return 7000000;
                                } elseif ($this->jabatan == "Guru") {
                                    return 5000000;
                                } elseif ($this->jabatan == "Karyawan") {
                                    return 2500000;
                                } else {
                                    return 0;
                                }
                            }
                            
                            public function bonuss() {
                                return ($this->status_kerja == "Tetap") ? 1000000 : 0;
                            }

                            public function gajiKotor() {
                                return $this->gajiPokok() + $this->bonuss();
                            }

                            public function totalPotongan() {
                                return $this->bpjs + $this->pinjaman + $this->cicilan + $this->infaq;
                            }

                            public function gajiBersih() {
                                return $this->gajiKotor() - $this->totalPotongan();
                            }
                        }

                        if (isset($_POST['proses'])) {
                            $penggajihan = new Penggajihan($_POST);
                            $penggajihan->dataa($_POST);

                            $nomer1 = $penggajihan->nomer;
                            $nama1 = $penggajihan->nama;
                            $unit_pendidikan = $penggajihan->unit_pendidikan;
                            $tgl_gaji = $penggajihan->tgl_gaji;
                            $jabatan = $penggajihan->jabatan;
                            $lama_kerja = $penggajihan->lama_kerja;
                            $status_kerja = $penggajihan->status_kerja;

                            $gaji_karyawan = $penggajihan->gajiPokok();
                            $bonus = $penggajihan->bonuss();
                            $gaji_kotor = $penggajihan->gajiKotor();

                            $bpjs1 = $penggajihan->bpjs;
                            $pinjaman = $penggajihan->pinjaman;
                            $tabungan1 = $penggajihan->cicilan;
                            $lainnya = $penggajihan->infaq;

                            $total_potongan = $penggajihan->totalPotongan();
                            $gaji_bersih = $penggajihan->gajiBersih();

                            echo $nama1;
                        }
                        ?>
                    </h5>
                </div>
                <div class="card-body text-primary">
                    <table>
                        <tr>
                            <td>No</td>
                            <td>:</td>
                            <td><?php echo $nomer1; ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?php echo $nama1; ?></td>
                        </tr>
                        <tr>
                            <td>Unit Pendidikan</td>
                            <td>:</td>
                            <td><?php echo $unit_pendidikan; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Gaji</td>
                            <td>:</td>
                            <td><?php echo $tgl_gaji; ?></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>:</td>
                            <td><?php echo $jabatan; ?></td>
                        </tr>
                        <tr>
                            <td>Gaji</td>
                            <td>:</td>
                            <td>Rp. <?php echo number_format($gaji_karyawan, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td>Lama Kerja</td>
                            <td>:</td>
                            <td><?php echo $lama_kerja; ?> Tahun</td>
                        </tr>
                        <tr>
                            <td>Status Kerja</td>
                            <td>:</td>
                            <td><?php echo $status_kerja; ?></td>
                        </tr>
                        <tr>
                            <td>Bonus</td>
                            <td>:</td>
                            <td>Rp. <?php echo number_format($bonus, 0, ',', '.'); ?></td>
                        </tr>
                    
                        <tr>
                            <td>BPJS</td>
                            <td>:</td>
                            <td>Rp. <?php echo number_format($bpjs1, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td>Pinjaman</td>
                            <td>:</td>
                            <td>Rp. <?php echo number_format($pinjaman, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td>Cicilan</td>
                            <td>:</td>
                            <td>Rp. <?php echo number_format($tabungan1, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td>Infaq</td>
                            <td>:</td>
                            <td>Rp. <?php echo number_format($lainnya, 0, ',', '.'); ?></td>
                        </tr>

                        <tr>
                            <td>Gaji Bersih</td>
                            <td>:</td>
                            <td>Rp. <?php echo number_format($gaji_bersih, 0, ',', '.'); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </center>
</body>
</html>