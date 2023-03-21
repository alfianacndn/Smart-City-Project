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
        <div class="page-custom">
            <center>
                <h1 class="table">SCAN YOUR SMART ENERGY</h1>
            </center>

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <center>
                    <!-- column -->

                    <div class="card">

                        <div class="card-body">
                            <input name="kode_integrasi" type="hidden" value="{{Auth::user()->name . 'SE'}}"></input>
                            <div class="text-center">
                                <video id="preview" width="80%"></video>
                                <form action="smartenergy/insert" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <center><input type="text" name="kode_barang" id="text" readonly="yes" placeholder="Your Smart City" class="form-control">
                                    </center>
                                    <div class="text-danger">
                                        @error('kode_barang')
                                        {{$message}}
                                        @enderror
                                        @if (session('pesan'))
                                        {{session('pesan')}}
                                        @endif
                                    </div>
                                    <button class="btn alfisubmit">Submit</button>
                            </div>
                        </div>
                    </div>


                </center>

                <script>
                    let scanner = new Instascan.Scanner({
                        video: document.getElementById('preview')
                    });
                    Instascan.Camera.getCameras().then(function(cameras) {
                        if (cameras.length > 0) {
                            scanner.start(cameras[0]);
                        } else {
                            alert('No cameras Found');
                        }
                    }).catch(function(e) {
                        console.error(e);
                    });

                    scanner.addListener('scan', function(c) {
                        document.getElementById('text').value = c;
                    });
                </script>
            </div>
        </div>
    </div>
</body>

</html>
<style>
    .alfisubmit {
        color: #fff;
        background-color: #511f6d;
        border-color: #511f6d;
    }

    .page-custom {
        padding: 30px 250px;
    }
</style>


@endsection