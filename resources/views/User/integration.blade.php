@extends ('layout_user.template')

@section ('content')
<div class="page-wrapper">
    <!-- Bread crumb and right sidebar toggle -->
    <div class="page-custom">
        <center>
            <h1 class="table">S C H O M A</h1>
            <h5 class="text-muted"> Integrasikan Dengan Smartphone kamu!
            </h5>
        </center>
        <br></br>
        <div class="container-fluid">


            <div class="card card-default">
                <div class="card-body">
                    <form id="addUser" class="form-inline" method="POST" action="integration/logout" enctype="multipart/form-data">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Nama</td>
                                        <td><input id="name" name="nama" value="<?php echo $b ?>" readonly="yes">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>No telp</td>
                                        <td><input id="telp" type="text" class="form-control" name="telp" placeholder="telp" required autofocus></td>
                                    </tr>
                                    <tr>
                                        <td>User ID </td>
                                        <td><input id="uid" name="uid" value="{{$a}}" readonly="yes"></td>
                                        <div class="alert alert-success" role="alert">
                                            <i id="PopUp" </div>
                                    </tr>
                                </tbody>
                            </table>
                            <center><button id="submitUser" type="button" class="btn alfisubmit">Submit</button></center>
                        </div>
                    </form>

                </div>

            </div>
            {{--Firebase Tasks--}}
            <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
            <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
            <script>
                // Initialize Firebase
                var config = {
                    apiKey: "{{ config('services.firebase.api_key') }}",
                    authDomain: "{{ config('services.firebase.auth_domain') }}",
                    databaseURL: "{{ config('services.firebase.database_url') }}",
                    storageBucket: "{{ config('services.firebase.storage_bucket') }}",
                };
                firebase.initializeApp(config);
                var database = firebase.database();
                var lastIndex = "";

                // Add Data
                $('#submitUser').on('click', function() {
                    var values = $("#addUser").serializeArray();
                    var name = values[0].value;
                    var telp = values[1].value;
                    var uid = values[2].value;

                    console.log(values);

                    firebase.database().ref('Users/' + uid).set({
                        name: name,
                        telp: telp,

                    });

                    // Reassign lastID value
                    lastIndex = uid;
                    document.getElementById("telp").value = "";
                    // $("#addUser input ").val("");
                    $("#PopUp").html('Data Berhasil Ditambahkan')
                });
            </script>



        </div>
    </div>
</div>

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