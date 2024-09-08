<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div class="container">
        <div class="row mb-30">
            <div class="col col-6 mt-5">
                <h1 style="text-align: center;">Tentang Kami</h1>
                <p style="text-align: justify;">
                    SEKAPUR SIRIH
                    Gandusari Hijau Lestari (GHL) berupaya mengoptimalkan sumber daya manusia yang tersedia dan sumber daya alam yang ada di wilayah desa Gandusari, Kecamatan Bandongan, Kabupaten Magelang, Provinsi Jawa Tengah. Oleh karena itu, kegiatan usaha yang dikelola disesuaikan dengan sumber daya yang ada dan potensi yang tersedia di wilayah tersebut.
                    Tujuan utama dari GHL Project ini adalah untuk meningkatkan kondisi sosial ekonomi secara keseluruhan di Bandongan yang terdiri dari 14 desa. Oleh karena itu, Proyek ini dirancang untuk memberdayakan sumber daya manusia yang ada dan meningkatkan status ekonomi masyarakat. Ada tiga kelompok kegiatan yang akan dikelola yaitu : Peternakan, Balai Benih Tanaman Agroindustri, Pembibitan Tanaman Agroindustri dan Hutan Produksi (Perkebunan Inti).
                </p>
            </div>
            <div class="col col-6">
                <img src="images/about.jpg" class="rounded mx-auto d-block" alt="" width="600px" height="430px">
            </div>
            <div class="col col-6 mt-5">
                <img src="images/visi.jpg" class="rounded mx-auto d-block" alt="" width="600px" height="430px">
            </div>
            <div class="col col-6 mt-5">
                <h1 class="mt-5" style="text-align: center;">Visi</h1>
                <p style="text-align: justify;">Pemanfaatan sumber daya alam di wilayah Gandusari Bandongan Magelang bersama masyarakat petani ternak dan kebun Gandusari Hijau Lestari.</p>
                <h1 style="text-align: center;">Misi</h1>
                <p style="text-align: justify;">Mengoptimalkan SDM dan SDA melalui kegiatan yang ramah lingkungan dan praktik-praktik berkelanjutan.
                    Memberdayakan tanaman agro-industry melalui pembibitan, penanaman dan pemrosesan produk.</p>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>

</html>