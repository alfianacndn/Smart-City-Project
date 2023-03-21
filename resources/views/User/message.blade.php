@extends ('layout_user.template')

@section ('content')

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <center>
            <h1 class="table">Message</h1>
            <h5 class="text-muted"> Gunakan fitur pesan ini untuk menuliskan pengalaman kamu bersama Our Smart City.
            </h5>
            <h5 class="text-muted">Pesanmu akan kami balas dengan senang hati :-)
            </h5>

        </center>

        <div class="row">


            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->

            <div class="container py-5 px-4">
                <!-- Chat Box-->

                <div class="col-7 px-0">
                    <div class="px-4 py-5 chat-box bg-white">
                        <!-- Sender Message-->
                        <ul class="chat-list list-style-none px-3 pt-3">
                            @foreach($a as $pesan_admin)

                            @if($pesan_admin->pengirim == 'Admin' )
                            <!--chat Row -->
                            <li class="chat-item list-style-none mt-3">
                                <div class="chat-img d-inline-block"><img src="../asset/images/logo2.png" alt="user" class="rounded-circle" width="45">
                                </div>
                                <div class="chat-content d-inline-block pl-3">
                                    <h6 class="font-weight-medium"> Admin </h6>
                                    <div class="msg p-2 d-inline-block mb-1">{{$pesan_admin->isi_pesan}}</div>
                                </div>
                                <p class="small text-muted"></p>
                                <div class="chat-time d-block font-10 mt-1 mr-0 mb-3"> </div>
                            </li>
                            @else
                            <!--chat Row -->
                            <li class="chat-item odd list-style-none mt-3">
                                <div class="chat-content text-right d-inline-block pl-3">
                                    <div class="box msg p-2 d-inline-block mb-1">{{$pesan_admin->isi_pesan}}</div>
                                    <br>
                                    <p class="small text-muted"></p>
                                </div>
                            </li>
                            @endif
                            @endforeach
                        </ul>

                    </div>
                    <!-- Typing area -->
                    <form action="message/insert" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input name="pesan" placeholder="Type and enter" class="form-control border-0" type="text">
                            <div class="text-danger">
                                @error('isi_pesan')
                                {{$message}}
                                @enderror
                                @if (session('pesan'))
                                {{session('pesan')}}
                                @endif
                            </div>
                            <div class="input-group-append">
                                <button id="button-addon2" type="submit" class="btn btn-link"> <i class="fa fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </form>

                </div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"></script>
                <script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

            </div>
        </div>
    </div>
</div>
</div>

<style>
    body {
        background-color: #74EBD5;
        background-image: linear-gradient(90deg, #74EBD5 0%, #9FACE6 100%);

        min-height: 100vh;
    }

    ::-webkit-scrollbar {
        width: 5px;
    }

    ::-webkit-scrollbar-track {
        width: 5px;
        background: #f5f5f5;
    }

    ::-webkit-scrollbar-thumb {
        width: 1em;
        background-color: #ddd;
        outline: 1px solid slategrey;
        border-radius: 1rem;
    }

    .text-small {
        font-size: 0.9rem;
    }

    .messages-box,
    .chat-box {
        height: 510px;
        overflow-y: scroll;
    }

    .rounded-lg {
        border-radius: 0.5rem;
    }

    input::placeholder {
        font-size: 0.9rem;
        color: #999;
    }
</style>

@endsection