@extends ('layout_user.template')

@section ('content')
<html>

<head>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

</head>

<body>
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">


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
                <h1></h1>
                <br></br>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4></h4>
                                <h4></h4>
                                <center>
                                    <h2 class="table"> Your Smart Energy</h2>
                                    <h5 class="table"> {{Auth::user()->name}} - {{$data->kode_barang}}</h5>
                                </center>
                                <br></br>
                                <div class="table-responsive">
                                    <table class="table">

                                        <tbody>
                                            <tr>
                                                <td>Merk Panel</td>
                                                <td>{{$data->merk_panel}}</td>
                                                <td rowspan="2">
                                                    <center><img src="{{ url('gambar/'. $data->gambar_panel)}}" width=100px alt="">
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Spesifikasi Panel</td>
                                                <td>{{$data->spesifikasi_panel}}</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Merk Accu</td>
                                                <td>{{$data->merk_accu}}</td>
                                                <td rowspan="2">
                                                    <center><img src="{{ url('gambar/'. $data->gambar_accu)}}" width=100px alt="">
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Spesifikasi Accu</td>
                                                <td>{{$data->spesifikasi_accu}}</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Merk Servo</td>
                                                <td>{{$data->merk_servo}}</td>
                                                <td rowspan="2">
                                                    <center><img src="{{ url('gambar/'. $data->gambar_servo)}}" width=100px alt="">
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Spesifikasi Servo</td>
                                                <td>{{$data->spesifikasi_servo}}</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Merk Inverter</td>
                                                <td>{{$data->merk_inverter}}</td>
                                                <td rowspan="2">
                                                    <center><img src="{{ url('gambar/'. $data->gambar_inverter)}}" width=100px alt="">
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Spesifikasi Inverter</td>
                                                <td>{{$data->spesifikasi_inverter}}</td>
                                                <td></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection