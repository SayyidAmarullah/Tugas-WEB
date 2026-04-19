<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Minuman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <div class="container">
        <h1 class = "text-center">Daftar Minuman</h1>
        <a href="{{ route('minuman.create') }}" type="button" class="btn btn-primary mb-3">Tambah Minuman</a>
    <table class="table">
      <thead>
        <tr>
          <th>Nama Minuman</th>
          <th>Jenis Minuman</th>
          <th>Harga Minuman</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($minuman as $m)
        <tr>
          <td>{{ $m->nama_minuman }}</td>
          <td>{{ $m->jenis_minuman }}</td>
          <td>{{ $m->harga_minuman }}</td>
          <td>
            <a href="{{ route('minuman.edit', $m->id) }}" type="button" class="btn btn-warning">Edit</a>
            <form action="{{ route('minuman.destroy', $m->id) }}" method="POST" style="display:inline-block;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
          </td>
        </tr>
        @endforeach
    </div>
      </tbody>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>