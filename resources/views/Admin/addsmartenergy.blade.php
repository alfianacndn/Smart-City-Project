@extends ('layout_admin.template')

@section ('content')

<div class="page-wrapper">
    <!-- Bread crumb and right sidebar toggle -->
    <div class="page-breadcrumb">
        <center>
            <h1 class="table">ADD SMARTENERGY</h1>
        </center>
        <br></br>
        <div class="container-fluid">
            <!-- Start First Cards -->

            <div class="card">
                <div class="card-body">
                    <form action="smartenergy/insert" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="table-responsive">
                            <table class="table">
                                <thead>

                                    <tr>
                                        <td>Kode Barang</td>
                                        <td><input type="text" name="kode_barang" id="text" placeholder="Kode Barang" class="form-control">
                                            <div class="text-danger">
                                                @error('kode_barang')
                                                {{$message}}
                                                @enderror
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Merk Panel</td>
                                        <td><input type="text" name="merk_panel" id="text" placeholder="Merk Panel" class="form-control">
                                            <div class="text-danger">
                                                @error('merk_panel')
                                                {{$message}}
                                                @enderror
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Spesifikasi Panel</td>
                                        <td><input type="text" name="spesifikasi_panel" id="text" placeholder="Spesifikasi Panel" class="form-control">
                                            <div class="text-danger">
                                                @error('spesifikasi_panel')
                                                {{$message}}
                                                @enderror
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Merk Accu</td>
                                        <td><input type="text" name="merk_accu" id="text" placeholder="Merk Accu" class="form-control">
                                            <div class="text-danger">
                                                @error('merk_accu')
                                                {{$message}}
                                                @enderror
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Spesifikasi Accu</td>
                                        <td><input type="text" name="spesifikasi_accu" id="text" placeholder="Spesifikasi Accu" class="form-control">
                                            <div class="text-danger">
                                                @error('spesifikasi_accu')
                                                {{$message}}
                                                @enderror
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Merk Servo</td>
                                        <td><input type="text" name="merk_servo" id="text" placeholder="Merk Servo" class="form-control">
                                            <div class="text-danger">
                                                @error('merk_servo')
                                                {{$message}}
                                                @enderror
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Spesifikasi Servo</td>
                                        <td><input type="text" name="spesifikasi_servo" id="text" placeholder="Spesifikasi Servo" class="form-control">
                                            <div class="text-danger">
                                                @error('spesifikasi_servo')
                                                {{$message}}
                                                @enderror
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Merk Inverter</td>
                                        <td><input type="text" name="merk_inverter" id="text" placeholder="Merk Inverter" class="form-control">
                                            <div class="text-danger">
                                                @error('merk_inverter')
                                                {{$message}}
                                                @enderror
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Spesifikasi Inverter</td>
                                        <td><input type="text" name="spesifikasi_inverter" id="text" placeholder="Spesifikasi Inverter" class="form-control">
                                            <div class="text-danger">
                                                @error('spesifikasi_inverter')
                                                {{$message}}
                                                @enderror
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Gambar Accu</td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" name="gambar_accu" class="form-control">
                                                <h5>Type File JPG,PNG,JPEG</h5>
                                            </div>
                                            <div class="text-danger">
                                                @error('gambar_accu')
                                                {{$message}}
                                                @enderror
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Gambar Servo</td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" name="gambar_servo" class="form-control">
                                                <h5>Type File JPG,PNG,JPEG</h5>
                                            </div>
                                            <div class="text-danger">
                                                @error('gambar_servo')
                                                {{$message}}
                                                @enderror
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Gambar Panel</td>
                                        <td>
                                            <div class="custom-file">
                                                <input type="file" name="gambar_panel" class="form-control">
                                                <h5>Type File JPG,PNG,JPEG</h5>
                                            </div>
                                            <div class="text-danger">
                                                @error('gambar_panel')
                                                {{$message}}
                                                @enderror
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Gambar Inverter</td>
                                        <td>
                                            <div class="custom-file">

                                                <input type="file" name="gambar_inverter" class="form-control">
                                                <h5>Type File JPG,PNG,JPEG</h5>
                                            </div>
                                            <div class="text-danger">
                                                @error('gambar_inverter')
                                                {{$message}}
                                                @enderror
                                            </div>
                                        </td>

                                    </tr>
                                </thead>
                            </table>
                            <center>
                                <button class="btn alfisubmit">Button</button>
                            </center>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .alfisubmit {
        color: #fff;
        background-color: #511f6d;
        border-color: #511f6d;
    }
</style>
@endsection