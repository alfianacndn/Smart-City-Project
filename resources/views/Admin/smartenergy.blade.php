@extends ('layout_admin.template')

@section ('content')


<div class="page-wrapper">
    <!-- Bread crumb and right sidebar toggle -->
    <div class="page-breadcrumb">
        <center>
            <h1 class="table">S O L A R T R A C K E R S Y S T E M</h1>
        </center>
        <br></br>
        <div class="container-fluid">
            <!-- Start First Cards -->
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">

                            <thead>
                                <tr>
                                    <th>Kode Barang</th>
                                    <th>Merk Panel</th>
                                    <th>Spesifikasi Panel</th>
                                    <th>Merk Accu</th>
                                    <th>Spesifikasi Accu</th>
                                    <th>Merk Servo</th>
                                    <th>Spesfikasi Servo</th>
                                    <th>Merk Inverter</th>
                                    <th>Spesifikasi Inverter</th>
                                    <th>Panel</th>
                                    <th>Accu</th>
                                    <th>Servo</th>
                                    <th>Inverter</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $a)
                                <tr>
                                    <td>{{$a->kode_barang}}</td>
                                    <td>{{$a->merk_panel}}</td>
                                    <td>{{$a->spesifikasi_panel}}</td>
                                    <td>{{$a->merk_accu}}</td>
                                    <td>{{$a->spesifikasi_accu}}</td>
                                    <td>{{$a->merk_servo}}</td>
                                    <td>{{$a->spesifikasi_servo}}</td>
                                    <td>{{$a->merk_inverter}}</td>
                                    <td>{{$a->spesifikasi_inverter}}</td>
                                    <td><img src="{{ url('gambar/'. $a->gambar_panel)}}" width=100px;> </td>
                                    <td><img src="{{ url('gambar/'. $a->gambar_accu)}}" width=100px;></td>
                                    <td><img src="{{ url('gambar/'. $a->gambar_servo)}}" width=100px;></td>
                                    <td><img src="{{ url('gambar/'. $a->gambar_inverter)}}" width=100px;></td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
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