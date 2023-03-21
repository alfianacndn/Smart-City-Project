@extends ('layout_user.template')

@section ('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar AJAX dengan JQuery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>

<body>

    <div class="page-wrapper">

        <!-- ==============================
    ================================ -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <center>
                <h1 class="table">S M A R T L I G H T</h1>
                <h5 class="text-muted"> Data akan diperbarui tiap 40 menit sekali
                </h5>

                <script type="text/javascript">
                    window.onload = function() {
                        jam();
                    }

                    function jam() {
                        var e = document.getElementById('jam'),
                            d = new Date(),
                            h, m, s;
                        h = d.getHours();
                        m = set(d.getMinutes());
                        s = set(d.getSeconds());

                        e.innerHTML = h + ':' + m + ':' + s;

                        setTimeout('jam()', 1000);
                    }

                    function set(e) {
                        e = e < 10 ? '0' + e : e;
                        return e;
                    }
                </script>

                <center>
                    <h1 style="font-size: 20px; font-family: verdana;" id="jam"></h1>
                    <?php
                    echo date('l, d M Y');
                    ?>

                </center>

                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1"></h4>

                    </div>
                </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->

            <div class="row">

                <!-- column -->
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Kondisi Lampu 1</h4>
                            <div class="text-center">
                                <center>
                                    <img id='Lampu1' src='' height=250px>
                                </center>
                            </div>
                            <center>
                                <h4 id="textLampu1"></h4>
                            </center>
                        </div>
                    </div>
                </div>
                <!-- column -->

                <!-- column -->

                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Kondisi Lampu 2</h4>
                            <div class="text-center">
                                <center>
                                    <img id='Lampu2' src='' height=250px>
                                </center>
                            </div>
                            <center>
                                <h4 id="textLampu2"> </h4>
                            </center>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4></h4>
                            <h4></h4>
                            <h4 class="card-title"> Konsumsi Daya Total</h4>
                            <center>
                                <?php
                                echo "<img src ='../asset/images/daya_aktif.png' height = 250px>";
                                ?>
                            </center>
                            <div class="card-body">
                                <center>
                                    <h4 id="textDaya"></h4>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
        <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
        <script>
            // Initialize Firebase
            const config = {
                apiKey: "{{ config('services.firebase.api_key') }}",
                authDomain: "{{ config('services.firebase.auth_domain') }}",
                databaseURL: "{{ config('services.firebase.database_url') }}",
                storageBucket: "{{ config('services.firebase.storage_bucket') }}",
            };
            firebase.initializeApp(config);
            const database = firebase.database();

            const l1Ref = firebase.database().ref("/DataUpdateTerakhir/Lampu1");
            l1Ref.on('value', (snapshot) => {
                const data = snapshot.val();
                if (data === "ON") {
                    $("#Lampu1").attr("src", "../asset/images/lampu_aktif.png")
                    $("#textLampu1").html("Aktif")
                } else {
                    $("#Lampu1").attr("src", "../asset/images/lampu_tidak_aktif.png")
                    $("#textLampu1").html("Tidak Aktif")
                }
            });
            const l2Ref = firebase.database().ref("/DataUpdateTerakhir/Lampu2");
            l2Ref.on('value', (snapshot) => {
                const data = snapshot.val();
                if (data === "ON") {
                    $("#Lampu2").attr("src", "../asset/images/lampu_aktif.png")
                    $("#textLampu2").html("Aktif")
                } else {
                    $("#Lampu2").attr("src", "../asset/images/lampu_tidak_aktif.png")
                    $("#textLampu2").html("Tidak Aktif")
                }
            });
            const dayaRef = firebase.database().ref("/DataUpdateTerakhir/pzemValue");
            dayaRef.on('value', (snapshot) => {
                const data = snapshot.val();
                $("#textDaya").html(data)
            });
        </script>
</body>

</html>
@endsection