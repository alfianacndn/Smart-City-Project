@extends ('layout_user.template')

@section ('content')
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->




</head>

<body>
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <center>
                <h1 class="table">H I S T O R Y</h1>
                <h5 class="text-muted">
                </h5>

            </center>
            <div class="container" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table no-wrap v-middle mb-0">
                                        <thead>
                                            <tr class="border-0">
                                                <th class="border-0 font-14 font-weight-medium text-muted">Tanggal
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted px-2">Waktu
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted ">Arus Panel</th>
                                                <th class="border-0 font-14 font-weight-medium text-muted ">Sudut Servo</th>
                                                <th class="border-0 font-14 font-weight-medium text-muted ">Sudut Azimuth Matahari</th>
                                                <th class="border-0 font-14 font-weight-medium text-muted ">Azimuth Matahari->Servo</th>
                                                <th class="border-0 font-14 font-weight-medium text-muted ">Tegangan Batrai</th>
                                                <th class="border-0 font-14 font-weight-medium text-muted ">Tegangan Panel</th>

                                            </tr>
                                        </thead>
                                        <tbody id="tbody">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--Firebase Tasks--}}
                <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
                <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
                <script>
                    var config = {
                        apiKey: "{{ config('services.firebase.api_key') }}",
                        authDomain: "{{ config('services.firebase.auth_domain') }}",
                        databaseURL: "{{ config('services.firebase.database_url') }}",
                        storageBucket: "{{ config('services.firebase.storage_bucket') }}",
                    };
                    firebase.initializeApp(config);
                    var database = firebase.database();
                    var lastIndex = 0;
                    database.ref('History/').on('value', function(snapshot) {
                        var value = snapshot.val();
                        var htmls = [];
                        $.each(value, function(index, value) {
                            if (value) {
                                htmls.push('<tr>\
                            <td>' + value.Hari + '/' + value.Bulan + '/' + value.Tahun + ' </td>\
                        	<td >' + value.Jam + ':' + value.Menit + '</td>\
                        	<td>' + value.CurrentPanelSurya + 'A</td>\
                        	<td>' + value.NilaiSudutAkhirServo + '°</td>\
                        	<td>' + value.NilaiSudutAzimuthMathari + '°</td>\
                            <td>' + value.NilaiSudutAzimuthMathariYangDiKonversiKeRefrensiSudutServo + '°</td>\
                        	<td>' + value.VoltageBaterai + 'V</td>\
                        	<td>' + value.VoltagePanelSUrya + 'V</td>\
                        </tr>');
                            }
                            lastIndex = index;
                        });
                        $('#tbody').html(htmls);
                    });
                </script>


            </div>
        </div>
    </div>
</body>

</html>

@endsection