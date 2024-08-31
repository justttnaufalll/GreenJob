<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gandusari Hijau</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    @include('partials.header')
    <section class="house-details pb-2">
        <div class="container">
            <div class="row align-items-center mb-2">
                <div class="col-lg-5">
                    <h1 class="jumbo-header">
                        Daftar Tanaman
                    </h1>
                    <p class="paragraph">
                        Daftar Tanaman Yang Sudah Tertanam.
                    </p>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($datas as $row )
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('fototanaman/'.$row->foto) }}" class="card-img-top" width="300px" height="450px">
                    <div class="card-body">
                        <h3 class="strong">{{ $row->nama }}</h3>
                    <p class="card-text">
                        <strong>Jumlah :</strong>  {{ $row->jumlah }} Tanaman
                    </p>
                        <a href="#" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </section>

    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    
</body>

</html>