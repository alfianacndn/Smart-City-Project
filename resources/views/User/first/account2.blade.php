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
                                <td></td>
                            </tr>
                        </table>
                        <table class="table">
                            <tr>
                                <td width='150px'>Smart Light</td>
                                <td></td>
                            </tr>
                        </table>
                        <table class="table">
                            <tr>
                                <td width='150px'>Smart Energy</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
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
</style>
@endsection