@extends ('layout.template')

@section('content')
<!-- banner -->
<section class="banner_main">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="test_box">
                    <div class="text-bg">
                        <h1><span> Welcome to</span> <br>Our Smart City</h1>
                        <p>Merupakan upaya-upaya inovatif yang dilakukan ekosistem kota dalam mengatasi berbagai persoalan dan meningkatkan kualitas hidup manusia dan komunitas setempat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="banner1" class="carousel slide banner_Carousel " data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#banner1" data-slide-to="0" class="active"></li>
                        <li data-target="#banner1" data-slide-to="1"></li>
                        <li data-target="#banner1" data-slide-to="2"></li>
                        <li data-target="#banner1" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="carousel-caption ">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="banner_img">
                                                <figure><img src="asset/images/Seluler.png" alt="#" /></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="banner_img">
                                                <figure><img src="asset/images/Seluler.png" alt="#" /></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="banner_img">
                                                <figure><img src="asset/images/Seluler.png" alt="#" /></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="banner_img">
                                                <figure><img src="asset/images/Seluler.png" alt="#" /></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->
<!-- about -->
<div class="about">
    <div class="container">
        <div class="row d_flex">
            <div class="col-md-7">
                <div class="about_img">
                    < <figure><img src="asset/images/about.png" alt="#" /></figure>
                </div>
            </div>
            <div class="col-md-5">
                <div class="titlepage">
                    <h2>About Our Smart City</h2>
                    <p>Our Smart City merupakan sebuah hasil dari gagasan ide untuk upaya-upaya inovatif yang dilakukan ekosistem kota dalam mengatasi berbagai persoalan dan meningkatkan kualitas hidup manusia serta komunitas setempat. Mengingat Indonesia sedang mencanangkan gerakan ...</p>
                    <a class="read_more" href="/about">More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end about -->

<!-- Our Juices -->
<div class="juices ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Our Smart City</h2>
                    <p>Berkenalan Dengan Produk Kami</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="our_main_box">
                    <div class="our_img">
                        <figure><img src="asset/images/lampu_taman.webp" alt="#" /></figure>
                    </div>
                    <div class="our_text">
                        <h4><strong class="yellow"></strong></h4>
                        <h3>Smart Light</h3>
                        <p>Kendalikan lampu-mu melalui smartphone dengan konsumsi daya yang bisa kamu pantau.</p>
                        <a class="read_more" href="/smartlight">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="our_main_box">
                    <div class="our_img">
                        <figure><img src="asset/images/solar.jpg" alt="#" /></figure>
                    </div>
                    <div class="our_text">
                        <h4><strong class="yellow"></strong></h4>
                        <h3>Solar Tracker System</h3>
                        <p>Hemat energi menggunakan panel sel surya yang akan mengikuti dimana matahari berada.</p>
                        <a class="read_more" href="/smartenergy">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end Our Juices  section -->

<!-- testimonial -->
<div class="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Our Team</h2>
                    <p>Berkenalan dengan kami</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="myCarousel" class="carousel slide testimonial_Carousel " data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="carousel-caption ">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="test_box">
                                                <i><img src="asset/images/alfi.png" alt="#" /></i>
                                                <h4>Alfiana</h4>
                                                <p>Memiliki nama lengkap Alfiana Cendani Putri. Seorang mahasiswa Politeknik Manufaktur Bandung jurusan Teknik Otomasi Manufaktur dan Mekatronika Program Studi Mekatronika, dengan NIM 218341027.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="test_box">
                                                <i><img src="asset/images/bowo.png" alt="#" /></i>
                                                <h4>Bowo </h4>
                                                <p>Memiliki nama lengkap Bowo Mahatma. Seorang mahasiswa Politeknik Manufaktur Bandung jurusan Teknik Otomasi Manufaktur dan Mekatronika Program Studi Mekatronika, dengan NIM 218341029.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="test_box">
                                                <i><img src="asset/images/gilang.png" alt="#" /></i>
                                                <h4>Gilang </h4>
                                                <p>Memiliki nama lengkap Gilang Alif Prihadi. Seorang mahasiswa Politeknik Manufaktur Bandung jurusan Teknik Otomasi Manufaktur dan Mekatronika Program Studi Mekatronika, dengan NIM 218341029. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="test_box">
                                                <i><img src="asset/images/zulfi.png" alt="#" /></i>
                                                <h4>Zulfi </h4>
                                                <p>Memiliki nama lengkap Zulfi Fachrrurozi. Seorang mahasiswa Politeknik Manufaktur Bandung jurusan Teknik Otomasi Manufaktur dan Mekatronika Program Studi Mekatronika, dengan NIM 218341029. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end testimonial -->
@endsection