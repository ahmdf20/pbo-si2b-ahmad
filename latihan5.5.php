<?php
$data = [
  ["card" => true, "total" => 200000],
  ["card" => true, "total" => 570000],
  ["card" => false, "total" => 120000],
  ["card" => false, "total" => 90000],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 5.5</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

  <div class="container">
    <div class="row mt-5 justify-content-center">
      <div class="col-lg-8">
        <table class="table table-hover border-dark">
          <thead class="table-primary">
            <tr>
              <th>No</th>
              <th>Pembeli</th>
              <th>Kartu Member</th>
              <th>Total Belanja</th>
              <th>Diskon</th>
              <th>Biaya yang Dikeluarkan</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $key => $item) : ?>
              <?php
              if ($item['card']) {
                switch (true) {
                  case ($item['total'] > 500000):
                    $diskon = 50000;
                    break;

                  case ($item['total'] > 100000):
                    $diskon = 15000;
                    break;

                  default:
                    $diskon = 0;
                    break;
                }
              } else {
                switch (true) {
                  case ($item['total'] > 100000):
                    $diskon = 5000;
                    break;

                  default:
                    $diskon = 0;
                    break;
                }
              }
              ?>
              <tr>
                <td><?= $key + 1 ?></td>
                <td>Pembeli <?= $key + 1 ?></td>
                <td><?= $item['card'] ? "Memiliki" : "Tidak Memiliki" ?></td>
                <td>Rp. <?= number_format($item['total'], 0, ',', '.') ?></td>
                <td>Rp. <?= number_format($diskon, 0, ',', '.') ?></td>
                <td>Rp. <?= number_format($item['total'] - $diskon, 0, ',', '.') ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>