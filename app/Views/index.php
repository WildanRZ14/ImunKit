<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImunKit</title>
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/style/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/style/js/booytstrap.min.js">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/style/css/custom.css">
</head>

<body>
    <section id="beranda">
        <nav class="navbar navbar-expand-lg py-5 mb-4 fixed-top sticky sticky-dark nav-sticky bg-nav">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url(); ?>"><i class=""></i> ImunKit
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item ">
                            <a class="nav-link scrollto active" aria-current="page" href="#beranda">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>/login">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section id="landingPage" class="landingPage">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="home-content" data-aos="fade-up" data-aos-duration="1000">
                        <h1 class="text-home-bold fw-bold text-primary mt-5">
                            Selamat Datang di ImunKit</h1>
                        <h4 class="text-home-reguler fw-normal text-secondary">
                            Solusi tepat untuk menjaga kesehatan buah hati Anda. Anak sehat dan bebas penyakit dengan
                            imunisasi tepat waktu.
                        </h4>
                        <div class="home-btn mt-5">
                            <a href="#" class="btn btn-primary shadow-none">Lihat Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="home-img" data-aos="fade-up" data-aos-duration="2000">
                        <img src="<?= base_url('assets/images/LandingPage.png'); ?>" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="fitur" id="fitur">
        <div class="container pt-3">
            <h3 class="fw-bold text-primary mt-3 text-center">Fitur</h3>
            <div class="row">
                <div class="col-lg-4 col-md-6 content mt-5" data-aos="fade-up" data-aos-duration="1000">
                    <div class="text-center">
                        <img src="<?= base_url('assets/images/guide.png'); ?>" class="w-50" alt="">
                    </div>
                    <h5 class="services-title text-dark mt-4">Pemantauan</h5>
                    <p class="text-secondary mt-3">Membantu orang tua dalam memantau perkembangan bayi
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 content mt-5" data-aos="fade-up" data-aos-duration="2000">
                    <div class="text-center">
                        <img src="<?= base_url('assets/images/timetable.png'); ?>" class="w-50" alt="">
                    </div>
                    <h5 class="services-title text-dark mt-4">Jadwal Imunisasi</h5>
                    <p class="text-secondary mt-3">Memberi tahu orang tua seputar jadwal imunisasi yang akan diadakan.
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 content mt-5" data-aos="fade-up" data-aos-duration="3000">
                    <div class="text-center">
                        <img src="<?= base_url('assets/images/article.png'); ?>" class="w-50" alt="">
                    </div>
                    <h5 class="services-title text-dark mt-4">Artikel Seputar Imunisasi</h5>
                    <p class="text-secondary mt-3">Orang tua mendapatkan informasi seputar imunisasi pada bayi atau anak
                        dari artikel yang tersedia.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="about" id="about">
        <div class="container">
            <h3 class="fw-bold text-primary mt-5 text-center pt-5">Tentang Kami</h3>
            <div class="row align-items-center pb-3">
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="gallery-img mt-3 text-center" data-aos="fade-up" data-aos-duration="1000">
                                <img src="<?= base_url('assets/images/contact.png'); ?>" class="w-75" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-content" data-aos="fade-up" data-aos-duration="2000">
                        <h2 class="fw-bold text-dark mt-3">ImunKit</h2>
                        <p class="text-secondary mt-3 text-justify">
                            ImunKit memberikan informasi terpercaya tentang pentingnya imunitas anak dan panduan yang
                            mudah dipahami bagi orang tua. Termasuk jadwal imunisasi, pemantauan perkembangan imunitas
                            anak, lokasi vaksinasi gratis, dan tips pencegahan penyakit.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="<?= base_url(); ?>/assets/style/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/assets/fontawesome/js/all.min.js"></script>
</body>

</html>