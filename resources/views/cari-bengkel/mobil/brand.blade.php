<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/cari-bengkel/style.css">
    <link rel="stylesheet" href="/main/css/style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="title">
      <h1 class="text-center">Cari Bengkel Mobil</h1>
    </div>
    <div class="subtitle">
      <h5 class="text-center">Pilih Kota</h5>
    </div>

    <div class="container">
    <div class="row">
        @foreach($brands as $brand)
        <div class="col-md-3">
            <div class="card card-brand zoom mb-3">
            <a href="/search/bengkel">
                <img class="card-img-top brand-img" style="display:block" src="/brand-img/001-kia.png" alt="Card image cap">
                <h1 class="m-0 mb-1" style="text-align:center">{{$brand->nama}}</h1>
            </a>
            </div>					
        </div>
        @endforeach
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>