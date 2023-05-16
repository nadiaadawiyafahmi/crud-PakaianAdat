<!doctype html>
<html lang="en">
 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  
  <body>
    <h2 class="text-center mt-2">Tambah Data Pakaian Adat Indonesia </h2>
    <div class="container mt-3">
    <form action="/tambah" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_pakaian" class="form-label">nama pakaian</label>
                <input type="text" class="form-control @error('nama_pakaian') is-invalid @enderror" id="nama_pakaian" name="nama_pakaian">
                @error('nama_pakaian')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="asal_daerah" class="form-label">asal daerah</label>
                <input type="text" class="form-control @error('asal_daerah') is-invalid @enderror" id="asal_daerah" name="asal_daerah">
                @error('asal_daerah')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/" class="btn btn-primary">Kembali</a>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script> 
  </body>

</html>