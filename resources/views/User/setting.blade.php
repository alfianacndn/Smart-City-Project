@extends ('layout_user.template')

@section ('content')
<div class="page-wrapper">
    <!-- Bread crumb and right sidebar toggle -->
    <div class="page-custom">
        <center>
            <h1 class="table">A C C O U N T</h1>
        </center>
        <div class="card">
            <div class="card-body">
                <center><img src="../gambar_profil/user.jpg" width=150px height=200px alt="..""</center>
                <br></br>
                <thead class =" .bg-warning .text-white">
                    <div class="table-responsive">
                        <form action="setting/insert" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <table class="table">
                                <tr>
                                    <td width='150px'>Nama</td>
                                    <td>{{Auth::user()->name}}</td>
                                </tr>
                            </table>
                            <table class="table">
                                <tr>
                                    <td width='150px'>Email</td>
                                    <td>{{Auth::user()->email}}</td>
                                </tr>
                            </table>
                            <table class="table">
                                <tr>
                                    <td width='150px'>Alamat</td>
                                    <td><input type="text" name="alamat" id="text" placeholder="Alamat" class="form-control">
                                        <div class="text-danger">
                                            @error('alamat')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </td>

                                </tr>
                            </table>

                            <table class="table">
                                <tr>
                                    <td width='150px'>Foto Profil</td>
                                    <td><input type="file" name="foto" class="form-control">
                                        <h5>Type File JPG,PNG,JPEG</h5>
                                        <div class="text-danger">
                                            @error('foto')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <button class="btn alfisubmit">Save</button>
                    </div>
                    </thead>
            </div>
        </div>
    </div>
</div>
</div>

<style>
    .page-custom {
        padding: 30px 250px;
    }

    .alfisubmit {
        color: #fff;
        background-color: #511f6d;
        border-color: #511f6d;
    }
</style>
@endsection