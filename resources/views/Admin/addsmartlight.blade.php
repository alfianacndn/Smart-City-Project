@extends ('layout_admin.template')

@section ('content')

<div class="page-wrapper">
    <!-- Bread crumb and right sidebar toggle -->
    <div class="page-breadcrumb">
        <center>
            <h1 class="table">ADD SMARTLIGHT</h1>
        </center>
        <br></br>
        <div class="container-fluid">
            <!-- Start First Cards -->

            <div class="card">
                <div class="card-body">
                    <form action="smartlight/insert" method="post" enctype="multipart/form-data">
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
                                        <td>Merk Lampu</td>
                                        <td><input type="text" name="merk_lampu" id="text" placeholder="Merk Lampu" class="form-control">
                                            <div class="text-danger">
                                                @error('merk_lampu')
                                                {{$message}}
                                                @enderror
                                            </div>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>Watt Lampu</td>
                                        <td><input type="text" name="watt_lampu" id="text" placeholder="Watt Lampu" class="form-control">
                                            <div class="text-danger">
                                                @error('watt_lampu')
                                                {{$message}}
                                                @enderror
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Gambar Lampu</td>
                                        <td>
                                            <div class="custom-file">

                                                <input type="file" name="gambar_lampu" class="form-control">
                                                <h5>Type File JPG,PNG,JPEG</h5>
                                            </div>
                                            <div class="text-danger">
                                                @error('gambar_lampu')
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