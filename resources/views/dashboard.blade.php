
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link href="lib/animate/animate.min.css" rel="stylesheet">


    <style>

        *.info {
            padding: 6px 8px;
            font: 14px/16px Arial, Helvetica, sans-serif;
            background: white;
            background: #F3EEEF;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            text-align: center;
        }

        .info h2 {
            margin: 0 0 5px;
            color: #F2EFEA;
        }


        .text-over {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #FAF8F1;
            font-size: 60px;
            font-family: 'Poppins';;
        }

        .text-over-kecil {
            position: absolute;
            top: 57%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #FAF8F1;
            font-size: 30px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }


        .text-card {
            text-align: center;
            color: white;
            font-size: 18px;
            font-family: 'segoe-ui';
        }

        .text-card2 {
            text-align: center;
            color: black;
            font-size: 20px;
            font-family: 'segoe-ui';
        }

        .text-paragraf {
            text-align: center;
            color: black;
            font-size: 15px;
            font-family: 'Garamond';
        }

        .text-judul {
            text-align: center;
            color: black;
            font-size: 25px;
            font-family: 'Georgia';
        }

        .card-style {
            border-style: solid;
            border-color: #F3F7EC;
            background-color: #F3F7EC;
            border-radius: 18px;
            margin-right: 20px;
            border-width: 5px;
        }

        .bg-blue {
            background-color: #006989;
            border-radius: 35px;
        }

        .bg-brown2 {
            background-color: #F3F7EC;
        }

.feature_section {
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

.feature_section .feature_container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.feature_section .feature_container .box {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  text-align: center;
  margin: 0 10px;
  padding: 45px 15px;
  background-color: #ffffff;
  color: #006989;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  -webkit-box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.2);
          box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.2);
}

.feature_section .feature_container .box .img-box {
  width: 90px;
  height: 90px;
}

.feature_section .feature_container .box .img-box svg {
  width: 100%;
  height: auto;
  max-height: 100%;
  fill: #006989;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.feature_section .feature_container .box .name {
  margin-top: 20px;
  text-transform: uppercase;
  font-family: 'Merriweather Sans', sans-serif;
  margin-bottom: 0;
}

.feature_section .feature_container .box:hover, .feature_section .feature_container .box.active {
  background-color: #006989;
  color: #ffffff;
}

.feature_section .feature_container .box:hover .img-box svg, .feature_section .feature_container .box.active .img-box svg {
  fill: #ffffff;
}

.feature_section .feature_container .box:hover .img-box svg path, .feature_section .feature_container .box.active .img-box svg path {
  fill: #ffffff;

    </style>
</head>


<x-app-layout>


<body>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" class="active"></li>
  </ol>
  <div>
      <img src="storage/2.png" alt="...">
      <div class="text-over">
      <b>Jelajahi Museum Bersama SIMBA! </b></div>
    </div>
  </div>
  </div>
</div>
</section>
<br>
<br>

  </section>

  <!-- feature section -->
  <section class="feature_section">
    <div class="container">
      <div class="feature_container">
        <div class="box">
          <div class="img-box">
              <img src= "storage/table.png" alt="map">
          </div>
          <a href="{{ route('table-point') }}">
          <h5 class="name">
            Tabel Informasi
          </h5>
          </a>
        </div>
        <div class="box active">
          <div class="img-box">
          <img src= "storage/maps.png" alt="map">
          </div>
          <a href="{{ route('index') }}">
          <h5 class="name">
            peta interaktif
          </h5>
          </a>
        </div>
        <div class="box">
          <div class="img-box">
          <img src= "storage/museum.png" alt="map">
          </div>
          <h5 class="name">
            Total Museum Tersedia
          </h5>
          <p style = "font-size: 30px;">{{$total_points}}</p>
        </div>
      </div>
    </div>
  </section>



    <!-- about -->
    <section id="b">
        <div class="container bg-blue">
            <div class="row text-center mb-3 bg-brown text-light">
                <div class="col text-card fst-italic">
                    <br>
                    <h2 style="text-shadow: 0 0 5px white"> ☾ ⋆*･ﾟ Tentang SIMBA ⋆*･ﾟ</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-7 bg-brown2 text-center">
                <div class="col-md-8 lh-base">
                    <p class="font-monospace">Pusat layanan yang menyediakan informasi terkait permuseuman di Kabupaten Bantul. Layanan ini dibuat dengan tujuan sebagai sarana pengkajian, pendidikan, dan rekreasi melalui museum yang terintegrasi dalam rangka membangun jejaring komunitas museum yang berkarakter dan berbudaya.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <br>
    <br>
    <br>

    <section id="sleman">
        <div class="row text-center text-card2">
            <div class="col ">
                <br>
                <h1>★・・・KOLEKSI MUSEUM SIMBA・・・★</h1>
            </div>
        </div>
        <br>
        <br>

        <div class="row">
            <div class="col-4">
                <div class="card card-style"
                    style="border-top-left-radius: 20px; border-top-right-radius: 20px; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px; margin-left: 20px;">
                    <img src="storage/museum-pleret.jpg"
                        style="width: 100%; height: 200px; object-fit: cover; border-top-left-radius: 20px; border-top-right-radius: 20px;">
                    <kebun class="text-judul">
                        <h2>Museum Sejarah Purbakala Pleret</h2>
                        <br>
                        <p class="text-paragraf">Museum ini menyimpan koleksi peninggalan Mataram di wilayah Bantul pada umumnya dan Pleret khususnya.
                        Kecamatan Pleret memiliki nilai historis yang tinggi karena menjadi tempat berdirinya  Keraton Kerto dan Keraton Pleret. Keraton tersebut sudah tidak dapat dijumpai, namun sebagian sisa bangunannya masih terpendam di dalam tanah, dan beberapa komponen bangunan yang rusak tersebar di beberapa wilayah di sekitar museum. <b>Bagaimana tertarik untuk mengunjungi?</b></p>
                </div>
            </div>
            <div class="col-4">
                <div class="card card-style"
                style="border-top-left-radius: 20px; border-top-right-radius: 20px; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px; margin-left: 20px;">
                    <img src="storage/HJV.jpg"
                        style="width: 100%; height: 200px; object-fit: cover; border-top-left-radius: 20px; border-top-right-radius: 20px;">
                    <telaga class="text-judul">
                        <h2>History of Java</h2>
                        <br>
                        <p class="text-paragraf">Di museum ini pengunjung bisa mengenal legenda tanah jawa dalam nilai dan tradisi yang eksotik.
                        Yang menarik dari museum ini adalah penggunaan teknologo AR (Augmented Reality), sehingga pengunjung bisa berinteraksi langsung dengan berbagai wmacam wujud benda atau orang.
                        <b>Bagaimana anda tertarik mengunjungi?</b>
                        </p>
                </div>
            </div>
            <div class="col-4">
                <div class="card card-style"
                style="border-top-left-radius: 20px; border-top-right-radius: 20px; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px; margin-left: 20px;">
                    <img src="storage/museumtani.jpg"
                        style="width: 100%; height: 200px; object-fit: cover; border-top-left-radius: 20px; border-top-right-radius: 20px;">
                    <batu class="text-judul">
                        <h3>Museum Tani</h3>
                        <br>
                        <p class="text-paragraf">Museum Tani Jawa Indonesia merupakan museum khusus yang pendiriannya digagas oleh Kristya Bintara yang pada saat itu menjadi Lurah Desa Kebonagung tahun 1998. Pendirian museum ini diawali dengan dibentuknya desa wisata pendidikan yang berbasis pertanian dan hampir mayoritas penduduk desa berprofesi sebagai petani.
                        Museum ini memiliki koleksi yang berkaitan dengan alat pertanian khususnya yang dipakai oleh masyarakat Yogyakarta. Museum ini seringkali menggelar acara yang berkaitan dengan pertanian seperti Festival Memedi Sawah dan berbagai lomba untuk umum.
                        <b>Bagaimana tertarik mengunjungi?</b>
                        </p>
                </div>
            </div>
        </div>
        <br>
    </section>
    <br>
    <br>
    <div class="container-xxl courses my-6 py-6 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; color: black;">
                <h1 class="display-6 mb-4 bg-brown" style="text-shadow: 0 0 3px white">ARTIKEL</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-12">
                    <div class="courses-item d-flex flex-column bg-brown2 overflow-hidden h-100"
                        style=" border-radius: 35px;">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-brown text-black fs-5 py-1 px-4 mb-4"></div>
                            <h5 class="mb-3"><b>Memperkenalkan Budaya Melalui Museum</b></h5>
                            <p>Wajib Kunjung Museum (WKM) merupakan kegiatan rutin tahunan yang diselenggarakan oleh Dinas Kebudayaan Kabupaten Bantul. Dengan adanya acara kunjung museum ini diharapkan bisa menjadi sarana promosi dan juga memperkenalkan museum-museum yang ada di Kabupaten Bantul. </p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="storage/WKM.jpg" alt="">
                            <div class="courses-overlay">
                                <a class="btn  border-2" style="background-color: #F2EFEA;"
                                    href="https://bantulkab.go.id/berita/detail/5296/memperkenalkan-budaya-melalui-museum.html#">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="courses-item d-flex flex-column bg-brown2 overflow-hidden h-100"
                        style=" border-radius: 35px;">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-brown text-black fs-5 py-1 px-4 mb-4"></div>
                            <h5 class="mb-3"><b>Serunya Main ke Museum Purbakala di Pleret Bantul, Jauh dari Kesan Seram!</b></h5>
                            <p>Museum Sejarah Purbakala Pleret di Bantul didirikan di lahan eks kompleks Keraton Mataram Islam. Kini museum ini dilengkapi teknologi canggih dan interaktif untuk mendeskripsikan koleksi bersejarahnya.</p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="storage/museumpleret.jpeg" alt="">
                            <div class="courses-overlay">
                                <a class="btn  border-2" style="background-color: #F2EFEA;"
                                    href="https://www.detik.com/jogja/budaya/d-7250578/serunya-main-ke-museum-purbakala-di-pleret-bantul-jauh-dari-kesan-seram">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<br>
<br>

<!-- footer -->
<footer id="a" class="bg-brown2 text-center text-lg-start">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Contact Us</h5>
                    <p>
                        WhatsApp
                        <strong>+62 88200731616</strong>
                        <br>
                        Email :
                        <strong> finiearaliashearani@mail.ugm.ac.id</strong>
                    </p>
                </div>
                <div class="col-lg-8 col-md-12 mb-4 mb-md-4">
                    <h6 class="text-end"><b>Let's Connect!</b></h6>
                    <ul class="text-end">
                        <li>
                            <a href="https://instagram.com/finiearalia_?igshid=OGQ5ZDc2ODk2ZA=="
                                class="text-center">Instagram</a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/finie-a-a1815b281?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                                class="">LinkedIn</a>
                        </li>
                </div>
                <div class="text-center p-2" style="background-color: #006989; color: #F2EFEA;">
                    ©SIMBA2024
                </div>
    </footer>

</body>
</x-app-layout>
