<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/form.css">
  <style>
    body {
      font-family: Poppins;
    }
  </style>

  <title>Form UAS Dhea</title>
</head>

<body>
  <form action="struk.php" method="post">
    <div class="container py-5" style="width: 70rem">

      <div class="card mb-4">
        <div class="card-body text-center">
          <img src="../img/logoy.jpg" class="img" alt="Logo SMK">
        </div>
        <div class="card-footer text-center">
          PEMBAYARAN GAJI GURU/KARYAWAN YAYASAN ASSALAAM
        </div>
      </div>

      <div class="card">
        <div class="card-header text-center">
          Data Pembayaran Gaji
        </div>
        <div class="card-body">
          <div class="row mb-3">
            <div class="col-1">
              <label for="no" class="form-label">No</label>
              <input type="number" class="form-control" name="no" placeholder="No">
            </div>
            <div class="col">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama" placeholder="Nama">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <label for="unit" class="form-label">Unit Pendidikan</label>
              <select name="unit" id="unit" class="form-control">
                <option selected>Pilih Unit Pendidikan</option>
                <option value="TK">TK</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMK">SMK</option>
              </select>
            </div>
            <div class="col">
              <label for="tanggal" class="form-label">Tanggal Gaji</label>
              <input type="date" name="tanggal" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <div class="card">
                <div class="card-header text-center">Data Kepegawaian</div>
                <div class="card-body">
                  <label for="jabatan" class="form-label">Jabatan</label>
                  <select name="jabatan" class="form-control">
                    <option selected>Pilih Jabatan</option>
                    <option value="Kepala Sekolah">Kepala Sekolah</option>
                    <option value="Wakasek">Wakasek</option>
                    <option value="Guru">Guru</option>
                    <option value="OB">OB</option>
                  </select>
                  <label for="lama" class="form-label">Masa Kerja</label>
                  <input type="text" name="lama" class="form-control" placeholder="Masa Kerja">
                  <label for="status" class="form-label">Status Kerja</label>
                  <select name="status" class="form-control">
                    <option selected>Pilih Status Kerja</option>
                    <option value="Tetap">Tetap</option>
                    <option value="Kontrak">Kontrak</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class="card">
                <div class="card-header text-center">Potongan Gaji</div>
                <div class="card-body">
                  <div class="row mb-2">
                    <div class="col">
                      <label for="bpjs" class="form-label">BPJS</label>
                      <input type="number" class="form-control" name="bpjs" placeholder="BPJS">
                    </div>
                    <div class="col">
                      <label for="pinjaman" class="form-label">Pinjaman</label>
                      <input type="number" name="pinjaman" class="form-control" placeholder="Pinjaman">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <label for="cicilan" class="form-label">Cicilan</label>
                      <input type="number" class="form-control" name="cicilan" placeholder="Cicilan">
                    </div>
                    <div class="col">
                      <label for="infaq" class="form-label">Infaq</label>
                      <input type="number" class="form-control" name="infaq" placeholder="Infaq">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary" name="proses">Proses</button>
          </div>
        </div>
      </div>
    </div>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
