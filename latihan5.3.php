<?php
$data = [55, 76, 65, 95, 59, 65, 70, 66, 62, 85];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ahmad Fadilah</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row mt-5 justify-content-center">
      <div class="col-lg 6">
        <table class="table table-hover table-bordered border-dark">
          <thead class="table-primary">
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Nilai</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i = 1; $i <= count($data); $i++) : ?>
              <?php
              $status = $data[$i - 1] % 2 == 0 ? "Nilai Angka Genap" : "Nilai Angka Ganjil";
              ?>
              <tr>
                <td><?= $i ?></td>
                <td>Mahasiswa <?= $i ?></td>
                <td><?= $data[$i - 1] ?></td>
                <td><?= $status; ?></td>
              </tr>
            <?php endfor; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>