@extends ('layout_admin.template')
@section ('content')

<body>
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-custom">
            <center>
                <h1 class="table">SCAN YOUR SMART ENERGY</h1>
            </center>

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <center>
                    <!-- column -->

                    <div class="card">

                        <div class="card-body">
                            @foreach ($a as $user)
                            <a href="" name="b">{{$user->name}}</a>
                            <br></br>
                            @endforeach
                        </div>
                    </div>
                    <h1>{{$c}}</h1>
                    <a name="alfo"> alfi</a>
                    <h1> {{$c}}</h1>
                </center>
            </div>
        </div>
    </div>
</body>
@endsection