@extends ('layout_admin.template')

@section ('content')

<div class="page-wrapper">
    <!-- Bread crumb and right sidebar toggle -->
    <div class="page-breadcrumb">
        <center>
            <h1 class="table">B L O G</h1>
        </center>
        <br></br>
        <div class="container-fluid">
            <!-- Start First Cards -->
            @foreach ($data as $pos)
            <div class="card">
                <img src="{{ url('gambar_post/'. $pos->gambar)}}" height=300px width=100px class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">{{$pos->judul_pos}} </h5>
                    <p class="card-text">{{$pos->isi_pos}}</p>
                    <p class="card-text"><small class="text-muted">{{$pos->waktu_pos}}</small></p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>

@endsection