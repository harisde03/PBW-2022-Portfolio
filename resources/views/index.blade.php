<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Haris Daffa | Portfolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/style.css') }}">
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-xl" style="font-family: 'Comfortaa', cursive;">
            <a class="navbar-brand fs-4" href="#" style="font-family: 'Lobster', cursive;">Haris Daffa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav me-auto mb-2 mb-lg-0"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#content">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#pendidikan">Pendidikan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#proyek">Proyek</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="container-xl min-vh-90" id="content" style="height: 90vh">
        <div class="row d-flex align-items-center" style="height: 100%">
            <div class="col-sm-12 col-xl-6" style="font-family: 'Lobster', cursive;">
                <div>
                    <h1 style="font-size: 4em">Hi!</h1>
                    <h3 style="font-size: 3em">I'am <span class="text-primary">Haris Daffa</span></h3>
                    <h3 class="mb-4" style="font-size: 3em">A Computer Science Student</h3>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="text-black-50 fs-2"
                                href="https://github.com/harisde03"><i class="fab fa-github"></i></a></li>
                        <li class="list-inline-item"><a class="text-black-50 fs-2"
                                href="https://www.linkedin.com/in/haris-daffa-494a4223a/"><i
                                    class="fab fa-linkedin"></i></a></li>
                        <li class="list-inline-item"><a class="text-black-50 fs-2"
                                href="https://www.instagram.com/harisde03/"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a class="text-black-50 fs-2"
                                href="https://twitter.com/harisde03"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a class="text-black-50 fs-2"
                                href="https://web.facebook.com/haris.daffa.731/"><i class="fab fa-facebook"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="d-flex justify-content-center">
                    <img class="img-fluid" src="{{ URL::asset('assets/images/foto.png') }}" alt="foto-muka">
                </div>
            </div>
        </div>
    </section>

    <section class="container-xl min-vh-90" id="pendidikan">
        <div class="col">
            <div class="row d-flex justify-content-center my-5">
                <h1 class="text-center" style="font-family: 'Lobster', cursive; font-size: 4em">Riwayat Pendidikan
                </h1>
            </div>
            <div class="row d-flex justify-content-center my-5">
                <img src="{{ URL::asset('assets/images/sukma.png') }}" alt="sukma" class="img-fluid mb-3"
                    style="height: 240px; width: 240px">
                <h2 class="text-center">SMAS Sukma Bangsa Lhokseumawe</h2>
                <p>Saya belajar di SMA Sukma Bangsa Lhokseumawe dari Tahun 2017 hingga 2020 dan
                    telah meraih beberapa prestasi selama sekolah di sana. Salah satu momen yang tidak dapat saya
                    lupakan
                    adalah meraih juara 1 Olimpiade Sains bidang Komputer tingkat Kota Lhokseumawe.</p>
            </div>
            <div class="row d-flex justify-content-center my-5">
                <img src="{{ URL::asset('assets/images/usk.png') }}" alt="usk" class="img-fluid mb-3"
                    style="height: 240px; width: 260px">
                <h2 class="text-center">Universitas Syiah Kuala</h2>
                <p>Saya belajar di Fakultas Matematika dan Ilmu Pengetahuan Alam di Jurusan
                    Informatika. Dimulai tahun 2020 hingga sampai saat ini. Selama saya kuliah, saya telah mengikuti
                    banyak kegiatan, seperti bertanggung jawab dalam sebuah acara organisasi namun belum meraih prestasi
                    apapun selama belajar di sana.</p>
            </div>
        </div>
    </section>

    <section class="container-xl min-vh-90" id="proyek">
        <div class="col">
            <div class="row d-flex justify-content-center my-5">
                <h1 class="text-center" style="font-family: 'Lobster', cursive; font-size: 4em">Proyek</h1>
            </div>
            <div class="row">
                <div class="col-sm-12 col-xl-6">
                    <h2 class="text-center" style="font-family: 'Lobster', cursive;">Who Wants To Be a Millionaire
                    </h2>
                    <a href="https://github.com/harisde03/proyek-kelompok1"><img
                            src="{{ URL::asset('assets/images/proyek1.png') }}" alt="proyek-1"
                            class="img-fluid mb-4"></a>
                    <p>Aplikasi ini merupakan projek kelompok kami dalam mata kuliah pemrograman semester 2, yaitu
                        membuat permainan Who Wants To Be a Millionaire. Dimana kami mengimplementasikan semua yang
                        telah kami pelajari selama satu semester ini.
                    </p>
                </div>
                <div class="col-sm-12 col-xl-6">
                    <h2 class="text-center" style="font-family: 'Lobster', cursive;">YukBacaYuk</h2>
                    <a href="https://github.com/harisde03/YukBisaYuk_YukBacaYuk"><img
                            src="{{ URL::asset('assets/images/proyek2.png') }}" alt="proyek-2"
                            class="img-fluid mb-4"></a>
                    <p>YukBacaYuk merupakan aplikasi yang memudahkan pengguna untuk membeli buku dengan tampilan yang
                        interaktif. Setiap buku yang ditampilkan dikategorikan berdasarkan genrenya masing masing.
                        Setiap buku ditampilkan dengan penulis, cover, dan harga yang terupdate berdasarkan dataset yang
                        dapat dijaminkan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <footer class="container-fluid bg-dark text-white">
        <div class="row d-flex justify-content-center">
            <p class="text-center" style="font-family: 'Lobster', cursive; font-size: 1em">Copyright &copy; 2022
                Haris Daffa</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
