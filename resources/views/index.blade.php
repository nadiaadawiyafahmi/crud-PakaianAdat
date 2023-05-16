<!doctype html>
<html lang="en">
 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Pakaian Adat Indonesia </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  
  <body>
    <h2 class="text-center mt-2">Data Pakaian Adat Indonesia </h2>
    <div class="container mt-3">
      <a href="/tambah" class="btn btn-primary">Tambah Data</a>
      <table class="table">
        <thead>
    <tr>
      <th scope="col"> no</th>
      <th scope="col"> nama pakaian </th>
      <th scope="col"> asal daerah </th>
      <th scope="col"> action </th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($PakaianAdat as $item)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $item->nama_pakaian }}</td>
      <td>{{ $item->asal_daerah}}</td>
      <td>
         <a href="{{ '/lihat/'.$item->id }}" class="btn btn-info">Lihat</a>
         <a href="{{ '/edit/'.$item->id }}" class="btn btn-warning">Edit</a>
         <a onclick="return confirm('Yakin Untuk Menghapus?')" href="{{ '/hapus/'.$item->id }}" class="btn btn-danger">Hapus</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
  </body>

</html>