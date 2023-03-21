@extends ('layout_user.template')

@section ('content')
<html>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <center>
            <h1 class="table">S O L A R T R A C K E R S Y S T E M</h1>
            <h5 class="text-muted"> Data akan diperbarui tiap 40 menit sekali
            </h5>

        </center>
        <div class="row">

        </div>
    </div>
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
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">

            <!-- column -->
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h6>.</h6>
                        <h4 class="card-title">Sudut Servo(°)</h4>
                        <br></br>
                        <div class="text-center">
                            <h1 class="sudut" id="sudut-servo"></h1>
                        </div>
                        <br></br>
                    </div>
                </div>
            </div>
            <!-- column -->

            <!-- column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h6>.</h6>

                        <h4 class="card-title">Tegangan Panel</h4>

                        <div class="text-center">
                            <?php
                            // $tegangan = $SE['VoltagePanelSUrya'];
                            // echo $tegangan;
                            // echo " Volt";
                            ?>
                            <h4 id="tegangan-panel"></h4>
                        </div>
                        <br></br>
                        <h4 class="card-title">Arus Panel</h4>

                        <div class="text-center">
                            <?php
                            // $arus =  $SE['CurrentPanelSurya'];
                            // echo $arus;
                            // echo "Ampere";
                            ?>
                            <h4 id="arus-panel"></h4>
                        </div>
                        <br></br>
                        <h4 class="card-title">Daya Panel</h4>

                        <div class="text-center">

                            <?php
                            // $daya_ = $arus *   $tegangan;
                            // echo $daya_;
                            // echo " Watt";

                            ?>
                            <h4 id="daya"></h4>
                        </div>

                    </div>
                </div>
            </div>
            <!-- column -->

            <!-- column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tegangan Batrai</h4>

                        <div class="text-center">

                            <?php
                            // $teganganb = $SE['VoltageBaterai'];
                            // echo $teganganb;
                            // echo " Watt";
                            ?>
                            <h4 id="tegangan-baterai"></h4>
                        </div>

                    </div>
                </div>
            </div>
            <!-- column -->

            <!-- column -->




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
            const dbRef = firebase.database().ref("/DataUpdateTerakhir/NilaiSudutServo");
            dbRef.on('value', (snapshot) => {
                const data = snapshot.val();
                $("#sudut-servo").html(data + '°')
            });

            const teganganpanelRef = firebase.database().ref("/DataUpdateTerakhir/VoltagePanelSUrya");
            teganganpanelRef.on('value', (snapshot) => {
                const data = snapshot.val();
                $("#tegangan-panel").html(data + ' Volt')
            });

            const aruspanelRef = firebase.database().ref("/DataUpdateTerakhir/CurrentPanelSurya");
            aruspanelRef.on('value', (snapshot) => {
                const data = snapshot.val();
                $("#arus-panel").html(data + 'Ampere')
            });

            const teganganbateraiRef = firebase.database().ref("/DataUpdateTerakhir/VoltageBaterai");
            teganganbateraiRef.on('value', (snapshot) => {
                const data = snapshot.val();
                $("#tegangan-baterai").html(data + ' Volt')
            });

            const dayaRef = firebase.database().ref("/DataUpdateTerakhir/VoltagePanelSUrya");
            dayaRef.on('value', (snapshot) => {
                const data = snapshot.val();
                const teganganpanelRef = firebase.database().ref("/DataUpdateTerakhir/CurrentPanelSurya");
                teganganpanelRef.on('value', (snapshot) => {
                    const data1 = snapshot.val();
                    $("#daya").html(data * data1 + " Watt")
                });
            });
        </script>
        <style>
            .sudut {
                font-size: 119px;
                color: #e5a800;
            }
        </style>
    </div>
</div>
@endsection