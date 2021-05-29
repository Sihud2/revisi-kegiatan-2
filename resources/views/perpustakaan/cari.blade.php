<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Cari</title>
  </head>
  <body>

    <a href="{{ url('data_peminjam') }}" class="btn btn-primary mt-5" style="margin-left: 5%;">Kembali</a>
      <div class="mt-3" style="margin-left: 90px">
        <form action="{{ 'halamancari' }}" method="post">
          <label for="nama">Masukkan Nama</label>
            <input type="text" name="nama">
            <button class="btn btn-success" name="cari">Cari</button>
        </form>
      </div>

      <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Buku</th>
                    <th scope="col">Nama Buku</th>
                    <th scope="col">Nama Peminjam</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Tanggal Pinjam</th>
                    <th scope="col">Tanggal Pengembalian</th>
                </tr>
            </thead>
            <tbody>
              @foreach ( $users as $datapinjam => $item)
              <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $item->kode_buku }}</td>
                  <td>{{ $item->nama_buku }}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->jurusan }}</td>
                  <td>{{ $item->tanggal_pinjam }}</td>
                  <td>{{ $item->tanggal_pengembalian }}</td>
              </tr>
              @endforeach
            </tbody>
        </table>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>