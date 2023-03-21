@extends ('layout_admin.template')

@section ('content')


<div class="page-wrapper">
    <!-- Bread crumb and right sidebar toggle -->
    <div class="page-breadcrumb">
        <center>
            <h1 class="table">S M A R T L I G H T</h1>
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
                                    <th>Merk Lampu</th>
                                    <th>Watt Lampu</th>
                                    <th>Lampu</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $a)
                                <tr>
                                    <td>{{$a->kode_barang}}</td>
                                    <td>{{$a->merk_lampu}}</td>
                                    <td>{{$a->watt_lampu}}</td>
                                    <td><img src="{{ url('gambar/'. $a->gambar_lampu)}}" width=100px;></td>
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