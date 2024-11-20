<?php

if (isset($_POST['proses'])) {
    $tgl = $_POST['tanggal'];
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $up = $_POST['unit'];
    $jbtn = $_POST['jabatan'];
    $masa = $_POST['lama'];
    $status = $_POST['status'];
    $bPJS = $_POST['bpjs'];
    $pinjam = $_POST['pinjaman'];
    $cicil = $_POST['cicilan'];
    $infaq = $_POST['infaq'];

    class gaJi{
        public $pokok;
        public $bonuss;
        public $gajian;
        public $potongan;
        public $gaber;

        public function gajiPokok($a){
            switch ($a) {
                case 'Kepala Sekolah':
                    $this->pokok = 10000000;
                    break;
                
                case 'Wakasek':
                    $this->pokok = 7500000;
                    break;
                
                case 'Guru':
                    $this->pokok = 5000000;
                    break;
                
                case 'OB':
                    $this->pokok = 2500000;
                    break;
                
                default:
                    $this->pokok = 0;
                    break;
            }

            return $this->pokok;
        }

        public function boNus($b){
            switch ($b) {
                case 'Tetap':
                    $this->bonuss = 1000000;
                    break;
                
                default:
                    $this->bonuss = 0;
                    break;
            }
            return $this->bonuss;
        }

        public function totGaji(){
            $this->gajian = $this->pokok + $this->bonuss;
            return $this->gajian;
        }

        public function potong($z, $x, $c, $v){
            $this->potongan = $z + $x + $c + $v;
            return $this->potongan;
        }

        public function gajiBersih(){
            $this->gaber = $this->gajian - $this->potongan;
            return $this->gaber;
        }
    }

    $cetak = new gaJi();
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/struk.css">
    <title>Struk Gaji UAS Dha</title>
    <style>
      body {
        background-color: #e8f5e9;
      }
    </style>
  </head>
  <body>
    <div class="container" style="width: 45rem">
        <div class="card">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-3">
                            <img src="../img/logoy.jpg" alt="Logo Assalaam" class="img-fluid" style="max-width: 170px;">
                        </div>
                        <div class="col-8">
                            <br>
                            <h4>STRUK GAJI</h4>
                            <p>GURU/KARYAWAN YAYASAN ASSALAAM</p>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-7"></div>
                        <div class="col-5 text-end">Tanggal: <?= $tgl; ?></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <table>
                                <tr>
                                    <td>No</td>
                                    <td>:</td>
                                    <td><?= $no; ?></td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><?= $nama; ?></td>
                                </tr>
                                <tr>
                                    <td>Unit Pendidikan</td>
                                    <td>:</td>
                                    <td><?= $up; ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col">
                            <table>
                                <tr>
                                    <td>Jabatan</td>
                                    <td>:</td>
                                    <td><?= $jbtn; ?></td>
                                </tr>
                                <tr>
                                    <td>Masa Kerja</td>
                                    <td>:</td>
                                    <td><?= $masa; ?></td>
                                </tr>
                                <tr>
                                    <td>Status Kerja</td>
                                    <td>:</td>
                                    <td><?= $status; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col"><b>Penerimaan</b></div>
                        <div class="col"><b>Potongan</b></div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col">
                            <table>
                                <tr>
                                    <td>Gaji Pokok</td>
                                    <td>:</td>
                                    <td>Rp. <?= $cetak->gajiPokok($jbtn); ?></td>
                                </tr>
                                <tr>
                                    <td>Bonus</td>
                                    <td>:</td>
                                    <td>Rp. <?= $cetak->boNus($status); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col">
                            <table>
                                <tr>
                                    <td>BPJS</td>
                                    <td>:</td>
                                    <td>Rp. <?= $bPJS; ?></td>
                                </tr>
                                <tr>
                                    <td>Pinjaman</td>
                                    <td>:</td>
                                    <td>Rp. <?= $pinjam; ?></td>
                                </tr>
                                <tr>
                                    <td>Cicilan</td>
                                    <td>:</td>
                                    <td>Rp. <?= $cicil; ?></td>
                                </tr>
                                <tr>
                                    <td>Infaq</td>
                                    <td>:</td>
                                    <td>Rp. <?= $infaq; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col">
                            <b>Total Penerimaan : </b> Rp. <?= $cetak->totGaji(); ?>
                        </div>
                        <div class="col">
                            <b>Total Potongan : </b> Rp. <?= $cetak->potong($bPJS, $pinjam, $cicil, $infaq); ?>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="card-footer text-center">
                <b>Gaji Bersih : </b> Rp. <?= $cetak->gajiBersih(); ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
