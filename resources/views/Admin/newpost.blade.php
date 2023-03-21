@extends ('layout_admin.template')
@section ('content')
<div class="page-wrapper">
    <!-- Bread crumb and right sidebar toggle -->
    <div class="page-custom">
        <center>
            <h1 class="table">N E W P O S T</h1>
        </center>
        <br></br>
        <div class="container">

            <div class="card">
                <div class="card-body">
                    <form action="newpost/insert" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input class="form-control" name="judul_pos" placeholder="Tittle"></input>
                        <div class="form-group">
                            <div class="row">
                                <textarea class="input" name="isi_pos" rows="2" placeholder="Text Here..."></textarea>
                            </div>
                        </div>
                        <form class="mt-4">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile04" name="foto">

                                    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn alfisubmit">Button</button>
                                </div>
                            </div>
                        </form>
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

    .container form input {
        width: calc(80% - 20px);
        padding: 8px 10px;
        margin-bottom: 15px;
        border: none;
        background-color: transparent;
        border-bottom: 2px solid #511f6d;
        color: #7c8798;
        font-size: 20px;
    }

    .page-custom {
        padding: 30px 250px;
        width: 100%;
    }

    .input {
        width: 900px;
        height: 100px;
        margin: 0px 15px;
    }
</style>
@endsection