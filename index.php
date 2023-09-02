<!doctype html>

<html>

<head>

  <meta charset="utf-8">

  <title>PHP Calculator</title>

  <style>
    p {
      font-size: 12px;
    }

    .alert {
      color: red;
    }
  </style>
</head>

<body>


  <h2>OOP calculator</h2>
  <br>
  <form action="latihan2.3.php" method="POST">
    <input type="number" name="inputBil1">
    <select name="Ops">
      <option value="tambah">Tambah</option>
      <option value="kurang">Kurang</option>
      <option value="kali">Kali</option>
      <option value="bagi">Bagi</option>
      <option value="modulus">Modulus</option>
      <option value="pangkat">Pangkat</option>
    </select>
    <input type="number" name="inputBil2">
    <button type="submit">Hitung</button>
  </form>


</body>

</html>