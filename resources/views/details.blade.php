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
    <section class="house-details pb-1"  style="text-align: center;">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-lg-5">
                    <h1 class="jumbo-header">
                        Daftar Tanaman
                    </h1>
                    <p class="paragraph">
                        Daftar Tanaman Yang Sudah Tertanam.
                    </p>
                </div>
                </section>
            <div>
                @foreach($datas as $row )
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                        <img src="{{ asset('fototanaman/'.$row->foto) }}" class="rounded mx-auto d-block" width="100%" height="400px">
                                        </div>
                                        <div class="col-md-6">
                                            <h2>{{ $row->nama }}</h2>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>Asal</td>
                                                        <td>  :</td>
                                                        <td>{{ $row->asal }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Tanaman</td>
                                                        <td>  :</td>
                                                        <td>{{ $row->jumlah }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Deskripsi</td>
                                                        <td>  :</td>
                                                        <td>{{ $row->Deskripsi }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <a href="#">
                                            <button type="button" class="btn btn-primary" data-mdb-ripple-init>Button</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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