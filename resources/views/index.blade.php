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
  <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  @include('partials.header')
  <section class="header mb-70">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h1 class="jumbo-header mb-30">
            Kelompok Masyarakat Tani Ternak dan Kebun<br>
            Gandusari Hijau Lestari
          </h1>
          <p class="paragraph mb-30">
            Kelompok Tani Ini Didirikan di Desa Gandusari, Keamatan Bandongan<br>
            Kabupaten Magelang. Sejak Tahun 2019 Kelompok Tani Ini berfokus pada pengembangan Tanaman Endemik dan Non Endemik.<br>
          </p>
          <p class="mb-50"><a href="details" class="btn btn-primary">Explore Tanaman</a></p>
          <div class="row stats text-center">
            <div class="col-lg-4 item">
              <h3 class="big-header">
                56
              </h3>
              <p class="paragraph">
                Tanaman
              </p>
            </div>
            <div class="col-lg-4 item">
              <h3 class="big-header">
                12
              </h3>
              <p class="paragraph">
                Endemik
              </p>
            </div>
            <div class="col-lg-4 item">
              <h3 class="big-header">
                44
              </h3>
              <p class="paragraph">
                Non Endemik
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <img src="images/LogoR.png" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
  <section class="course">
    <h1 class="jumbo-header">GANDUSARI HIJAU LESTARI</h1>
    <p>
      Gandusari Hijau merupakan kelompok pembudidaya tanaman langka atau non
      endemik, yang bertujuan untuk melakukan penghijauan dan bisa memberikan
      hasil manfaat yang dimiliki oleh tanaman tersebut
    </p>
    <div class="row">
      <div class="course-col">
        <h3>Struktur kelompok</h3>
        <p>
          Kelompok Tani Gandusari Hijau memiliki fungsi penugasan pada bidang
          masing-masing
        </p>
      </div>
      <div class="course-col">
        <h3>Laporan Hasil</h3>
        <p>
          Hasil dari jumlah pencatatan tanaman memiliki lebih dari 54 jenis
          tanaman yang beragam jenis dan asalnya. contohnya dari Pulau
          Sumatra, Pulau Kalimantan, Pulau Sulawesi, Pulau Papua, Pulau
          Lombok.
        </p>
      </div>
      <div class="course-col">
        <h3>Deskripsi Tanaman</h3>
        <p>
          Menjelaskan tentang manfaat tanaman, cara penanaman yang benar,
          serta perawatan tanaman.
        </p>
      </div>
    </div>
  </section>
  <div class="campus">
    <div class="course-col">
      <h5 class="mt-0">Media Artikel</h5>
      <img class="img" width='600px' height='400px' src="images/Bersama.jpg" alt="Generic placeholder image">
      <p>Dosen UNIMMA lakukan kegiatan pengabdian di Desa Gandusari, Kecamatan Bandongan, Kabupaten Magelang. Kegiatan ini merupakan implementasi program Pengabdian Dosen Mandiri sebagai tindak lanjut kerjasama Universitas Muhammadiyah Magelang dengan Desa Bandongan. Pengabdian Dosen Mandiri merupakan upaya dari dosen UNIMMA untuk desa sekitar yang bertujuan untuk meningkatkan pengelolaan dan pembukuan di sektor pertanian Desa Gandusari.</p>
      <p class="mb-10"><a href="https://www.kompasiana.com/slametainulyaqin1953/6669bc7ded641509614a4d43/dosen-unimma-lakukan-pendampingan-pertanian-inovatif" class="btn btn-primary">Lihat Artikel</a></p>
    </div>
  </div>
 

  <!-- Footer -->
  @include('partials.footer')
  <!-- Footer -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>


</html>