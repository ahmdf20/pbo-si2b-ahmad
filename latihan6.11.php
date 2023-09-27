<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Temperature Converter</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body class="bg-primary">

  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-6">
        <div class="card shadow shadow-lg rounded-md bg-light">
          <div class="card-body">
            <h1 class="text-center">Temperature Converter</h1>
            <hr class="border border-2 border-dark">
            <form action="" method="post">
              <label for="temperature">Masukkan suhu</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" name="tnumber" id="tnumber">
                <select name="temperatures" id="temperatures" class="input-group-text">
                </select>
              </div>
              <div class="form-group mb-3">
                <label for="temperature">Convert ke</label>
                <select name="to_temperature" id="to_temperature" class="form-control">
                </select>
              </div>
              <div class="d-grid mb-3">
                <button class="btn btn-md btn-success" id="convert">Submit</button>
              </div>
              <label for="equal">Hasil:</label>
              <h3 id="equal"></h3>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function() {

      const dataTemperatures = [{
        code: 'c',
        name: 'Celcius'
      }, {
        code: 'f',
        name: 'Fahrenheit'
      }, {
        code: 'k',
        name: 'Kelvin'
      }, {
        code: 'r',
        name: 'Reamur'
      }];

      let html
      dataTemperatures.forEach((res, index) => {
        html += `<option value="${res.code}">${res.name}</option>`
      });
      $('#temperatures').html(html)
      $('#to_temperature').html(html)

      $('#temperatures').change(function() {
        let temperatures = $('#temperatures').val()
        let html
        dataTemperatures.filter(res => temperatures != res.code).forEach((res, index) => {
          html += `<option value="${res.code}">${res.name}</option>`
        })
        $('#to_temperature').html(html)
      })

      $('#convert').click(function(e) {
        e.preventDefault()
        $.ajax({
          url: "./backend_latihan6.11.php",
          method: "POST",
          data: {
            tnumber: $('#tnumber').val(),
            temperatures: $('#temperatures').val(),
            to_temperature: $('#to_temperature').val()
          },
          success: function(res) {
            $('#equal').text(res)
          },
          error: function(err) {
            console.warn(err)
          }
        })
      })
    })
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>