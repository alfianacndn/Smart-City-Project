@extends ('layout_admin.template')
@section ('content')
<div class="page-wrapper">
    <!-- Bread crumb and right sidebar toggle -->
    <div class="page-custom">
        <br></br>
        <center>
            <h1 class="table">P R O F I L E U S E R</h1>
        </center>
        <br></br>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Foto</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $a)
                                <tr>
                                    <td>{{$a->nama}}</td>
                                    <td>{{$a->email}}</td>
                                    <td>{{$a->alamat}}</td>
                                    <td><img src="{{ url('gambar_profil/'. $a->foto)}}" width=100px;></td>
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

@endsection