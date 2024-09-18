<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hill Cipher</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    body {
      background-image: url(background.jpg);
    }

    .card {
      border: 1px solid #555843;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      background-color: #F5EEC8;
    }

    .card-header {
      background-color: #ffc107;
      color: #fff;
      text-align: center;
      font-size: 24px;
    }

    .form-control {
      border: 1px solid #6c757d;
      border-radius: 5px;
    }

    .btn-primary {
      background-color: #007bff;
      border: none;
    }

    .btn-primary:hover {
      background-color: #555843;
    }
  </style>

</head>

<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <form method="post" action="hill_cipher.php">
              <h5 class="text-center mb-4">Hill Cipher Hasher <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
                  <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z" />
                </svg></h5>
              <div class="mb-2">
                <h6>Masukkan Plainteks:</h6>
                <input type="text" class="form-control" id="text" name="text" autocomplete="off" required>
              </div>
              <h6>Masukkan Key (2 x 2):</h6>
              <div class="col-sm-4 mb-2">
                <div class="row g-2">
                  <div class="col-6">
                    <input type="text" class="form-control text-center" id="key00" name="key00" required>
                  </div>
                  <div class="col-6">
                    <input type="text" class="form-control text-center" id="key01" name="key01" required>
                  </div>
                  <div class="col-6">
                    <input type="text" class="form-control text-center" id="key10" name="key10" required>
                  </div>
                  <div class="col-6">
                    <input type="text" class="form-control text-center" id="key11" name="key11" required>
                  </div>
                </div>
              </div>
              <h6>Pilih Mode:</h6>
              <div class="form-check">
                <input type="radio" class="form-check-input" id="encrypt" name="mode" value="encrypt" checked>
                <label class="form-check-label" for="encrypt">Encrypt</label>
              </div>
              <div class="form-check">
                <input type="radio" class="form-check-input" id="decrypt" name="mode" value="decrypt">
                <label class="form-check-label" for="decrypt">Decrypt</label>
              </div>
              <button type="submit" class="btn btn-primary mt-2 mb-2">Proses</button>
            </form>
            <a class="link-underline link-underline-opacity-0" href="data.php">Lihat Data.</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js" integrity="sha384-LxRHzFGwDA5CfAPQGKpao4QhjNJlnI9l6H5hCR0zOX0w8UbZJJ15EN1uIvt9n6Ed" crossorigin="anonymous"></script>
</body>

</html>