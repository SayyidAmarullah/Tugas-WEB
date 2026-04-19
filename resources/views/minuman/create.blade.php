<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Minuman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <h1 class="text-center">Tambah Minuman</h1>
    <div class="container">
        <form action="{{ route('minuman.store') }}"
            method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_minuman" class="form-label
                    ">Nama Minuman</label>
                <input type="text" class="form-control"
                    id="nama_minuman" name="nama_minuman">      
            </div>
            <div class="mb-3">
                <label for="jenis_minuman" class="form-label
                    ">Jenis Minuman</label>
                <input type="text" class="form-control"
                    id="jenis_minuman" name="jenis_minuman">
            </div>
            <div class="mb-3">
                <label for="harga_minuman" class="form-label
                    ">Harga Minuman</label>
                <input type="text" class="form-control"
                    id="harga_minuman" name="harga_minuman">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>